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
    <h1>会員登録</h1>
    
        <div class="formContent">
            <form action="#">
                <div class="inputGroup">
                    <label for="name">お名前<span>(必須)</span></label>
                    <input type="text" class="textGroup" id="name" name="name">
                </div>
                <div class="inputGroup">
                    <label for="name-kana">お名前(フリガナ)<span>(必須)</span></label>
                    <input type="text" class="textGroup" id="furigana" name="furigana">
                </div>
                <div class="inputGroup">
                    <label for="postal-code">郵便番号<span>(必須)</span></label>
                    <input type="text" class="textGroup" id="postcode_a" name="postcode_a">
                </div>
                <div class="inputGroup">
                    <label for="address">住所<span>(必須)</span></label>
                    <input type="text" class="textGroup" id="address" name="address">
                </div>
                <div class="inputGroup">
                <label for="email">メールアドレス<span>(必須)</span></label>
                <input type="email" id="mail" name="mail" placeholder="123@gmail.com">
                </div>
                <div class="inputGroup">
                <label for="email">メールアドレス確認用<span>(必須)</span></label>
                <input type="email" id="mail" name="mail" placeholder="123@gmail.com">
                </div>
                <div class="inputGroup">
                <label for="password">パスワード<span>(必須)</span></label>
                <input type="password" id="password" placeholder="123456">
                    <p class="passwordNote">※半角英数字20文字以内で入力してください。記号は使用できません。</p>
                </div>
                <div class="inputGroup">
                <label for="password">パスワード確認用<span>(必須)</span></label>
                <input type="password" id="password" placeholder="123456">
                </div>
                <button type="submit">入力確認する</button>
            </form>
        </div>

<!-- 
        <?php
// データベース接続
$pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 
   'ccStaff', 'ccDonuts');
// フォームから送信されたデータを取得
$name = $_POST['name'];
$name_kana = $_POST['furigana'];
$postal_code = $_POST['	postcode_a'];
$address = $_POST['address'];
$email = $_POST['mail'];
$email_confirm = $_POST['mail'];
$password = $_POST['password'];
$password_confirm = $_POST['password'];

// 入力チェック
if (empty($name) || empty($name_kana) || empty($postal_code) || empty($address) || empty($email) || empty($password)) {
    // 必須項目が未入力の場合
    echo "必須項目が未入力です。";
} elseif ($email != $email_confirm) {
    // メールアドレスと確認用メールアドレスが一致しない場合
    echo "メールアドレスが一致しません。";
} elseif ($password != $password_confirm) {
    // パスワードと確認用パスワードが一致しない場合
    echo "パスワードが一致しません。";
} else {
    // パスワードをハッシュ化
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        // データベースに登録
        $stmt = $pdo->prepare('INSERT INTO users (name, name_kana, postal_code, address, email, password) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([$name, $name_kana, $postal_code, $address, $email, $hashed_password]);

        // 登録完了メッセージを表示
        echo "会員登録が完了しました。";
    } catch (PDOException $e) {
        // エラー発生時
        echo "エラーが発生しました: " . $e->getMessage();
    }
}
echo '<form action="register.php" method="post">';
echo '<input type="text" id="name" name="name">';
echo '<input type="text" id="name-kana" name="name-kana">';
echo '<input type="text" id="postal-code" name="postal-code">';
echo '<input type="text" id="address" name="address">';
echo '<input type="email" id="email" name="email">';
echo '<input type="email" id="email-confirm" name="email-confirm">';
echo '<input type="password" id="password" name="password">';
echo '<input type="password" id="password-confirm" name="password-confirm">';
echo '</form>';
?>
  </body>
  </html> -->
</body>
</html>
<?php include 'footer.php'; ?>
  </body>
</html> 