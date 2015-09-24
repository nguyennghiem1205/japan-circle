<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * Cooperations Controller
 *
 * @property \Admin\Model\Table\CooperationsTable $Cooperations
 */
class CooperationsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('cooperations', $this->Cooperations->find('all'));
        $this->set('_serialize', ['cooperations']);
    }

    /**
     * View method
     *
     * @param string|null $id Cooperation id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cooperation = $this->Cooperations->get($id, [
            'contain' => ['Members'],
            'order' => ['Cooperations.modified' => 'desc']
        ]);
        $this->set('cooperation', $cooperation);
        $this->set('_serialize', ['cooperation']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cooperation = $this->Cooperations->newEntity();
        if ($this->request->is('post')) {
            $cooperation = $this->Cooperations->patchEntity($cooperation, $this->request->data);
            if ($this->Cooperations->save($cooperation)) {
                $this->Flash->success(__('The cooperation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cooperation could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cooperation'));
        $this->set('_serialize', ['cooperation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cooperation id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cooperation = $this->Cooperations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cooperation = $this->Cooperations->patchEntity($cooperation, $this->request->data);
            if ($this->Cooperations->save($cooperation)) {
                $this->Flash->success(__('The cooperation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cooperation could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cooperation'));
        $this->set('_serialize', ['cooperation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cooperation id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if($this->allowAccess == false) return;
        $this->request->allowMethod(['post', 'delete']);
        $cooperation = $this->Cooperations->get($id);
        if ($this->Cooperations->delete($cooperation)) {
            $this->Flash->success(__('The cooperation has been deleted.'));
        } else {
            $this->Flash->error(__('The cooperation could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
