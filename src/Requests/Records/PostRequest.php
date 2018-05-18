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

    public function getModule()
    {
        return $this->module;
    }

    /**
     * @param $trigger
     * @return $this
     */
    public function setTrigger($trigger)
    {
        $this->putData('trigger',[$trigger]);
        return $this;
    }

    public function getTrigger()
    {
        $this->getData()['trigger'][0];
    }

}