<?php
namespace ZohoCrmApiV2\Requests\Records\BulkRecords;

use ZohoCrmApiV2\Requests\Records\Categories\BulkRecords;
use ZohoCrmApiV2\Response\Records\RelatedLists\GetRelatedRecords as GetRelatedRecordsResponse;

class GetRelatedRecords extends BulkRecords
{

    protected $relatedList = null;

    protected $recordId = null;

    /**
     * @param $recordId
     * @return $this
     */
    public function setRecordId($recordId)
    {
        $this->recordId = $recordId;
        return $this;
    }

    /**
     * @param $relatedList
     * @return $this
     */
    public function setRelatedList($relatedList)
    {
        $this->relatedList = $relatedList;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getRecordId()
    {
        return $this->recordId;
    }

    /**
     * @return null|string
     */
    public function getRelatedList()
    {
        return $this->relatedList;
    }

    public function request() {
        $this->setMethod('GET');
        $this->setUrlApi($this->getUrlApi() . '/' . $this->getRecordId() . '/' . $this->getRelatedList());
        $response = parent::request();
        return (new GetRelatedRecordsResponse())->parser($response);
    }

}
