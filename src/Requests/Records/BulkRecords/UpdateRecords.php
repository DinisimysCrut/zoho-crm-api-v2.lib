<?php
namespace ZohoCrmApiV2\Requests\Records\BulkRecords;

use ZohoCrmApiV2\Requests\Records\PostRequest;
use ZohoCrmApiV2\Response\Records\BulkRecords\UpdateRecords as UpdateRecordsResponse;

class UpdateRecords extends PostRequest
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
     * @return UpdateRecordsResponse
     */
    public function request() {
        $response = parent::requestPut();
        return (UpdateRecordsResponse::getInstance()->parser($response));
    }

}
