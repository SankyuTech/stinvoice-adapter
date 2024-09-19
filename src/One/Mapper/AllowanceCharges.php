<?php

namespace Sankyu\One\Mapper;

class AllowanceCharges
{
	protected $data;

	public function setCharges($amount = 0,$reason = "Charge",$rate = 0){

		$this->data['allowance_charges']['charges'] = $amount != 0 ?

			[
		        'reason' => $reason,
		        'percentage' => $rate,
		        'amount' => $amount
		    ] : [];

	}

	public function setDiscount($amount = 0 ,$reason = "Discount",$rate = 0){

		$this->item['allowance_charges']['discount'] = $amount != 0 ?
			[
		        'reason' => $reason,
		        'percentage' => $rate,
		        'amount' => $amount
		    ] : [];

	}


	public function setUpAllowanceCharges(){

		return $this->data;
	}
}