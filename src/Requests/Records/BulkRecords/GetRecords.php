<?php
namespace ZohoCrmApiV2\Requests\Records\BulkRecords;

use ZohoCrmApiV2\Requests\Records\Categories\BulkRecords;
use ZohoCrmApiV2\Response\Records\BulkRecords\GetRecords as GetRecordsResponse;

class GetRecords extends BulkRecords
{

    public function request() {
        $this->setMethod('GET');
        $response = parent::request();
        return (new GetRecordsResponse())->parser($response);
    }

}
