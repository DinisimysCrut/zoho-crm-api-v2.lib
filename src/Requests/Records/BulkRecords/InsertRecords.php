<?php
namespace ZohoCrmApiV2\Requests\Records\BulkRecords;

use ZohoCrmApiV2\Requests\Records\PostRequest;
use ZohoCrmApiV2\Response\Records\BulkRecords\InsertRecords as InsertRecordsResponse;

class InsertRecords extends PostRequest
{

    /**
     * @return InsertRecordsResponse
     */
    public function request() {
        $response = parent::requestPost();
        return (new InsertRecordsResponse())->parser($response);
    }

}
