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

<?php
class Menu {
  // name, price, imageプロパティのアクセス権をprivateにしてください
  private $name;
  private $price;
  private $image;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }
  
  // getNameメソッドを定義してください
  public function getName() {
    return $this->name;
  }
  
  // getImageメソッドを定義してください
  public function getImage() {
    return $this->image;
  }
  
  public function getTaxIncludedPrice() {
    return floor($this->price * 1.08);
  }
  
}
?>

<?php
class Menu {
  private $name;
  private $price;
  private $image;
  // $orderCountというプロパティを定義してください。ただし、初期値を数値の0としてください。
  private $orderCount = 0;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getImage() {
    return $this->image;
  }
  
  // getOrderCountメソッドを定義してください
  public function getOrderCount() {
    return $this->orderCount;
  }
  
  // setOrderCountメソッドを定義してください
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
  
  public function getTaxIncludedPrice() {
    return floor($this->price * 1.08);
  }
  
}
?>

<?php
class Menu {
  private $name;
  private $price;
  private $image;
  private $orderCount = 0;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getImage() {
    return $this->image;
  }
  
  public function getOrderCount() {
    return $this->orderCount;
  }
  
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
  
  public function getTaxIncludedPrice() {
    return floor($this->price * 1.08);
  }
  
  // getTotalPriceメソッドを定義してください
  public function getTotalPrice() {
    return $this->getTaxIncludedPrice() * $this->orderCount;
  }
  
}
?>

<?php
class Menu {
  private $name;
  private $price;
  private $image;
  private $orderCount = 0;
  // $countというpublicなクラスプロパティを、初期値を数値の4として定義してください
  public static $count = 4;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getImage() {
    return $this->image;
  }
  
  public function getOrderCount() {
    return $this->orderCount;
  }
  
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
  
  public function getTaxIncludedPrice() {
    return floor($this->price * 1.08);
  }
  
  public function getTotalPrice() {
    return $this->getTaxIncludedPrice() * $this->orderCount;
  }
  
}
?>

<?php
class Menu {
  private $name;
  private $price;
  private $image;
  private $orderCount = 0;
  // $countというpublicなクラスプロパティを、初期値を数値の4として定義してください
  public static $count = 4;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getImage() {
    return $this->image;
  }
  
  public function getOrderCount() {
    return $this->orderCount;
  }
  
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
  
  public function getTaxIncludedPrice() {
    return floor($this->price * 1.08);
  }
  
  public function getTotalPrice() {
    return $this->getTaxIncludedPrice() * $this->orderCount;
  }
  
}
?>

<?php
class Menu {
  private $name;
  private $price;
  private $image;
  private $orderCount = 0;
  // クラスプロパティ$countのアクセス権をprivateに、初期値を数値の0にしてください
  private static $count = 0;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    // クラスプロパティcountの値に1を足してください
    self::$count++;
    
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getImage() {
    return $this->image;
  }
  
  public function getOrderCount() {
    return $this->orderCount;
  }
  
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
  
  public function getTaxIncludedPrice() {
    return floor($this->price * 1.08);
  }
  
  public function getTotalPrice() {
    return $this->getTaxIncludedPrice() * $this->orderCount;
  }
  
  // getCountというクラスメソッドを追加してください
  public static function getCount() {
    return self::$count;
  }
  
}
?>