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
	<table>
	<div class="cardContainer">
<?php
$pdo = new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 'ccStaff', 'ccDonuts');

// 画像ファイル名ではなく、商品IDをキーとして画像パスを格納する連想配列
$imagePaths = array(
    1 => 'images/normal.png', // 商品ID => 画像パス
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
    // ... 他の商品IDと画像パスの組み合わせ
);

$sql = $pdo->prepare('SELECT * FROM products WHERE name LIKE ?');
$sql->execute(['%' . $_REQUEST['keyword'] . '%']);

foreach ($sql as $row) {
    $productId = $row['id']; // 商品IDを取得

    

    echo '<div class="card">';
    echo '<a href="#">';
	// 商品IDに対応する画像パスが存在するか確認
    if (isset($imagePaths[$productId])) {
        $imagePath = $imagePaths[$productId];
        echo '<img src="' . $imagePath . '" alt="Product ' . $row['name'] . '">';
    } else {
        echo '画像が見つかりません。'; // または代替画像を表示
    }
    echo '<span>', htmlspecialchars($row['name']), '</span>';
    echo '<div class="price"><span>税込 ￥', htmlspecialchars($row['price']), '</span></div>';
    echo '<input type="button" class="cardBtn" value="カートに入れる">';
    echo '</a>';
    echo '</div>';
    echo "\n";
}
?>
</div>
<?php require 'footer.php'; ?>
</body>
</html>
