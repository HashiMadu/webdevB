<?php
require_once 'function.php';


try {
    $user = 'phpuser';
    $password = 'hashi123a'; // 任意のパスワード
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
    ];

    $dbh = new PDO('mysql:host=localhost;dbname=sample_db;charset=utf8', $user, $password, $opt);
    $sql = 'SELECT title, author FROM books';
    $statment = $dbh->query($sql);

    while ($row = $statment->fetchObject()) {
        echo "書類名" . str2html($row['title']) . "<br>";
        echo "著者" . str2html($row['author']) . "<br>";
    }
} catch (PDOException $e) {
    echo 'エラー！: ' . str2html($e->getMessage()) . '<br>';
    exit;
}
