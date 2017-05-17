<?php
namespace Product\Tv;
class Tv extends Product {
	public $size = 40;
	public $brand;
	
	public function __construct(){
		echo '<br />был создан объект класса Tv';
	}
}
?>