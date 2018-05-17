<?php

namespace ZohoCrmApiV2\Requests\Records;

use ZohoCrmApiV2\Requests\Category;
use ZohoCrmApiV2\Requests\Records\BulkRecords\GetRecords;
use ZohoCrmApiV2\Requests\Records\BulkRecords\SearchRecords;
use ZohoCrmApiV2\Requests\Records\SingleRecord\GetRecordById;

class Records extends Category
{

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
     * @return SearchRecords
     */
    public function searchRecords()
    {
        return SearchRecords::getInstance()
            ->setModule($this->getModule())
            ->setToken($this->getToken());
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
     * @return mixed
     */
    public function getRecordById($idRecord)
    {
        return GetRecordById::getInstance()
            ->setModule($this->getModule())
            ->setToken($this->getToken())
            ->setId($idRecord);
    }

    public function InsertRecords($dataRecords)
    {
        return GetRecordById::getInstance()
            ->setModule($this->getModule())
            ->setToken($this->getToken())
            ->setData($dataRecords);
    }


}
