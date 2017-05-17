<?php
namespace Product\Car;
class Car extends Product {
	public $color = 'Белая';
	public $type;
	
	public function __construct(){
		parent::__construct($name, $price, $discount);
	}
	public function changeColor($color){
		$this->color = $color;
	}
}
?>