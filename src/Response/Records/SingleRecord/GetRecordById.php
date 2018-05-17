<?php
namespace ZohoCrmApiV2\Response\Records\SingleRecord;

use ZohoCrmApiV2\Response\Response;

class GetRecordById extends Response
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