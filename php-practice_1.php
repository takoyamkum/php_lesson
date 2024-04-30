<?php
// Q1 変数と文字列
$message = '「下村」';
$newMessage = '私の名前は ' . $message . ' です。';
echo $newMessage;

// Q2 四則演算;
$num = 5 * 4;
echo $num;
$num /= 2;
echo $num;

// Q3 日付操作
echo '現在時刻は、' . date('Y年m月d日 H時i分s秒') . ' です。';

// Q4 条件分岐-1 if文
$device = 'Windows';
if ($device === 'Windows'|| $device === 'Mac') {
    echo '使用OSは、' .$device . 'です。';
} 
   else {
    echo 'どちらでもありません';
}

// Q5 条件分岐-2 三項演算子
$age = 16;
$message = ($age >= 18) ? '成人です。' : '未成年です。';

echo $message;

// Q6 配列
$prefs =  ['東京都', '埼玉県', '神奈川県', '栃木県', '千葉県', '茨城県','群馬県'];
echo $prefs[3] . 'と' . $prefs[4] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$prefs =  ['東京都' => '新宿区', 
    '神奈川県' => '横浜市',  
    '千葉県' => '千葉市', 
    '埼玉県' => 'さいたま市', 
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市', 
    '茨城県' => '水戸市'
];
foreach ($prefs as $p => $c) {
   echo $c;
   echo "\n";
}

// Q8 連想配列-2
$prefs =  ['東京都' => '新宿区', '神奈川県' => '横浜市',  '千葉県' => '千葉市', 
'埼玉県' => 'さいたま市', '栃木県' => '宇都宮市','群馬県' => '前橋市', '茨城県' => '水戸市'];

foreach (prefs as $p => $c ) {
    if ($p === '埼玉県') {
        echo '埼玉県の県庁所在地は、さいたま市です。';
    }
    
}


// Q9 連想配列-3
$Kanto_prefs =  ['東京都' => '新宿区', '神奈川県' => '横浜市',  '千葉県' => '千葉市', 
'埼玉県' => 'さいたま市', '栃木県' => '宇都宮市','群馬県' => '前橋市', '茨城県' => '水戸市'];
$add_prefs = ['愛知県' => '名古屋市', '大阪府' => '大阪市'];
$prefs = array_merge($$Kanto_prefs, $add_prefs);
foreach ($prefs as $p => $c ) {
 if ($p === '愛知県'|| $p === '大阪府') {
     echo  $p . 'は関東地方ではありません' . "\n";
 } else {
    echo  $p . 'の県庁所在地は' , $c . 'です。' . "\n"; 
}

}
// Q10 関数-1
function sayHi($name)
{
    echo  $name . 'さん、こんにちは。';
}
sayHi('鈴木');
sayHi('佐藤');

// Q11 関数-2
function calcTaxInPrice($price)
{
    $calcTaxInPrice = $price + ($price * 0.1);
    return $calcTaxInPrice;
}
$price = 1000;
$calcTaxInPrice = calcTaxInPrice(1000);
echo  $price . '円の商品の税込み価格は' . $calcTaxInPrice . '円です';

// Q12 関数とif文
function distinguishNum($distinguishNum) {
    if($distinguishNum % 2 == 0) {
        echo $distinguishNum . 'は偶数です' . "\n";
    } else {
        echo $distinguishNum . 'は奇数です' . "\n";
    }
}
num(11);
num(24);

// Q13 関数とswitch文
function grade($evaluateGrade) {
    switch($evaluateGrade) {
        case 'A';
        case 'B';
        return '合格です。';
        

        case 'C';
        return '合格ですが追加課題があります。';
        

        case 'D';
        return '不合格です。';
        

        default:
        return '判定不明です。講師に問い合わせてください。';
    }
}
echo grade('A');
echo grade('E');

?>