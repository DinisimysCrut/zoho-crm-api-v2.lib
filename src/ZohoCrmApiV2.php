<?php
namespace ZohoCrmApiV2;

use ZohoCrmApiV2\Requests\Records\BulkRecords\GetRecords;
use ZohoCrmApiV2\Requests\Records\BulkRecords\SearchRecords;
use ZohoCrmApiV2\Requests\Records\SingleRecord\GetRecordById;
use ZohoCrmApiV2\System\ConfigApp;

class ZohoCrmApiV2 {


    protected $module;

    private static $instance = null;


    public static function getInstance()
    {
        if (null === self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone() {}

    private function __construct() {}

    /**
     * @param $module
     * @return $this
     */
    public function setModule($module)
    {
        $this->module = $module;
        return $this;
    }

    /**
     * @param $token
     * @return $this
     */
    public function setToken($token)
    {
        ConfigApp::getInstance()->setCrmToken($token);
        return $this;
    }

    public function getModule()
    {
        return $this->module;
    }

    public function getToken()
    {
        return ConfigApp::getInstance()->getCrmToken();
    }

    /**
     * @return GetRecords
     */
    public function getRecords()
    {
        return GetRecords::getInstance()
                ->setModule($this->getModule())
                ->setToken($this->getToken());
    }

    /**
     * @param $idRecord
     * @return GetRecordById
     */
    public function getRecordById($idRecord)
    {
        return GetRecordById::getInstance()
            ->setModule($this->getModule())
            ->setToken($this->getToken())
            ->setId($idRecord);
    }

    /**
     * @return SearchRecords
     */
    public function searchRecords()
    {
        return SearchRecords::getInstance()
            ->setModule($this->getModule())
            ->setToken($this->getToken());
    }

}