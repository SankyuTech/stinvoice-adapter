<?php

namespace Sankyu\One\Mapper;

class Delivery
{
    public $data;

    public function setAddressLine1($address_line_1){

        $this->data['delivery']['address_line_1'] = $address_line_1;
    }

    public function setAddressLine2($address_line_2){

        $this->data['delivery']['address_line_2'] = $address_line_2;
    }

    public function setAddressLine3($address_line_3){

        $this->data['delivery']['address_line_3'] = $address_line_3;
    }

    public function setCity($city){

        $this->data['delivery']['city'] = $city;
    }

    public function setState($state){

        $this->data['delivery']['state'] = $state;
    }

    public function setPostcode($postcode){

        $this->data['delivery']['postcode'] = $postcode;
    }

    public function setCountryCode($country_code = 'MYS'){

        $this->data['delivery']['country_code'] = $country_code;
    }

    public function setRegistrationName($registration_name){

        $this->data['delivery']['registration_name'] = $registration_name;
    }

    public function setTaxIdentificationNo($tax_identification_no){

        $this->data['delivery']['tax_identification_no'] = $tax_identification_no;
    }

    public function setIdentificationNo($identification_no){
        
        $this->data['delivery']['identification_no'] = $identification_no;
    }

    public function setIdentificationType($identification_type){

        $this->data['delivery']['identification_type'] = $identification_type;
    }

    public function setDeliveryCharges($amount = 0,$reason = "Service Charge",$rate = 0){

         $this->data['delivery']['charges']['amount'] = $amount;
         $this->data['delivery']['charges']['reason'] = $reason;
         $this->data['delivery']['charges']['percentage'] = $rate;

    }

    public function setShipmentID($shipment_id){

        $this->data['delivery']['shipment_id'] = $shipment_id;
    }

    public function setUpDelivery(){

        return $this->data;
    }

}