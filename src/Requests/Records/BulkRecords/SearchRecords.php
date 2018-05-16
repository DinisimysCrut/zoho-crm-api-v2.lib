<?php
namespace ZohoCrmApiV2\Requests\Records\BulkRecords;

use ZohoCrmApiV2\Requests\Records\Categories\BulkRecords;
use ZohoCrmApiV2\Response\Records\BulkRecords\SearchRecords as SearchRecordsResponse;

class SearchRecords extends BulkRecords
{


    private $criteria = '';

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

    public function request()
    {
        $this->setMethod('GET');
        $this->setUrlApi($this->getUrlApi() . '/search');
        $this->setHttpQuery('criteria',$this->criteria);
        $response = parent::request();
        return (SearchRecordsResponse::getInstance()->parser($response));
    }



    public function wherePhone($phone)
    {
        $this->setHttpQuery('phone',$phone);
        return $this;
    }

    public function whereEmail($email)
    {
        $this->setHttpQuery('email',$email);
        return $this;
    }

    public function whereWord($word)
    {
        $this->setHttpQuery('word',$word);
        return $this;
    }


    public function where($field,$value)
    {
        if($this->criteria != '') {
            $this->criteria = ' and ';
        }
        $this->criteria .= "($field:equals:$value)";
        return $this;

    }
    public function whereStartsWith($field,$value)
    {
        if($this->criteria != '') {
            $this->criteria = ' and ';
        }
        $this->criteria .= "($field:starts_with:$value)";
        return $this;

    }


}
