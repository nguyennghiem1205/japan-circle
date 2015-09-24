<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * Events Controller
 *
 * @property \Admin\Model\Table\EventsTable $Events
 */
class EventsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('events', $this->Events->find('all',['order' => ['modified' => 'desc']]));
        $this->set('_serialize', ['events']);
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => []
        ]);
        $this->set('event', $event);
        $this->set('_serialize', ['event']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $event = $this->Events->newEntity();
        if ($this->request->is('post')) {
            $event = $this->Core->patchEntity($event, $this->request->data, 'Admin.Events');
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The magazine has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The magazine could not be saved. Please, try again.'));
            }
        }
        $this->imageFields = $event->imageFields;
        $this->set(compact('event'));
        $this->set('_serialize', ['event']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $event = $this->Core->patchEntity($event, $this->request->data, 'Admin.Events');
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The magazine has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The magazine could not be saved. Please, try again.'));
            }
        }
        $this->imageFields = $event->imageFields;
        $this->set(compact('event'));
        $this->set('_serialize', ['event']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Event id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if($this->allowAccess == false) return;
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->get($id);
        if ($this->Events->delete($event)) {
            $this->Flash->success(__('The magazine has been deleted.'));
        } else {
            $this->Flash->error(__('The magazine could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
