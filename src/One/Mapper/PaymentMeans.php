<?php

namespace Sankyu\One\Mapper;

class PaymentMeans
{
	public $data;

	public function setPaymentMeans($invoice_no){

		$this->data['payment_means']['payment_mode_code'] = $invoice_no;
	}

	public function setSupplierAccountBank($uuid){

		$this->data['payment_means']['supplier_account_bank'] = $uuid;

	}

	public function setUpPaymentMeans(){

		return $this->data;
	}
}