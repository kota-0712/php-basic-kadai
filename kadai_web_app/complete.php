<?php
// セッションを開始
session_start();

// セッションに保存された「お名前」を取得
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '名無し';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>完了画面</title>
</head>
<body>

<h1>登録が完了しました。</h1>
<p>社員情報がデータベースに保存されました。</p>

<form action="form.php" method="post">
    <input type="submit" value="戻る">
</form>

<?php
    // セッション変数を初期化
    $_SESSION = array();

    // セッションを終了
    session_destroy();
    ?>
</body>
</html>
