<?php

namespace ZohoCrmApiV2\Response\Records\BulkRecords;

use ZohoCrmApiV2\Response\Response;


class DeleteRecords extends PostResponse
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
}