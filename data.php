<?php
// menu.phpを読み込んでください
require_once('menu.php');

// データ定義部分をここに移してください
$juice = new Menu('JUICE');
$coffee = new Menu('COFFEE');
$curry = new Menu('CURRY');
$pasta = new Menu('PASTA');

$menus = array($juice, $coffee, $curry, $pasta);

?>

<?php
require_once('menu.php');

// それぞれpriceとimageを追加してください
$juice = new Menu('JUICE', 600, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
$coffee = new Menu('COFFEE', 500, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');
$curry = new Menu('CURRY', 900, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
$pasta = new Menu('PASTA', 1200, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');

$menus = array($juice, $coffee, $curry, $pasta);

?>

<?php
require_once('menu.php');

$juice = new Menu('JUICE', 600, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
$coffee = new Menu('COFFEE', 500, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');
$curry = new Menu('CURRY', 900, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
$pasta = new Menu('PASTA', 1200, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');

// $juiceに対して数値の2を引数としてsetOrderCountメソッドを呼び出してください
$juice->setOrderCount(2);

$menus = array($juice, $coffee, $curry, $pasta);

?>

<?php
// menu.phpの読み込みを削除してください

// drink.phpとfood.phpを読み込んでください
require_once('drink.php');
require_once('food.php');

// $juiceをDrinkクラスのインスタンスとしてください
$juice = new Drink('JUICE', 600, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
// $coffeeをDrinkクラスのインスタンスとしてください
$coffee = new Drink('COFFEE', 500, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');
// $curryをFoodクラスのインスタンスとしてください
$curry = new Food('CURRY', 900, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
// $pastaをFoodクラスのインスタンスとしてください
$pasta = new Food('PASTA', 1200, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');

$menus = array($juice, $coffee, $curry, $pasta);

?>

<?php
require_once('drink.php');
require_once('food.php');

$juice = new Drink('JUICE', 600, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
$coffee = new Drink('COFFEE', 500, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');

// $juiceのセッターを用いて$typeプロパティに'アイス'を代入してください
$juice->setType('アイス');

// $coffeeのセッターを用いて$typeプロパティに'ホット'を代入してください
$coffee->setType('ホット');

$menus = array($juice, $coffee);

?>

<?php
require_once('drink.php');
require_once('food.php');

// $juiceのnewの引数に'アイス'を追加してください
$juice = new Drink('JUICE', 600, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png', 'アイス');
// $coffeeのnewの引数に'ホット'を追加してください
$coffee = new Drink('COFFEE', 500, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png', 'ホット');
$curry = new Food('CURRY', 900, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
$pasta = new Food('PASTA', 1200, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');

// 以下の2行を削除してください


$menus = array($juice, $coffee, $curry, $pasta);

?>