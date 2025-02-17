<!DOCTYPE html>
<html>
<head>
  <title>C.C.Donuts</title>
</head>
<body>
  <?php include 'header.php'; ?>
  <div class="gesuto">
      <p>ようこそ ゲスト様</p>
    </div>
    <h1>ログイン</h1>
    <div class="loginContainer">
        <div class="loginForm">
            <form action="#">
                <div class="inputGroup">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" placeholder="123@gmail.com">
                </div>
                <div class="inputGroup">
                    <label for="password">パスワード</label>
                    <input type="password" id="password" name="password" placeholder="123456">
                </div>
                <button class="loginBtn" type="submit">ログインする</button>
            </form>
        </div>
        <a href="http://localhost/phpensyuu131/ccdonuts/kaiintouroku.php" class="registerLink">会員登録はこちら</a>
    </div>
</body>
</html>
<?php include 'footer.php'; ?>
  </body>
</html> 