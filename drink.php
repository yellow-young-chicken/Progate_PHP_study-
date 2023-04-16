<?php 
// menu.phpを読み込んでください
require_once('menu.php');

// Menuクラスを継承したDrinkクラスを作成してください
class Drink extends Menu {
  
}

?>

<?php 
require_once('menu.php');

class Drink extends Menu {
  // $typeというprivateなプロパティを定義してください
  private $type;
  
  // getTypeメソッドを定義してください
  public function getType() {
    return $this->type;
  }
  
  // setTypeメソッドを定義してください
  public function setType($type) {
    $this->type = $type;
  }
  
}

?>

<?php 
require_once('menu.php');

class Drink extends Menu {
  private $type;
  
  // Menuクラスの__constructをコピーしてください
  // 引数に$typeを追加してください
  public function __construct($name, $price, $image, $type) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    self::$count++;
    
    // typeプロパティに$typeを代入してください
    $this->type = $type;
    
  }
  
  public function getType() {
    return $this->type;
  }
  
  public function setType($type) {
    $this->type = $type;
  }
  
}

?>