<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php
    // 'Hello, world!'をechoしてください
    echo 'Hello, world!';
  ?>
  
  <br>

  <?php
    // 7 * 2をechoしてください
    echo 7 * 2;
  ?>

  <br>

  <?php
    // 8 % 3をechoしてください
    echo 8 % 3 ; 
  ?>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <!-- この下で5 + 7を出力しましょう -->
  <?php
    echo 5 + 7;
  ?>

  <br>

  <!-- この下で'5 + 7'を出力しましょう -->
  <?php
    echo  '5 + 7';
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <!-- この下に変数$fruitを書いていきましょう！ -->
  <?php
    $fruit = "りんご";
    echo $fruit;
  ?>

  <br>

  <!-- この下に変数$sumを書いていきましょう！ -->
  <?php
    $sum = 8+9;
    echo $sum;
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    $x = 5;
    $y = 2;
    $a = 8;
    $b = 4;
    
  ?>

  <!-- この下で$xの計算をしていきましょう -->
  <?php
    $x += 10;
    echo $x;
  ?>

  <br>

  <!-- この下で$yの計算をしていきましょう -->
  <?php
    $y *= 5;
    echo $y;
  ?>

  <br>

  <!-- この下で$aの計算をしていきましょう -->
  <?php
    $a++;
    echo $a;
  ?>

  <br>
  
  <!-- この下で$bの計算をしていきましょう -->
  <?php
    $b--;
    echo $b;
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php
    $name = 'にんじゃわんこ';
    // 'こんにちは！'という文字列と$nameを連結してechoしてください
    echo "こんにちは！".$name;
    
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    $x = 99 * 99;
    $y = 77 * 77;

    // ここにif文を書いていきましょう
    
    if($x>9800){
      echo "変数xは9800より大きいです。";
    }
    
    if($y>6000){
      echo "変数yは6000より大きいです。";
    }
    
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php
    // $ageという変数に自分の年齢を代入してください
    $age = 30;
    if($age >= 30){
      echo "あなたは30歳以上です。";}
    else{
      echo "あなたは30歳未満です。";
    }
    
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php
  
    $x = 1071;
    
    // 以下にif-elseif-else文を書いてください
    if($x%3==0 && $x%7==0){
      echo "xは3の倍数かつ7の倍数です。";
    }
    elseif($x%3==0 ){
      echo "xは3の倍数ですが7の倍数ではありません。";
    }
    elseif($x%7==0){
      echo "xは7の倍数ですが3の倍数ではありません。";
    }
    else{
      echo "xは7の倍数でも3の倍数でもありません。";
    }
    
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // 変数$numを定義し、好きな数字を代入してください
    $num = 6;
    $remainder = $num%3;
  
    // 変数$remainderを定義し、変数$numを3で割った時の余りを代入してください
    switch($remainder){
      case 0:
      echo "大吉です。";
      break;
      case 1:
        echo "中吉です。";
        break;
       case 2:
         echo "小吉です。";
         break;
        default:
          echo "凶です。";
          break;
      
    }
    
 
    // switch文を用いてください
    
  
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // この下に配列を作ってください
    $colors = array("赤","青","黄");
    echo $colors[0];
    $colors[] = "白";
    echo $colors[3] ;
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // この下に連想配列を作ってください
    $scores = array(
      "数学" => 70 ,
      
      "英語" => 90 ,
      
      "国語" => 80 
      
      );
    
    $scores["国語"] += 5 ;
    echo $scores["国語"];
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // この下にfor文を書いてください
    for ($i = 51 ; $i <= 100 ; $i++ ){
      echo $i;
      echo "<br>";
    }
    
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // 変数$iを定義してください
    $i = 2;
    while($i <= 100){
      echo $i;
      $i = $i + 2 ;
      echo "<br>";
    }
    
    // while文を書いてください
    
    
  ?>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // この下にfor文を書いてください
    for($i = 1 ; $i <= 1000; $i++) {
      if($i > 500){
        break;
      }
      echo $i ;
      echo "<br>";
    }
    
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // この下にfor文を書いてください
    for($i=1;$i<=1000;$i++){
      if($i%3==0){
        continue;
      }
      echo $i;
      echo "<br>";
    }
    
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    $scores = array('数学' => 70, '英語' => 90, '国語' => 80);

    // この下にforeach文を書いてください
    foreach($scores as $key => $value){
      echo $key."は".$value."点です。";
    }
    
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    $str = 'progate';

    // strlenを用いて$strの長さをechoしてください
    echo strlen($str);
    
    
    echo '<br>';
    
    $array = array('HTML', 'CSS', 'PHP');

    // countを用いて$arrayの要素数をechoしてください
    
    echo count($array);
    echo '<br>';
    
    // randを用いて10から15までのランダムな数字をechoしてください
    echo rand(10,15);
    
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // 関数helloを定義してください
    function hello(){
      echo "Hello, world!";
    }
    
    // 関数helloを呼び出してください
    hello();
    echo '<br>';
    // 関数printRectangleAreaを定義してください
    
    function printRectangleArea($height,$width){
      echo $height*$width;
    }
    
    // 引数を(5, 10)としてprintRectangleAreaを呼び出してください
    printRectangleArea(5,10);
    
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // 関数getCircleAreaを定義してください
    
    function getCircleArea($radius){
      return $radius * $radius * 3;
    }
    
    // 関数getCircleAreaを呼び出して、戻り値を変数$circleAreaに代入してください
    $circleArea = getCircleArea(5);
    
    
    // $circleAreaをechoしてください
    echo $circleArea;
    
  ?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">Progate</div>
    <div class="header-right">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li class="selected">お問い合わせ</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="contact-form">
      <div class="form-title">お問い合わせ</div>
      <!-- この下にformタグを書いていきましょう -->
      
      <form action="sent.php" method="post">
        
      </form>
      
    </div>
  </div>
  
  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li>お問い合わせ</li>
      </ul>
    </div>
    <div class="like-box">
      <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539&amp;show_faces=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:300px;" allowTransparency="true"></iframe>
    </div>
  </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">Progate</div>
    <div class="header-right">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li class="selected">お問い合わせ</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="contact-form">
      <div class="form-title">お問い合わせ</div>
      <form method="post" action="sent.php">
        <div class="form-item">名前</div>
        <input type="text" name="name">

        <div class="form-item">内容</div>
        <textarea name="body"></textarea>

        <!-- この下に送信ボタンを作りましょう -->
        <input type="submit" value="送信">
        
      </form>
    </div>
  </div>
  
  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li>お問い合わせ</li>
      </ul>
    </div>
    <div class="like-box">
      <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539&amp;show_faces=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:300px;" allowTransparency="true"></iframe>
    </div>
  </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">Progate</div>
    <div class="header-right">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li class="selected">お問い合わせ</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="contact-form">
      <div class="form-title">お問い合わせ</div>
      <form method="post" action="sent.php">
        <div class="form-item">名前</div>
        <input type="text" name="name">

        <div class="form-item">年齢</div>
        <!-- この下にselectタグを書いていきましょう -->
        <select name="age">
          <option value="未選択">選択してください</option>
          <option value="20代">20代</option>
          <option value="30代">30代</option>
        </select>
        
        <div class="form-item">内容</div>
        <textarea name="body"></textarea>

        <input type="submit" value="送信">
      </form>
    </div>
  </div>
  
  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li>お問い合わせ</li>
      </ul>
    </div>
    <div class="like-box">
      <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539&amp;show_faces=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:300px;" allowTransparency="true"></iframe>
    </div>
  </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">Progate</div>
    <div class="header-right">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li class="selected">お問い合わせ</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="contact-form">
      <div class="form-title">お問い合わせ</div>
      <form method="post" action="sent.php">
        <div class="form-item">名前</div>
        <input type="text" name="name">

        <div class="form-item">年齢</div>
        <select name="age">
          <option value="未選択">選択してください</option>
          <!-- for文を用いて6歳から100歳までをoptionで選べるようにしましょう -->
          <?php 
            for($i = 6;$i<=100;$i++){
              echo "<option value='{$i}'>{$i}</option>";
            }
          ?>
        </select>

        <div class="form-item">お問い合わせの種類</div>
        <?php 
          $types = array('Progateに関するお問い合わせ', 'Progateに対する意見', '採用に関するお問い合わせ', '取材・メディア関連のお問い合わせ', '料金に関するお問い合わせ', 'その他');
         ?>
        <!-- この下にselectタグを書いていきましょう -->
        
        <select name="category">
          <option value="未選択">選択してください</option>
          <?php            
             foreach ($types as $type) {            
                  echo "<option value='{$type}'>{$type}</option>";            
                   }            
                 ?>
        </select>
        
        <div class="form-item">内容</div>
        <textarea name="body"></textarea>

        <input type="submit" value="送信">
      </form>
    </div>
  </div>
  
  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li>お問い合わせ</li>
      </ul>
    </div>
    <div class="like-box">
      <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539&amp;show_faces=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:300px;" allowTransparency="true"></iframe>
    </div>
  </div>
