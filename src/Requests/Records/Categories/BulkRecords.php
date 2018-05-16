<?php


namespace ZohoCrmApiV2\Requests\Records\Categories;


use ZohoCrmApiV2\Requests\Records\Request;

class BulkRecords extends Request
{
    public function setFields($listFields)
    {
        $this->setHttpQuery('fields',$listFields);
        return $this;
    }

    public function modifiedAfter(string $dataTime)
    {
        $this->setHttpHeaders('If-Modified-Since',$dataTime);
        return $this;
    }
}