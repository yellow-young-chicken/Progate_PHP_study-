<?php
// クラスの宣言部分をここに移してください
class Menu {
  public $name;
  
  public function __construct($name) {
    $this->name = $name;
  }
}

?>

<?php
class Menu {
  public $name;
  // $priceというプロパティを定義してください
  public $price;
  // $imageというプロパティを定義してください
  public $image;
  
  // コンストラクタの引数に$price, $imageを追加してください
  public function __construct($name, $price, $image) {
    $this->name = $name;
    // priceプロパティに引数の$priceを代入してください
    $this->price = $price;
    // imageプロパティに引数の$imageを代入してください
    $this->image = $image;
  }
}
?>

<?php
class Menu {
  public $name;
  public $price;
  public $image;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }
  
  // getTaxIncludedPriceメソッドを定義してください
  public function getTaxIncludedPrice() {
    return floor($this->price * 1.08);
  }
  
}
?>