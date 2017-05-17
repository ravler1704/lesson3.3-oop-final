<?php
namespace Product\Pan;
class Pan extends Product {
	public $color;
	
	public function __construct($color){
		$this->color = $color;
		echo '<br />был создан объект класса Pan c цветом - ' . $color;
	}
}
?>