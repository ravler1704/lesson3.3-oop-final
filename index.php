<?php
//автозагрузка пути classes\flying
function __autoload($aClassName) {
    $aClassFilePath = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'flying' . DIRECTORY_SEPARATOR . $aClassName . '.php';
    if (file_exists($aClassFilePath)) {
        echo "<p>executing __aturoload() with aClassName = {$aClassName}</p>";
        require_once $aClassFilePath;
        return true;
    }
    return false;
}

//автозагрузка пути classes\flying\duck
function __autoload($aClassName) {
    $aClassFilePath = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'flying' . DIRECTORY_SEPARATOR . 'duck' . DIRECTORY_SEPARATOR . $aClassName . '.php';
    if (file_exists($aClassFilePath)) {
        echo "<p>executing __aturoload() with aClassName = {$aClassName}</p>";
        require_once $aClassFilePath;
        return true;
    }
    return false;
}


//автозагрузка пути classes\product
function __autoload($aClassName) {
    $aClassFilePath = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'product' . DIRECTORY_SEPARATOR . $aClassName . '.php';
    if (file_exists($aClassFilePath)) {
        echo "<p>executing __aturoload() with aClassName = {$aClassName}</p>";
        require_once $aClassFilePath;
        return true;
    }
    return false;
}


//автозагрузка пути classes\product\car
function __autoload($aClassName) {
    $aClassFilePath = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'product' . DIRECTORY_SEPARATOR . 'car' . DIRECTORY_SEPARATOR . $aClassName . '.php';
    if (file_exists($aClassFilePath)) {
        echo "<p>executing __aturoload() with aClassName = {$aClassName}</p>";
        require_once $aClassFilePath;
        return true;
    }
    return false;
}


//автозагрузка пути classes\product\pan
function __autoload($aClassName) {
    $aClassFilePath = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'product' . DIRECTORY_SEPARATOR . 'pan' . DIRECTORY_SEPARATOR . $aClassName . '.php';
    if (file_exists($aClassFilePath)) {
        echo "<p>executing __aturoload() with aClassName = {$aClassName}</p>";
        require_once $aClassFilePath;
        return true;
    }
    return false;
}

//автозагрузка пути classes\product\phone
function __autoload($aClassName) {
    $aClassFilePath = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'product' . DIRECTORY_SEPARATOR . 'phone' . DIRECTORY_SEPARATOR . $aClassName . '.php';
    if (file_exists($aClassFilePath)) {
        echo "<p>executing __aturoload() with aClassName = {$aClassName}</p>";
        require_once $aClassFilePath;
        return true;
    }
    return false;
}


//автозагрузка пути classes\product\tv
function __autoload($aClassName) {
    $aClassFilePath = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'product' . DIRECTORY_SEPARATOR . 'tv' . DIRECTORY_SEPARATOR . $aClassName . '.php';
    if (file_exists($aClassFilePath)) {
        echo "<p>executing __aturoload() with aClassName = {$aClassName}</p>";
        require_once $aClassFilePath;
        return true;
    }
    return false;
}


$duck1 = new Duck();
$duck2 = new Duck();
echo 'Утка duck1 делает - ' . $duck1->krya() . ' ' . $duck1->fly();
echo '<br />';
echo 'Утка duck2 делает - ' . $duck2->ga() . ' ' . $duck2->fly();;
echo '<br />';
echo '<br />';

$car1 = new Car();
$car2 = new Car();
$car1->changeColor('Зеленая');
echo 'car1 - ' . $car1->color . '<br />';
echo 'car2 - ' . $car2->color . '<br />';

$pan1 = new Pan('Красный');
$pan2 = new Pan('Синий');
echo '<br /> pan1 - ' . $pan1->color;
echo '<br /> pan2 - ' . $pan2->color;
$pan2->color = 'Черный';
echo '<br /> Меняем цвет pan2, теперь он - ' . $pan2->color;
echo '<br />';
echo '<br />';

$iphone = new Phone('Apple iPhone 7', 72000, 10);
$galaxy = new Phone('Samsung Galaxy S7', 50000, 0);
echo 'Цена ' . $iphone->name . ' - ' . $iphone->price . ' руб. ';
echo '<br />';
echo 'Цена ' . $iphone->name . ' со скидкой ' . $iphone->getDiscountPrice() . ' руб. ';
echo '<br />';
echo 'Цена ' . $galaxy->name . ' - ' . $galaxy->price . ' руб. ';
echo '<br />';

$tv1 = new Tv();
$tv2 = new Tv();
echo $tv2->discount;
echo '<br />';



/*
header('Content-type: text/plain');
require_once('classes\flying\flying.php');
require_once('classes\flying\duck\duck.php');

require_once('classes\product\product.php');
require_once('classes\product\car\car.php');
require_once('classes\product\pan\pan.php');
require_once('classes\product\phone\phone.php');
require_once('classes\product\tv\tv.php');
*/
?>