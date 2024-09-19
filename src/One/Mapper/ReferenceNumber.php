<?php

namespace Sankyu\One\Mapper;

class ReferenceNumber
{
    protected $data;

    public function setDocumentReferenceNo($reference_no){

        // $this->data['reference_id'] = "1500";
        // $this->data['helper_process_id'] = 140;
        // $this->data['callback_url'] = "https://preprod-stinvoice-helper.sankyutech.com.my/callback";

        $this->data['document_reference_no'] = $reference_no;
    }

    public function setBillingReferenceNo($billing_reference_no){

        $this->data['billing_reference']['reference_no'] = $billing_reference_no;

    }

    public function setUpInvoiceReference(){

        return $this->data;
    }

}