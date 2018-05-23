<?php
namespace ZohoCrmApiV2\Requests\Records\BulkRecords;

use ZohoCrmApiV2\Requests\Records\DeleteRequest;
use ZohoCrmApiV2\Response\Records\BulkRecords\DeleteRecords as DeleteRecordsResponse;

class DeleteRecords extends DeleteRequest
{

    /**
     * @return DeleteRecordsResponse
     */
    public function request() {
        $response = parent::request();
        return (new DeleteRecordsResponse())->parser($response);
    }

}
