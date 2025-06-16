<?php
//connect1.php
require_once './function.php';

if (empty($_POST['title'])) {
    echo "タイトルが入力されていません。<br>";
    exit;
}
if (!preg_match('/\A[[:^cntrl:]]{1,200}\z/u', $_POST['title'])) {
    echo 'タイトルは200文字までです。';
    exit;
}
if (!preg_match('/\A\d{0,13}\z/', $_POST['isbn'])) {
    echo 'ISBNは数字13桁までです。';
    exit;
}
if (!preg_match('/\A\d{0,6}\z/u', $_POST['price'])) {
    echo '価格は6桁までの数字です。';
    exit;
}
if (empty($_POST['publish'])) {
    echo "日付は必須です。<br>";
    exit;
}
if (!preg_match('/\A\d{4}-\d{1,2}-\d{1,2}\z/u', $_POST['publish'])) {
    echo '日付のフォーマットが違います';
    exit;
}
$date = explode('-', $_POST['publish']);
if (!checkdate($date[1], $date[2], $date[0])) {
    echo "正しい日付を入力してください。<br>";
    exit;
}
if (!preg_match('/\A[[:^cntrl:]]{0,80}\z/u', $_POST['author'])) {
    echo '著者名は80文字までです。';
    exit;
}

try {
    $user = 'phpuser';
    $password = 'hashi123a'; // 任意のパスワード
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
    ];

    $dbh = new PDO('mysql:host=localhost;dbname=sample_db;charset=utf8', $user, $password, $opt);
    $sql = "INSERT INTO books (id, title, isbn, price, publish, author)
            VALUES (NULL, :title, :isbn, :price, :publish, :author);";

    $stmt = $dbh->prepare($sql);

    $title = str2html($_POST['title']);
    $isbn = str2html($_POST['isbn']);
    $price = (int) $_POST['price'];
    $publish = str2html($_POST['publish']);
    $author = str2html($_POST['author']);

    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':isbn', $isbn, PDO::PARAM_STR);
    $stmt->bindParam(':price', $price, PDO::PARAM_INT);
    $stmt->bindParam(':publish', $publish, PDO::PARAM_STR);
    $stmt->bindParam(':author', $author, PDO::PARAM_STR);

    $stmt->execute();
    echo "データを追加しました。<br>";

    var_dump($_POST);
} catch (PDOException $e) {
    echo "Error: " . str2html($e->getMessage()) . "<br>";
    exit;
}
