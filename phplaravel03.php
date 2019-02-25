<?php
//PHP/Laravel 03 – プログラムの実行を条件分岐構文と繰り返し構文で制御できるようになろう
//1
$name = "Masato";

if($name == "Masato"){
  echo "私は".$name."です";
  echo PHP_EOL;
}else{
  echo "あなたの名前ではありません";
  echo PHP_EOL;
}

//2
$sum_count = 1;
$sum_num = 1;
$end_count = 0;

for($i=1; $i < 101; $i++){
  $sum_count++;
  $sum_num = $sum_num + $sum_count;
  $end_count++;
  
  if($end_count==99){
    echo $sum_num;
    echo PHP_EOL;
  }
}


//3
$fruits = array("林檎","梨","苺","桃","蜜柑");

foreach($fruits as $fruit){
  echo $fruit;
  echo PHP_EOL;
}


//4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo PHP_EOL;
  }
}

?>