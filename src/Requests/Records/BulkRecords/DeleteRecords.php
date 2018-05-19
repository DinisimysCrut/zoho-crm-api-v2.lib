<?php
namespace ZohoCrmApiV2\Requests\Records\BulkRecords;

use ZohoCrmApiV2\Requests\Records\DeleteRequest;
use ZohoCrmApiV2\Response\Records\BulkRecords\DeleteRecords as DeleteRecordsResponse;

class DeleteRecords extends DeleteRequest
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
     * @return DeleteRecordsResponse
     */
    public function request() {
        $response = parent::request();
        return (DeleteRecordsResponse::getInstance()->parser($response));
    }

}
