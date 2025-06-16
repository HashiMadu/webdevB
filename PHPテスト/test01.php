<?php
$a = 5;
$b = 3;
$a = $a + $b;
echo $a;

?>
<br>

<?php
$name = "erikssann";
$name .= "えりか、元気？";
echo $name;
?>
<br>
<?php
$total = 1000; // 元の金額
$taxRate = 0.10; // 税率10%
$totalWithTax = $total + ($total * $taxRate); // 税込金額を計算
echo (int)$totalWithTax; // 整数として表示
?>
<br>
<?php
$score = rand(0, 100); // 0から100までのランダムな整数を生成
echo "スコア: $score<br>"; // スコアを表示

if ($score >= 80) {
    echo "優"; // 80以上の場合
} elseif ($score >= 60) {
    echo "良"; // 60以上80未満の場合
} else {
    echo "可"; // それ以外の場合
}
?>
<br>
<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0) { // 3の倍数かどうかを判定
        echo $i . "<br>"; // 改行付きで表示
    }
}
?>
<br>
<?php
$users = [
    ['name' => 'Ken', 'age' => 20, 'score' => 85],
    ['name' => 'Yui', 'age' => 22, 'score' => 78],
    ['name' => 'Taro', 'age' => 19, 'score' => 55]
];

foreach ($users as $user) {
    $name = $user['name'];
    $age = $user['age'];
    $score = $user['score'];

    // 判定を決定
    if ($score >= 80) {
        $judgment = "優";
    } elseif ($score >= 60) {
        $judgment = "良";
    } else {
        $judgment = "可";
    }

    // 結果を表示
    echo "名前: $name, 年齢: {$age}歳, スコア: $score, 判定: $judgment<br>";
}
?>


<br>

<button>































</button>