</body>
</html>

<?php

echo 'Hello, PHP';

echo '<br>';

echo '10 + 7';

?>

<?php
$name = 'Tom';
echo '変数$nameの値: '.$name;
echo '<br>';
echo '-----';
echo '<br>';

echo 'My name is '.$name;

?>

<?php
$price = 1000;
$taxRate = 0.08;
echo '変数$priceの値: '.$price;
echo '<br>';
echo '変数$taxRateの値: '.$taxRate;
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください

$taxIncludedPrice = $price + $price * $taxRate;
echo '税込価格は'.$taxIncludedPrice.'円です';
?>

<?php
$money = 2000;
$price = 1000;
$taxRate = 0.08;
echo '変数$moneyの値: '.$money;
echo '<br>';
echo '変数$priceの値: '.$price;
echo '<br>';
echo '変数$taxRateの値: '.$taxRate;
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$taxIncludedPrice = $price + $price * $taxRate;
if ($money > $taxIncludedPrice) {
  echo '商品を買うことができます';
} elseif ($money == $taxIncludedPrice) {
  echo '商品を買うことができますが、所持金がなくなります';
} else {
  echo '商品を買うことができません';
}

?>

<?php
$prices = array(1000, 650, 750, 800);
echo '$pricesの値: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$totalPrice = 0; // 金額の合計値を入れるための変数
foreach ($prices as $price) {
  // 各金額を$totalPriceに足していく
  $totalPrice += $price;
}
echo '合計金額は'.$totalPrice.'円です';

?>

<?php
$prices = array(1000, 650, 750, 800);
echo '$pricesの値: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$totalPrice = 0;
$maxPrice = 0; // 最高価格を入れるための変数
foreach ($prices as $price) {
  $totalPrice += $price;
  // $maxPriceに入っている価格より大きければ
  if ($price > $maxPrice) {
    // その価格で$maxPriceを上書きする
    $maxPrice = $price;
  }
}
echo '合計金額は'.$totalPrice.'円です';
echo '<br>';
echo '最高価格は'.$maxPrice.'円です';
?>