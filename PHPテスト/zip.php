<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') { フォームから送信された値を取得
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $comment = htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8');


    echo "{$name}さんのコメント：{$comment}";
} else {
    echo "フォームから送信してください。";
}
