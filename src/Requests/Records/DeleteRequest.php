<?php


namespace ZohoCrmApiV2\Requests\Records;


class DeleteRequest extends Request
{

    protected $deleteIds = [];

    /**
     * @param $ids
     * @return $this
     */
    public function setIds($ids)
    {
        $this->deleteIds = $ids;
        return $this;
    }

    public function getIds()
    {
       return $this->deleteIds;
    }

    public function request()
    {
        $this->setMethod('DELETE');
        $this->setHttpQuery('ids',explode(',',$this->getIds()));
        return parent::request();
    }

}