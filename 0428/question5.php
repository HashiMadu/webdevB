<?php
# 1. 配列 ['赤', '青', '黄'] を作成し、foreach で各要素を1行ずつ表示してください。
$color = [
    0 => '赤',
    1 => '青',
    2 => '黄'
];

foreach ($color as $value) {
    echo $value;
} ?>
<br>
<?php
# 2. ['りんご' => 150, 'バナナ' => 120, 'みかん' => 100] の配列から「フルーツ名：価格円」と表示してください。
$name = [
    'りんご' => '150',
    'バナナ' => '120',
    'みかん' => '100'
];
foreach ($name as $key => $value) {
    echo $key . ':' . $value . '<br>';
}; ?>
<br>


<?php
$numbers = [100, 200, 300];
$sum = 0;

foreach ($numbers as $number) {
    $sum += $number;
}

echo $sum;
?>
<br>
<?php
# 4. ['PHP', 'JavaScript', 'Python'] という配列に foreach を使って、インデックス番号と一緒に表示してください（例: 0: PHP）。

$languages = ['PHP', 'JavaScript', 'Python'];

foreach ($languages as $index => $language) {
    echo $index . ': ' . $language . "<br>";
}
?>
<br>
<?php
# 5. ['A', 'B', 'C'] の各要素に「さん」を付けて表示してください（例: Aさん）。

$names = ['A', 'B', 'C'];

foreach ($names as $name) {
    echo $name . 'さん' . "<br>";
}
?>

<br>
<?php
# 6. [10, 20, 30] の各値を2倍にして出力してください。

$numbers = [10, 20, 30];

foreach ($numbers as $number) {
    echo $number * 2 . "<br>";
}
?>