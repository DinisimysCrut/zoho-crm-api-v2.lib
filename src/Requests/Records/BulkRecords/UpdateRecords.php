<?php
namespace ZohoCrmApiV2\Requests\Records\BulkRecords;

use ZohoCrmApiV2\Requests\Records\PostRequest;
use ZohoCrmApiV2\Response\Records\BulkRecords\UpdateRecords as UpdateRecordsResponse;

class UpdateRecords extends PostRequest
{

    /**
     * @return UpdateRecordsResponse
     */
    public function request() {
        $response = parent::requestPut();
        return (new UpdateRecordsResponse())->parser($response);
    }

}
