<?php

namespace Sankyu\One\Mapper;

class TaxTotal
{
	public $data;

	public function setTaxSubtotal($scheme = 'OTH',$category_id = '06',$taxable_amount = 0,$tax_amount = 0){


		$this->data['tax_total'][] =
			[
		        'scheme' => $scheme,
		        'category_id' => $category_id,
		        'taxable_amount' => $taxable_amount,
		        'tax_amount' => $tax_amount,
		    ];
	}

	public function setUpTaxTotal(){

		return $this->data;
	}
}