<?php

namespace ZohoCrmApiV2\Requests\Records;

use ZohoCrmApiV2\Requests\Category;
use ZohoCrmApiV2\Requests\Records\BulkRecords\DeleteRecords;
use ZohoCrmApiV2\Requests\Records\BulkRecords\GetRecords;
use ZohoCrmApiV2\Requests\Records\BulkRecords\GetRelatedRecords;
use ZohoCrmApiV2\Requests\Records\BulkRecords\InsertRecords;
use ZohoCrmApiV2\Requests\Records\BulkRecords\SearchRecords;
use ZohoCrmApiV2\Requests\Records\BulkRecords\UpdateRecords;
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
        return (new SearchRecords())
            ->setModule($this->getModule())
            ->setToken($this->getToken());
    }

    /**
     * @return GetRecords
     */
    public function getRecords()
    {
        return (new GetRecords())
            ->setModule($this->getModule())
            ->setToken($this->getToken());
    }

    /**
     * @param $idRecord
     * @return mixed
     */
    public function getRecordById($idRecord)
    {
        return (new GetRecordById())
            ->setModule($this->getModule())
            ->setToken($this->getToken())
            ->setId($idRecord);
    }

    /**
     * @param $dataRecords
     * @return InsertRecords
     */
    public function insertRecords($dataRecords)
    {
        return (new InsertRecords())
            ->setModule($this->getModule())
            ->setToken($this->getToken())
            ->setData($dataRecords);
    }

    /**
     * @param $dataRecords
     * @return UpdateRecords
     */
    public function updateRecords($dataRecords)
    {
        return (new UpdateRecords())
            ->setModule($this->getModule())
            ->setToken($this->getToken())
            ->setData($dataRecords);
    }

    /**
     * @param $arrayIds
     * @return DeleteRecords
     */
    public function deleteRecords($arrayIds)
    {
        return (new DeleteRecords())
            ->setModule($this->getModule())
            ->setToken($this->getToken())
            ->setIds($arrayIds);
    }

    /**
     * @param $recordId
     * @param $ralatedList
     * @return GetRelatedRecords
     */
    public function getRelatedRecords($recordId,$ralatedList)
    {
        return (new GetRelatedRecords())
            ->setModule($this->getModule())
            ->setToken($this->getToken())
            ->setRecordId($recordId)
            ->setRelatedList($ralatedList);
    }

}
