<?php
require_once 'function.php';
session_start();
$height = (float) $_POST['height'];
$weight = (float) $_POST['weight'];;
$bmi = 0;

if (!((0 < $height && $height) && ($height < 3))) {
    echo "身長は正しく入力してください。";
    exit;
}
if (($weight < 30) || ($weight > 300)) {
    echo "体重は正しく入力してください。";
    exit;
}

$goal_weight = $height * $height * 22;

$difference = abs($goal_weight - $weight);

echo '体重' . $weight . 'kg<br>';
echo '目標体重' . $goal_weight . 'kg<br>';
echo '後' . $difference . 'kgで体重です。<br>';
