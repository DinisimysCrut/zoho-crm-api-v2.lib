<?php
namespace ZohoCrmApiV2\Requests\Records\BulkRecords;

use ZohoCrmApiV2\Requests\Records\PostRequest;
use ZohoCrmApiV2\Response\Records\BulkRecords\InsertRecords as InsertRecordsResponse;

class InsertRecords extends PostRequest
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
     * @return InsertRecordsResponse
     */
    public function request() {
        $response = parent::requestPost();
        return (InsertRecordsResponse::getInstance()->parser($response));
    }

}
