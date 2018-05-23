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

    public function sortBy(string $fieldName)
    {
        $this->setHttpQuery('sort_by', $fieldName);
        return $this;
        
    }

    public function sortOrder($order = 'asc')
    {
        $this->setHttpQuery('sort_order', $order);
        return $this;
        
    }

    public function page($page)
    {
        $this->setHttpQuery('page', $page);
        return $this;
    }

    public function perPage($perPage)
    {
        $this->setHttpQuery('per_page', $perPage);
        return $this;
    }
}