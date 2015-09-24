<?php
namespace Admin\Controller;

use Admin\Controller\AppController;
use Cake\Core\Configure;
use JcApi;

/**
 * Activities Controller
 *
 * @property \Admin\Model\Table\ActivitiesTable $Activities
 */
class SettingsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function cities()
    {
        $cities = $this->jcApi->getList('cities');
        $this->set('cities', $cities);
        $this->set('_serialize', ['cities']);
        $this->titleLayout = __('City');
    }

    public function industries()
    {
        $industries = $this->jcApi->getList('industries');
        $this->set('industries', $industries);
        $this->set('_serialize', ['industries']);
    }

    public function prefectures()
    {
        $prefectures = $this->jcApi->getList('prefectures');
        $this->set('prefectures', $prefectures);
        $this->set('_serialize', ['prefectures']);
        $this->titleLayout = __('District');
    }

    public function businesses()
    {
        $businesses = $this->jcApi->getList('businesses');
        $this->set('businesses', $businesses);
        $this->set('_serialize', ['businesses']);
        $this->titleLayout = __('Business');
    }
}
