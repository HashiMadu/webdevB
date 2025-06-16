<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メンバー登録フォーム</title>
</head>

<body>
    <form action="register.php" method="post">
        <label for="affiliation">所属: <input type="text" name="affiliation" maxlength="20" required></label><br>
        <label for="name">名前: <input type="text" name="name" maxlength="15" required></label><br>
        <label for="age">年齢: <input type="number" name="age" max="999" required></label><br>
        <button type="submit">登録</button>
    </form>
</body>

</html>