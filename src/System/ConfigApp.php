<?php


namespace ZohoCrmApiV2\System;

class ConfigAppRest
{
    private $crmToken = null;

    private $path = 'zoho-crm-api-v2.app';

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

    private function getConfig($key,$default = null)
    {
        return config("{$this->path}.$key",$default);
    }

    public function getCrmToken()
    {
        return $this->crmToken ?? $this->getConfig('crm_token');
    }

    public function setCrmToken($crmToken)
    {
         $this->crmToken = $crmToken;
    }
}