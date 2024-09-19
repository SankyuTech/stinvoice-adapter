<?php

namespace Sankyu\One\Mapper;

class Supplier
{
	public $data;

	public function setAddressLine1($address_line_1){

		$this->data['supplier']['address_line_1'] = $address_line_1;
	}

	public function setAddressLine2($address_line_2){

		$this->data['supplier']['address_line_2'] = $address_line_2;
	}

	public function setAddressLine3($address_line_3){

		$this->data['supplier']['address_line_3'] = $address_line_3;
	}

	public function setCity($city){

		$this->data['supplier']['city'] = $city;
	}

	public function setState($state){

		$this->data['supplier']['state'] = $state;
	}

	public function setPostcode($postcode){

		$this->data['supplier']['postcode'] = $postcode;
	}

	public function setCountryCode($country_code = 'MYS'){

		$this->data['supplier']['country_code'] = $country_code;
	}

	public function setRegistrationName($registration_name){

		$this->data['supplier']['registration_name'] = $registration_name;
	}

	public function setPhone($phone){

		$this->data['supplier']['phone'] = $phone;
	}

	public function setTaxIdentificationNo($tax_identification_no){

		$this->data['supplier']['tax_identification_no'] = $tax_identification_no;
	}

	public function setIdentificationNo($identification_no){
		
		$this->data['supplier']['identification_no'] = $identification_no;
	}

	public function setIdentificationType($identification_type){

		$this->data['supplier']['identification_type'] = $identification_type;
	}

	public function setSSTRegistrationNo($sst_registration_no = "NA"){

		$this->data['supplier']['sst_registration_no'] = $sst_registration_no;
	}

	public function setMISCCode($msic_codes){

		$this->data['supplier']['msic_codes'] = $msic_codes;
	}

	public function setUpSupplier(){

		return $this->data;
	}

}