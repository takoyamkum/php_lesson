<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if ($i % 20 === 0) {
      echo 'tic-tac';
      echo "\n";
  } elseif ($i % 4 === 0) {
      echo 'tic';
      echo "\n";
  } elseif ($i % 5 === 0) {
      echo 'tac';
      echo "\n";
  } else {
      echo $i;
      echo "\n";
  }
}

// Q2 多次元連想配列

//問題１
echo '' .$personalInfos[1]['name']. 'の電話番号は' 
.$personalInfos[1]['tel']. 'です。';

//問題２

// Q3 オブジェクト-1


// Q4 オブジェクト-2


// Q5 定義済みクラス
?>