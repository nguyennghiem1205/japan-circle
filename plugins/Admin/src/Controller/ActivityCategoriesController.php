<?php
namespace Admin\Controller;

use Admin\Controller\AppController;
use Cake\Event\Event;

/**
 * ActivityCategories Controller
 *
 * @property \Admin\Model\Table\ActivityCategoriesTable $ActivityCategories
 */
class ActivityCategoriesController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event); // TODO: Change the autogenerated stub
        $this->titleLayout = __('Activity Category');
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('activityCategories', $this->ActivityCategories->find('all',['order' => ['modified' => 'desc']]));
    }

    /**
     * View method
     *
     * @param string|null $id Activity Category id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activityCategory = $this->ActivityCategories->get($id, [
            'contain' => ['Activities']
        ]);
        $this->set('activityCategory', $activityCategory);
        $this->set('_serialize', ['activityCategory']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activityCategory = $this->ActivityCategories->newEntity();
        if ($this->request->is('post')) {
            $activityCategory = $this->ActivityCategories->patchEntity($activityCategory, $this->request->data);
            if ($this->ActivityCategories->save($activityCategory)) {
                $this->Flash->success(__('The activity category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The activity category could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('activityCategory'));
        $this->set('_serialize', ['activityCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Activity Category id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activityCategory = $this->ActivityCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activityCategory = $this->ActivityCategories->patchEntity($activityCategory, $this->request->data);
            if ($this->ActivityCategories->save($activityCategory)) {
                $this->Flash->success(__('The activity category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The activity category could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('activityCategory'));
        $this->set('_serialize', ['activityCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Activity Category id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if($this->allowAccess == false) return;
        $this->request->allowMethod(['post', 'delete']);
        $activityCategory = $this->ActivityCategories->get($id);
        if ($this->ActivityCategories->delete($activityCategory)) {
            $this->Flash->success(__('The activity category has been deleted.'));
        } else {
            $this->Flash->error(__('The activity category could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
