<?php
namespace Product;
abstract class Product implements Priceble {
	public $name;
	public $price;
	public $discount = 10;
	
	public function __construct($name, $price, $discount){
		$this->name = $name;
		$this->price = $price;
		$this->discount = $discount;
	}
	public function getPrice(){
			return $this->price;
	}
	public function getDiscountPrice(){
			return $this->price - (($this->price * $this->discount) / 100);
	}
}
?>