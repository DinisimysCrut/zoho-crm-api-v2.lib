<?php


namespace ZohoCrmApiV2\Requests\Records;


class PostRequest extends \ZohoCrmApiV2\Requests\PostRequest
{


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
        return $this->getData()['trigger'][0];
    }

}