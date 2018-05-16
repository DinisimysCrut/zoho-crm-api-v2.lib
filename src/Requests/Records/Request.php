<?php


namespace ZohoCrmApiV2\Requests\Records;


class Request extends \ZohoCrmApiV2\Requests\Request
{

    protected $module;

    public function setModule($module)
    {
        $this->setUrlApi($this->getStaticUrl() . $module);
        $this->module = $module;
        return $this;
    }

    protected function getModule()
    {
        return $this->module;
    }
}