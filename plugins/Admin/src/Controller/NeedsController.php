<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * Needs Controller
 *
 * @property \Admin\Model\Table\NeedsTable $Needs
 */
class NeedsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('needs', $this->Needs->find('all',['order' => ['modified' => 'desc']]));
        $this->set('_serialize', ['needs']);
    }

    /**
     * View method
     *
     * @param string|null $id Need id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $need = $this->Needs->get($id, [
            'contain' => ['Members']
        ]);
        $this->set('need', $need);
        $this->set('_serialize', ['need']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $need = $this->Needs->newEntity();
        if ($this->request->is('post')) {
            $need = $this->Needs->patchEntity($need, $this->request->data);
            if ($this->Needs->save($need)) {
                $this->Flash->success(__('The need has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The need could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('need'));
        $this->set('_serialize', ['need']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Need id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $need = $this->Needs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $need = $this->Needs->patchEntity($need, $this->request->data);
            if ($this->Needs->save($need)) {
                $this->Flash->success(__('The need has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The need could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('need'));
        $this->set('_serialize', ['need']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Need id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if($this->allowAccess == false) return;
        $this->request->allowMethod(['post', 'delete']);
        $need = $this->Needs->get($id);
        if ($this->Needs->delete($need)) {
            $this->Flash->success(__('The need has been deleted.'));
        } else {
            $this->Flash->error(__('The need could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
