<?php
// セッション開始
session_start();

//セッションが空でなければ、前回のデータ取得
if (!empty($_SESSION['my_shop']['regist'])) {
    $regist = $_SESSION['my_shop']['regist'];
}
//TODO: エラーメッセージ
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <main class="m-auto w-50">
        <h2 class="p-2 text-center">ログイン</h2>
        <form action="auth.php" method="post">
            <div class="form-floating mt-3">
                <input class="form-control" type="email" name="email" value="<?= @$member['email'] ?>">
                <label class="form-label" for="">Email</label>
                <p class="text-danger"><?= @$errors["email"] ?></p>
            </div>
            <div class="form-floating mt-3">
  2 changes: 1 addition & 1 deletion2  
regist/input.php
@@ -20,27 +20,27 @@
<body>
    <main class="container">
        <h2 class="text-center p-3">会員登録</h2>
        <!-- form request confirm.php にデータをPOST送信-->
        <form action="confirm.php" method="post">
            <div>
                <label class="form-label" for="">名前</label>
                <input class="form-control" type="text" name="name" value="<?= @$regist['name'] ?>">
            </div>
            <div>
                <label class="form-label" for="">Email</label>
                <input class="form-control" type="email" name="email" value="<?= @$regist['email'] ?>">
            </div>
            <div>
                <label class="form-label" for="">パスワード</label>
                <input class="form-control" type="password" name="password">
            </div>

            <div class="mt-3 text-center">
                <button class="btn btn-primary">次へ</button>
                <a class="btn btn-outline-primary" href="">ログイン画面へ</a>
                <a class="btn btn-outline-primary" href="../login/">ログイン画面へ</a>
            </div>
        </form>
    </main>