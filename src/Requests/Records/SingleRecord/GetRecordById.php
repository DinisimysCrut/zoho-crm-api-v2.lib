<?php
namespace ZohoCrmApiV2\Requests\Records\SingleRecord;

use ZohoCrmApiV2\Requests\Records\Categories\SingleRecord;
use ZohoCrmApiV2\Response\Records\SingleRecord\GetRecordById as GetRecordByIdResponse;

class GetRecordById extends SingleRecord
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
        return (GetRecordByIdResponse::getInstance()->parser($response));
    }

}
