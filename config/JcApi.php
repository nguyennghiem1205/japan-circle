<?php


/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/07/2015
 * Time: 11:41
 */
class JcApi
{

    public $url = 'https://japan-circle.com/eicohv2/api/';

    public $language = 'eng';

    public $key = null;

    /**
     * __construct
     * @param null $language: eng|vie|jpn
     */
    function __construct($key = null, $language = 'eng')
    {
        if ($language) {
            $this->language = $language;
        }
        $this->key = $key;
        if (!$this->key) {
            die('Key is empty!');
        }
        // TODO: Implement __construct() method.
    }

    /**
     * set language for api
     * @param $language
     */
    public function setLanguage($language) {
        if ($language) {
            $this->language = $language;
        }
    }


    /**
     * get list by object
     * @param $object
     * @return mixed
     */
    public function getList($object) {
        $params = array(
            'object' => $object
        );
        $url = $this->buildUrl('getList', $params);

        return $this->getContent($url);
    }

    /**
     * get list data
     * @param $object
     * @param int $page
     * @param int $limit
     * @param array $strId
     * @return mixed
     */
    public function getListData($object, $page = 1, $limit = 20, $strId = array(), $country = null) {
        $params = array(
            'object' => $object,
            'page' => $page,
            'limit' => $limit,
            'country' => $country
        );
        $url = $this->buildUrl('getListData', $params);
        if ($object != 'members') {
            return $this->getContent($url);
        }
        $result = $this->postData($strId, $url);

        $result = json_decode($result, true);
        if ($result == null) {
            return 'Check api key, please!';
        }
        return $result['data'];
    }

    /**
     * get list data by code
     * @param $object
     * @param $code
     * @return mixed
     */
    public function getListByCode($object, $code) {

        $params = array(
            'object' => $object,
            'code' => $code
        );
        $url = $this->buildUrl('listBy', $params);

        return $this->getContent($url);
    }

    /**
     * get detail by code
     * @param $object
     * @param $code
     * @return mixed
     */
    public function getDetailByCode($object, $code) {

        $url = $this->buildUrl('detail', array(
            'object' => $object,
            'code' => $code
        ));
        return $this->getContent($url);
    }

    /**
     * get detail member by id
     * @param $id
     * @return mixed
     */
    public function getMember($id) {

        $url = $this->buildUrl('memberDetail', array(
            'id' => $id
        ));
        return $this->getContent($url);
    }

    /**
     * delete member
     * @param $id
     * @return mixed
     */
    public function deleteMember($id)
    {
        $url = $this->buildUrl('memberDelete', array(
            'id' => $id
        ));
        return $this->getContent($url);

    }

    /**
     * update status approve
     * @param $id
     * @return mixed
     */
    public function updateStatus($id, $status)
    {
        $url = $this->buildUrl('memberChangeStatus', array(
            'id' => $id,
            'status' => $status
        ));
        return $this->getContent($url);

    }

    /**
     * get members by industry code
     * @param $industry
     * @param $page
     * @param int $limit
     * @return mixed
     */
    public function getMembersByIndustry($industry, $page, $limit = 20, $country = null) {
        $url = $this->buildUrl('membersByIndustry', array(
            'code' => $industry,
            'page' => $page,
            'limit' => $limit,
            'country' => $country
        ));
        return $this->getContent($url);
    }

    /**
     * insert member
     * @param $data
     * @return mixed
     */
    public function insertMember($data) {
        $url = $this->buildUrl('insertMember');

        $result = $this->postData($data, $url);
        $result = json_decode($result, true);
        if ($result == null) {
            return 'Check api key, please!';
        }
        return $result['data'];
    }

    /**
     * check data user login by email
     * @param $email
     * @return mixed
     */
    public function checkLogin($email) {
        $url = $this->buildUrl('checkLogin', array(
            'email' => $email
        ));
        return $this->getContent($url);
    }

    /**
     * post data to url
     * @param $data
     * @param $url
     * @return mixed
     */
    public function postData($data, $url) {

        $jsonData = json_encode($data);
        $ch = curl_init($url);

        curl_setopt_array($ch, array(
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $jsonData,
            CURLOPT_HEADER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array('Content-Type:application/json', 'Content-Length: ' . strlen($jsonData)))
        );

        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    /**
     * get content url api
     * @param $url
     * @return mixed
     */
    public function getContent($url) {
        $data = @file_get_contents($url);
        $data = json_decode($data, true);
        if ($data == null) {
            return 'Check api key, please!';
        }
        if (!$data['status']) {
            return $data['data'];
        } else {
            return $data['message'];
        }
    }

    /**
     * build url get data
     * @param $type
     * @param array $params
     * @return string
     */
    public function buildUrl($type, $params = array()){
        $url = $this->url;
        switch ($type) {
            case 'getList':
                $url .= $params['object'];
                break;
            case 'listBy':
                $url .= $params['object'].'/listBy/'.$params['code'];
                break;
            case 'detail':
                $url .= $params['object'].'/code/'.$params['code'];
                break;
            case 'getListData':
                $url .= $params['object'].'/listData';
                if ($params['object'] == 'members') {
                    $url .= '/'.$params['page'].'/'.$params['limit'];
                }
                if ($params['object'] == 'industries' || $params['object'] == 'members') {
                    if ($params['country']) {
                        $url .= '/'.$params['country'];
                    }
                }
                break;
            case 'memberDetail':
                $url .= 'members/detail/'.$params['id'];
                break;
            case 'insertMember':
                $url .= 'members/insert';
                break;
            case 'checkLogin':
                $url .= 'members/checkLogin/'.urlencode($params['email']);
                break;
            case 'memberDelete':
                $url .= 'members/delete/'.$params['id'];
                break;
            case 'membersByIndustry':
                $url .= 'members/getMembersByIndustry/'.$params['code'].'/'.$params['page'].'/'.$params['limit'];
                if ($params['country']) {
                    $url .= '/'.$params['country'];
                }
                break;
            case 'memberChangeStatus':
                $url .= 'members/updateApprove/'.$params['id'].'/'.$params['status'];
                break;
        }
        $url .= '?language='.$this->language.'&key='.$this->key;
        return $url;
    }
}