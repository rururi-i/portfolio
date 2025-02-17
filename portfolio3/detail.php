<!DOCTYPE html>
<html>
<head>
  <title>C.C.Donuts</title>
</head>
<body>
  <?php require 'header.php'; ?>
  <div class="gesuto">
      <p>ようこそ ゲスト様</p>
    </div>

<?php
$pdo = new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8',
    'ccStaff', 'ccDonuts');

// 画像パスの配列（先ほどのコードに追加したもの）
$imagePaths = array(
    1 => 'images/normal.png',
    2 => 'images/tyoko.png',
    3 => 'images/kyarameru.png',
    4 => 'images/plain.png',
    5 => 'images/sitorasu.png',
    6 => 'images/itigokuranti.png',
    7 => 'images/orenziBox.png',
    8 => 'images/siroBox.png',
    9 => 'images/bestBox.png',
    10 => 'images/kurantiBox.png',
    11 => 'images/kurimuBox4.png',
    12 => 'images/kurimuBox.png',
    // 必要に応じて画像パスを追加
);

$sql=$pdo->prepare('select * from products where id=?');
$sql->execute([$_REQUEST['id']]);
foreach ($sql as $row): // foreach文を `:` で開始、 `endforeach` で閉じるとHTMLと混在しやすい
?>
<div class="syousaiFlex">
    <?php
        // 写真の場所を「写真リスト」から探す
        $imagePath = $imagePaths[$row['id']];
    ?>
    <img src="<?php echo htmlspecialchars($imagePath); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
    <div class="syousai">
        <span><?php echo htmlspecialchars($row['name']); ?></span>
        <hr>
        <p><?php echo htmlspecialchars($row['introduction'] ?? $row['description']); ?></p>
        <hr>
        <div class="price"><p>税込  ￥<?php echo htmlspecialchars($row['price']); ?></p></div>
        <div class="syousaiBtn">
            <form action="cart.php" method="post">
                <select name="cnt">
                <?php for ($i=1; $i<=10; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
                </select>
                <p>個</p>
                <input type="submit" class="cardBtn" value="カートに入れる">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
                <input type="hidden" name="name" value="<?php echo htmlspecialchars($row['name']); ?>">
                <input type="hidden" name="price" value="<?php echo htmlspecialchars($row['price']); ?>">
            </form>
            <p><a href="favorite-insert.php?id=<?php echo htmlspecialchars($row['id']); ?>">♡</a></p>
        </div>
    </div>
</div>
<?php
endforeach; // foreach文の終わり
?>
 <?php require 'footer.php'; ?>
</body>
</html>
