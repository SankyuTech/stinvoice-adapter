<?php

namespace Sankyu\One\Mapper;

class AllowanceCharges
{
	protected $data;

	public function setCharges($amount = 0,$reason = "Charge"){

		$this->data['allowance_charges']['charges'] = $amount != 0 ?

			[
		        'reason' => $reason,
		        'amount' => $amount
		    ] : [];

	}

	public function setDiscount($amount = 0 ,$reason = "Discount"){

		$this->data['allowance_charges']['discount'] = $amount != 0 ?
			[
		        'reason' => $reason,
		        'amount' => $amount
		    ] : [];

	}


	public function setUpAllowanceCharges(){

		return $this->data;
	}
}