<?php


namespace ZohoCrmApiV2\Requests\Records\Categories;


use ZohoCrmApiV2\Requests\Records\Request;

class SingleRecord extends Request
{
    protected $idRecord;

    public function setId($idRecord)
    {
        $this->setUrlApi($this->getUrlApi() . '/' . $idRecord);
        return $this;
    }
}