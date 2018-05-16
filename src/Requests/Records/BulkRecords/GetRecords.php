<?php
namespace ZohoCrmApiV2\Requests\Records\BulkRecords;

use ZohoCrmApiV2\Requests\Records\Categories\BulkRecords;
use ZohoCrmApiV2\Response\Records\BulkRecords\GetRecords as GetRecordsResponse;

class GetRecords extends BulkRecords
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

    public function request() {
        $this->setMethod('GET');
        $response = parent::request();
        return (GetRecordsResponse::getInstance()->parser($response));
    }

}
