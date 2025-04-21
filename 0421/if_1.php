<?php
$condition = false;
if ($condition) {
    echo '条件はtrueです。';
}
?>
<br>
<?php
$a = 1;
$b = "1";
if ($a === 1) {
    echo "aは数値型です。";
}
if ($b === "1") {
    echo "bは文字列型です。";
}
if ($a == $b) {
    echo "aとbは等しい値です。";
}
?>
<?php
echo "<br>";
if ($a === $b) {
    echo "aとbは型も値も等しい値です。";
} else {
    echo "aとbは型が等しくありません。";
} ?>

<br>