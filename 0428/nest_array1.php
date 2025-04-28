<?php
$people[] = ['name' => '佐藤', 'blood' => 'A'];
$people[] = ['name' => '田中', 'blood' => 'B'];
$people[] = ['name' => '加藤', 'blood' => 'C'];

var_dump($people);

echo $people[0]['blood'] . "<br>"; // A
echo $people[2]['name'] . "<br>";  // 加藤 （ここも改行つけるときれい）

foreach ($people as $people_key => $person) {
    echo '髙橋' . $people_key . '<br>';

    foreach ($person as $key2 => $value2) { // ← 正しく $person を使う
        echo 'キーは' . $key2 . '、値は' . $value2 . '<br>'; // ← $key2に修正
    }
}
