<?php

namespace Sankyu\One\Mapper;

class Customer
{
    protected $data;

    public function setAddressLine1($address_line_1){

        $this->data['customer']['address_line_1'] = $address_line_1;
    }

    public function setAddressLine2($address_line_2){

        $this->data['customer']['address_line_2'] = $address_line_2;
    }

    public function setAddressLine3($address_line_3){

        $this->data['customer']['address_line_3'] = $address_line_3;
    }

    public function setCity($city){

        $this->data['customer']['city'] = $city;
    }

    public function setState($state){

        $this->data['customer']['state'] = $state;
    }

    public function setPostcode($postcode){

        $this->data['customer']['postcode'] = $postcode;
    }

    public function setCountryCode($country_code = 'MYS'){

        $this->data['customer']['country_code'] = $country_code;
    }

    public function setRegistrationName($registration_name){

        $this->data['customer']['registration_name'] = $registration_name;
    }

    public function setPhone($phone){

        $this->data['customer']['phone'] = $phone;
    }

    public function setEmail($email){

        $this->data['customer']['email'] = $email;
    }

    public function setTaxIdentificationNo($tax_identification_no){

        $this->data['customer']['tax_identification_no'] = $tax_identification_no;
    }

    public function setIdentificationNo($identification_no){
        
        $this->data['customer']['identification_no'] = $identification_no;
    }

    public function setIdentificationType($identification_type){

        $this->data['customer']['identification_type'] = $identification_type;
    }

    public function setSSTRegistrationNo($sst_registration_no = "NA"){

        $this->data['customer']['sst_registration_no'] = $sst_registration_no;
    }

    public function setUpCustomer(){

        return $this->data;
    }

}