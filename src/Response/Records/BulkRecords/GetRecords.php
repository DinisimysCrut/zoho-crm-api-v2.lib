<?php

namespace ZohoCrmApiV2\Response\Records\BulkRecords;

use ZohoCrmApiV2\Response\Response;


class GetRecords extends Response
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

    public function __construct() {}

    public function parser($response)
    {
        $response = parent::parser($response);
        $data = $response['data'];
        return $data;

    }
}