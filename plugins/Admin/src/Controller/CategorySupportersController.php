<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * CategorySupporters Controller
 *
 * @property \Admin\Model\Table\CategorySupportersTable $CategorySupporters
 */
class CategorySupportersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('categorySupporters', $this->paginate($this->CategorySupporters));
        $this->set('_serialize', ['categorySupporters']);
    }

    /**
     * View method
     *
     * @param string|null $id Category Supporter id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categorySupporter = $this->CategorySupporters->get($id, [
            'contain' => ['Supporters']
        ]);
        $this->set('categorySupporter', $categorySupporter);
        $this->set('_serialize', ['categorySupporter']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categorySupporter = $this->CategorySupporters->newEntity();
        if ($this->request->is('post')) {
            $categorySupporter = $this->CategorySupporters->patchEntity($categorySupporter, $this->request->data);
            if ($this->CategorySupporters->save($categorySupporter)) {
                $this->Flash->success(__('The category supporter has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The category supporter could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('categorySupporter'));
        $this->set('_serialize', ['categorySupporter']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Category Supporter id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categorySupporter = $this->CategorySupporters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categorySupporter = $this->CategorySupporters->patchEntity($categorySupporter, $this->request->data);
            if ($this->CategorySupporters->save($categorySupporter)) {
                $this->Flash->success(__('The category supporter has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The category supporter could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('categorySupporter'));
        $this->set('_serialize', ['categorySupporter']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Category Supporter id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categorySupporter = $this->CategorySupporters->get($id);
        if ($this->CategorySupporters->delete($categorySupporter)) {
            $this->Flash->success(__('The category supporter has been deleted.'));
        } else {
            $this->Flash->error(__('The category supporter could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
