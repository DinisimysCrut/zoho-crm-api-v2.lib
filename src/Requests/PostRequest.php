<?php


namespace ZohoCrmApiV2\Requests;

class PostRequest extends Request
{
    protected $data = null;

    protected $nameData = 'data';

    /**
     * @param $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = [
            $this->nameData => $data
        ];
        return $this;
    }

    /**
     * @return null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function putData($key,$value)
    {
        if($this->data === null)
        {
            $this->setData([]);
        }
        $this->data[$this->nameData][$key] = $value;
        return $this;
    }

    public function requestPost()
    {
        $this->setMethod('POST');
        $this->setHttpJson($this->getData());

        return parent::request();
    }

    public function requestPut()
    {
        $this->setMethod('PUT');
        $this->setHttpJson($this->getData());
        return parent::request();
    }


}