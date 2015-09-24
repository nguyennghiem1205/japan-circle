<?php
namespace Admin\Controller;

use Admin\Controller\AppController;
use Cake\Core\Configure;
use Cake\Event\Event;

/**
 * HomeMenus Controller
 *
 * @property \Admin\Model\Table\HomeMenusTable $HomeMenus
 */
class HomeMenusController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event); // TODO: Change the autogenerated stub
        $this->loadModel('NewsCategories');
        $this->loadModel('Pages');
        $this->titleLayout = __('Menu');
    }
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('homeMenus', $this->HomeMenus->find('all',['order' => ['modified' => 'desc']]));
        $parentHomeMenus = $this->HomeMenus->find('list',['valueField' => 'name_'.$this->fieldLanguage]);
        $parentHomeMenus = $parentHomeMenus->toArray();
        $listNews = $this->NewsCategories->find('list',['status' => true, 'valueField' => 'name_'.$this->fieldLanguage]);
        $listPages = $this->Pages->find('list',['valueField' => 'title']);
        $listNews = $listNews->toArray();
        $listPages = $listPages->toArray();

        $this->set('_serialize', ['homeMenus']);
        $this->set(compact('parentHomeMenus', 'listNews', 'listPages'));
    }

    /**
     * View method
     *
     * @param string|null $id Home Menu id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $homeMenu = $this->HomeMenus->get($id, [

        ]);
        switch ($homeMenu->type) {
            case HOME_MENU_TYPE_NEWS:
                $child = $this->NewsCategories->get($homeMenu->child_id);
                $child = $child->toArray();
                $homeMenu->child_id = $child['name_'.$this->fieldLanguage];
                break;
            case HOME_MENU_TYPE_MEMBER:
                $homeMenu->child_id = Configure::read('Member.country.'.$homeMenu->child_id);
                break;
            case HOME_MENU_TYPE_PAGE:
                $child = $this->Pages->get($homeMenu->child_id);
                $child = $child->toArray();
                $homeMenu->child_id = $child['name_'.$this->fieldLanguage];
                break;
            case HOME_MENU_TYPE_INTRODUCE:
                break;
            case HOME_MENU_TYPE_INQUIRY:
                break;
            case HOME_MENU_TYPE_ACTIVITY:
                break;
        }
        if($homeMenu->parent_id) {
            $parent = $this->HomeMenus->get($homeMenu->parent_id);
            $parent = $parent->toArray();
            $homeMenu->parent_id = $parent['name_'.$this->fieldLanguage];
        }
        $this->set('homeMenu', $homeMenu);
        $this->set('_serialize', ['homeMenu']);

    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $homeMenu = $this->HomeMenus->newEntity();
        if ($this->request->is('post')) {
            $homeMenu = $this->HomeMenus->patchEntity($homeMenu, $this->request->data);
            if ($this->HomeMenus->save($homeMenu)) {
                $this->Flash->success(__('The home menu has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The home menu could not be saved. Please, try again.'));
            }
        }
        $parentHomeMenus = $this->HomeMenus->find('list',['valueField' => 'name_'.$this->fieldLanguage])->where(['parent_id is' => null]);
        $parentHomeMenus = $parentHomeMenus->toArray();
        $this->set(compact('homeMenu','parentHomeMenus'));
        $this->set('_serialize', ['homeMenu']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Home Menu id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $homeMenu = $this->HomeMenus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $homeMenu = $this->HomeMenus->patchEntity($homeMenu, $this->request->data);
            if ($this->HomeMenus->save($homeMenu)) {
                $this->Flash->success(__('The home menu has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The home menu could not be saved. Please, try again.'));
            }
        }
        $parentHomeMenus = $this->HomeMenus->find('list',['valueField' => 'name_'.$this->fieldLanguage])->where(['id !=' => $id,'parent_id is' => null]);
        $this->set(compact('homeMenu','parentHomeMenus'));
        $this->set('_serialize', ['homeMenu']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Home Menu id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if($this->allowAccess == false) return;
        $this->request->allowMethod(['post', 'delete']);
        $homeMenu = $this->HomeMenus->get($id);
        if ($this->HomeMenus->delete($homeMenu)) {
            $this->Flash->success(__('The home menu has been deleted.'));
        } else {
            $this->Flash->error(__('The home menu could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function getChild()
    {
        $this->layout = false;
        $this->autoRender = false;
        $type = $this->request->query('data');
        $list = array();
        switch ($type) {
            case HOME_MENU_TYPE_NEWS:
                $list = $this->NewsCategories->find('list',['status' => true, 'valueField' => 'name_'.$this->fieldLanguage]);
                break;
            case HOME_MENU_TYPE_MEMBER:
                $list = Configure::read('Member.country');
                break;
            case HOME_MENU_TYPE_PAGE:
                $list = $this->Pages->find('list',['valueField' => 'title']);
                break;
            case HOME_MENU_TYPE_INTRODUCE:
                break;
            case HOME_MENU_TYPE_INQUIRY:
                break;
            case HOME_MENU_TYPE_ACTIVITY:
                break;
        }
        $message = '---'.__('Select Child').'---';
        echo json_encode(array(
            'list' => $list,
            'message' => $message
        ));
    }
}