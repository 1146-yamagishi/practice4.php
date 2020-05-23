<?php

$name = "山岸陸";
if($name == "山岸陸"){
    echo "私はあなたの名前です。";
}else{
    echo "あなたの名前ではありません。";
}
$i = 0;
for ($j = 0; $j <= 1000; $j++){
    $i += $j;
}echo $i;

$fruits = ["ORANGE","apple","lemon","peah","strawberry"];
foreach($fruits as $foreach){
    echo $foreach;
    echo "\n";
}

/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = 1; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}