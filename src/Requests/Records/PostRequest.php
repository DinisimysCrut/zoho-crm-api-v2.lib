<?php


namespace ZohoCrmApiV2\Requests\Records;


class PostRequest extends \ZohoCrmApiV2\Requests\PostRequest
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