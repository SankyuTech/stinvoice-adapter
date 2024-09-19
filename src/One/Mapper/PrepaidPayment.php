<?php

namespace Sankyu\One\Mapper;

class PrepaidPayment
{
	public $data;

	public function setPrepaidPaymentID($id){

		$this->data['prepaid_payment']['id'] = $id;
	}

	public function setPrepaidPaymentAmount($amount){

		$this->data['prepaid_payment']['amount'] = $amount;

	}

	public function setPrepaidPaymentPaidTimestamp($paid_timestamp){

		$this->data['prepaid_payment']['paid_timestamp'] = $paid_timestamp;

	}

	public function setUpPrepaidPayment(){

		return $this->data;
	}
}