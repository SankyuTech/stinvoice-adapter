<?php

namespace Sankyu\One\Mapper;

class AdditionalDocumentReference
{
    protected $data;

    public function setCustomsImportFormReferenceNo($reference_no){

        $this->item['additional_document_reference']['customs_import_form'][] =
        [
            'id' => $reference_no
        ];
    }

    public function setFreeTradeAgreement($id,$description){

        $this->data['additional_document_reference']['free_trade_agreement']['id'] = $id;
        $this->data['additional_document_reference']['free_trade_agreement']['description'] = $description;

    }

    public function setCustomsImportFormNo2ReferenceNo($reference_no){

        $this->data['additional_document_reference']['customs_import_form_2']['id'] = $id;
    }

    public function setIncoterms($id = 'CIF'){

        $this->data['additional_document_reference']['incoterms']['id'] = $id;
    }

    public function setUpAdditionalDocumentReference(){

        return $this->data;
    }
}
