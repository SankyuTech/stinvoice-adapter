<?php

namespace Sankyu\One\Mapper;

class InvoicePeriod
{
	public $data;

	public function setStartDate($start_date){

		$this->data['invoice_period']['start_date'] = $start_date;
	}

	public function setEndDate($end_date){

		$this->data['invoice_period']['end_date'] = $end_date;

	}

	public function setBillingFrequency($billing_frequency){

		$this->data['invoice_period']['billing_frequency'] = $billing_frequency;

	}

	public function setUpInvoicePeriod(){

		return $this->data;
	}
}