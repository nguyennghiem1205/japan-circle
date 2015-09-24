<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * Supporters Controller
 *
 * @property \Admin\Model\Table\SupportersTable $Supporters
 * @property mixed Time
 */
class SupportersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CategorySupporters']
        ];
        $this->set('supporters', $this->paginate($this->Supporters));
        $this->set('_serialize', ['supporters']);
    }

    /**
     * View method
     *
     * @param string|null $id Supporter id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {

        $supporter = $this->Supporters->get($id, [
            'contain' => ['CategorySupporters', 'SupporterCities']
        ]);
        $supporter->com_lang_chosen = explode(',',$supporter->com_lang_chosen);

        $cities = $this->JcApiModel->getList('cities');
        $industries = $this->JcApiModel->getList('industries');
        $supporter->industry_code = $industries[$supporter->industry_code];
        $listCities = array();
        foreach($supporter->supporter_cities as $city) {
            $listCities[] = $cities[$city->city_code];
        }
        $supporter->city = implode(',',$listCities);
        $this->set('supporter', $supporter);
        $this->set('_serialize', ['supporter']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('CategorySupporters');
        $this->loadModel('SupporterCities');
        $supporter = $this->Supporters->newEntity();
        if ($this->request->is('post')) {
            if($this->request->data['com_lang_chosen']) {
                $this->request->data['com_lang_chosen'] = implode(',',$this->request->data['com_lang_chosen']);
            }
            $supporter = $this->Core->patchEntity($supporter, $this->request->data,'Supporters');
            if ($this->Supporters->save($supporter)) {
                if($this->request->data['city_code']){
                    foreach($this->request->data['city_code'] as $item) {
                        $city_supporter = $this->SupporterCities->newEntity();
                        $city_supporter = $this->SupporterCities->patchEntity($city_supporter,array(
                            'city_code' => $item,
                            'supporter_id' => $supporter->id
                        ));
                        $this->SupporterCities->save($city_supporter);
                    }
                }
                $this->Flash->success(__('The supporter has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The supporter could not be saved. Please, try again.'));
            }
        }
        $cities = $this->JcApiModel->getListData('cities');
        $countries = $this->JcApiModel->getList('countries');
        $list_cities = array();
        foreach($countries as $code => $country) {
            $list_cities[$country] = array();
            foreach ($cities as $city) {
                if($code == $city['City']['country_code']) {
                    $list_cities[$country][$city['City']['code']] = $city['City']['name_'.$this->fieldLanguage];
                }
            }
        }
        $industryApi = $this->JcApiModel->getListData('industries');
        $industries = array();
        foreach($industryApi as $industry) {
            if($industry['Industry']['parent_id']) {
                $industries[$industry['Industry']['code']] = $industry['Industry']['name_'.$this->fieldLanguage];
            }
        }

        $supporterCategories = $this->CategorySupporters->find('list',['valueField' => 'name_'.$this->fieldLanguage]);
        $this->imageFields = $supporter->imageFields;
        $this->set(compact('supporter', 'supporterCategories', 'industries', 'list_cities'));
        $this->set('_serialize', ['supporter']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Supporter id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->loadModel('CategorySupporters');
        $this->loadModel('SupporterCities');
        $supporter = $this->Supporters->get($id, [
            'contain' => ['SupporterCities','CategorySupporters']
        ]);
        $supporter->com_lang_chosen = explode(',', $supporter->com_lang_chosen);
        if ($supporter->birthdate) {
            $supporter->birthdate = $supporter->birthdate->i18nFormat('YYYY-MM-dd');
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            if($this->request->data['com_lang_chosen']) {
                $this->request->data['com_lang_chosen'] = implode(',',$this->request->data['com_lang_chosen']);
            }
            $supporter = $this->Core->patchEntity($supporter, $this->request->data,'Supporters');
            if ($this->Supporters->save($supporter)) {
                if($this->request->data['city_code']){
                    $this->SupporterCities->deleteAll(array('supporter_id' => $supporter->id));
                    foreach($this->request->data['city_code'] as $item) {
                        $city_supporter = $this->SupporterCities->newEntity();
                        $city_supporter = $this->SupporterCities->patchEntity($city_supporter,array(
                            'city_code' => $item,
                            'supporter_id' => $supporter->id
                        ));
                        $this->SupporterCities->save($city_supporter);
                    }
                }
                $this->Flash->success(__('The supporter has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The supporter could not be saved. Please, try again.'));
            }
        }
        $cities = $this->JcApiModel->getListData('cities');
        $countries = $this->JcApiModel->getList('countries');
        $list_cities = array();
        foreach($countries as $code => $country) {
            $list_cities[$country] = array();
            foreach ($cities as $city) {
                if($code == $city['City']['country_code']) {
                    $list_cities[$country][$city['City']['code']] = $city['City']['name_'.$this->fieldLanguage];
                }
            }
        }
        $valueCities = array();
        if($supporter->supporter_cities) {
            foreach($supporter->supporter_cities as $city) {
                $valueCities[] = $city->city_code;
            }
        }

        $industryApi = $this->JcApiModel->getListData('industries');
        $industries = array();
        foreach($industryApi as $industry) {
            if($industry['Industry']['parent_id']) {
                $industries[$industry['Industry']['code']] = $industry['Industry']['name_'.$this->fieldLanguage];
            }
        }

        $supporterCategories = $this->CategorySupporters->find('list',['valueField' => 'name_'.$this->fieldLanguage]);

        $this->imageFields = $supporter->imageFields;
        $this->set(compact('supporter', 'supporterCategories', 'industries', 'list_cities', 'valueCities'));
        $this->set('_serialize', ['supporter']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Supporter id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $supporter = $this->Supporters->get($id);
        if ($this->Supporters->delete($supporter)) {
            $this->Flash->success(__('The supporter has been deleted.'));
        } else {
            $this->Flash->error(__('The supporter could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
