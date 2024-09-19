<?php

namespace Sankyu\One\Mapper;

class LegalMonitoryTotal
{
	public $data;

	public function setTotalNetAmount($total_net_amount){

		$this->data['legal_monetory_total']['total_net_amount'] = $total_net_amount;
	}

	public function setTotalExcludeTax($total_exclude_tax){

		$this->data['legal_monetory_total']['total_exclude_tax'] = $total_exclude_tax;

	}

	public function setTotalIncludeTax($total_include_tax){

		$this->data['legal_monetory_total']['total_include_tax'] = $total_include_tax;

	}

	public function setTotalDiscount($total_discount){

		$this->data['legal_monetory_total']['total_discount'] = $total_discount;

	}

	public function setTotalCharges($total_charges){

		$this->data['legal_monetory_total']['total_charges'] = $total_charges;

	}

	public function setRoundingAmount($rounding_amount){

		$this->data['legal_monetory_total']['rounding_amount'] = $rounding_amount;

	}

	public function setPayableAmount($payable_amount){

		$this->data['legal_monetory_total']['payable_amount'] = $payable_amount;

	}

	public function setUpLegalMonitoryTotal(){

		return $this->data;
	}
}