<?php
require_once __DIR__ . '/functions.php';

// DB接続設定
$user = 'phpuser';
$password = 'xxxxxxxxxx'; // あなたのパスワード
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
];

try {
    $dbh = new PDO('mysql:host=localhost;dbname=sample_db;charset=utf8', $user, $password, $opt);
} catch (PDOException $e) {
    echo "接続エラー: " . $e->getMessage();
    exit;
}

// 入力データ取得＆サニタイズ
$affiliation = trim($_POST['group'] ?? '');
$name = trim($_POST['name'] ?? '');
$age = trim($_POST['age'] ?? '');

// バリデーション
$errors = [];

if ($affiliation === '' || mb_strlen($affiliation) > 20) {
    $errors[] = "所属グループは1〜20文字で入力してください。";
}

if ($name === '' || mb_strlen($name) > 15) {
    $errors[] = "名前は1〜15文字で入力してください。";
}

if (!ctype_digit($age) || (int)$age < 0 || (int)$age > 999) {
    $errors[] = "年齢は0〜999の数字で入力してください。";
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color:red'>" . str2html($error) . "</p>";
    }
    echo "<p><a href='form.php'>戻る</a></p>";
    exit;
}

// DBへ挿入
try {
    $sql = "INSERT INTO members (affiliation, name, age) VALUES (:affiliation, :name, :age)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':affiliation', $affiliation, PDO::PARAM_STR);
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':age', (int)$age, PDO::PARAM_INT);
    $stmt->execute();
    header("Location: form.php"); // 登録後に一覧へ戻る
    exit;
} catch (PDOException $e) {
    echo "登録失敗: " . $e->getMessage();
    exit;
}
