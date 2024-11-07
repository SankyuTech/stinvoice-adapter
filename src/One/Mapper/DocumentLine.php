<?php

namespace Sankyu\One\Mapper;

class DocumentLine
{
	protected $itemsArray = [];
	protected $item = [];

	public function setItemRecordID($record_id){

		$this->item['record_id'] = $record_id;
	}

	public function setItemDescription($description){

		$this->item['description'] = $description;

	}

	public function setItemCountryCode($country_code = 'MYS'){

		$this->item['country_code'] = $country_code;

	}

	public function setItemUnitPrice($unit_price){

		$this->item['unit_price'] = $unit_price;

	}

	public function setItemQuantity($quantity){

		$this->item['quantity'] = $quantity;

	}

	public function setItemSubtotal($subtotal){

		$this->item['subtotal'] = $subtotal;

	}

	public function setItemTaxTotal($tax_total){

		$this->item['tax_total'] = $tax_total;

	}

	public function setItemTaxDetails($scheme = "OTH", $category_id = "06",$percentage = 0,$exemption_reason = "NA",
		$taxable_amount = 0,$amount = 0){

		$this->item['taxes'][] = [
		        'scheme' => $scheme,
		        'category_id' => $category_id,
		        'percentage' => $percentage,
		        'exemption_reason' => $exemption_reason,
		        'taxable_amount' => $taxable_amount,
		        'amount' => $amount,
		];

	}

	public function setItemCharges($amount = 0,$reason = "Charge",$rate = 0){

		if($amount == 0){

			$this->item['charges'][] = [];

		}else{

			$this->item['charges'][] =[
		        'reason' => $reason,
		        'percentage' => $rate,
		        'amount' => $amount
		    ];

		}
		

	}

	public function setItemDiscount($amount = 0 ,$reason = "Discount",$rate = 0){

		if($amount == 0){

			$this->item['discount'][] = [];

		}else{

		$this->item['discount'][] = [
		        'reason' => $reason,
		        'percentage' => $rate,
		        'amount' => $amount
		    ];

		}

	}

	public function setItemCommodity($code = "022",$code_attribute ="CLASS"){

		$this->item['commodity_class'][] = [
				'code' => $code,
		        'code_attribute' => $code_attribute,
		];

	}

	public function setItem(){

		$this->itemsArray['document_line']['items'][] = $this->item;

		$this->item = [];

		return $this->itemsArray;
	}

	public function setUpDocumentLine(){

		return $this->itemsArray;
	}
}