<!DOCTYPE html>
<html>
<head>
  <title>C.C.Donuts</title>
</head>
<body>
  <?php include 'header.php'; ?>
  <form action="detail.php" method="post">
  <body>

    <div class="gesuto">
      <p>ようこそ ゲスト様</p>
    </div>
    <h1>商品一覧</h1>
    <!-- <h2>メインメニュー</h2>
    <div class="container">
      <div class="cardContainer">
        <div class="card">
          <a href="#">
            <img src="images/normal.png" alt="〇〇1">
           <span>CCドーナツ 当店オリジナル（5個入り）</span>
           <div class="price"><span>税込  ￥1500</span></div>
           <input type="button" class="cardBtn" value="カートに入れる">
          </a>
        </div>
        <div class="card">
          <a href="#">
            <img src="images/tyoko.png" alt="〇〇1">
            <span>チョコレートデライト（5個入り）</span>
            <div class="price"><span>税込  ￥1600</span></div>
            <input type="button" class="cardBtn" value="カートに入れる">
          </a>
        </div>
        <div class="card">
          <a href="#">
            <img src="images/kyarameru.png" alt="〇〇1">
            <span>キャラメルクリーム（5個入り）</span>
            <div class="price"><span>税込  ￥1600</span></div>
            <input type="button" class="cardBtn" value="カートに入れる">
          </a>
        </div>
        <div class="card">
          <a href="#">
            <img src="images/plain.png" alt="〇〇1">
            <span>プレーンクラシック（5個入り）</span>
            <div class="price"><span>税込  ￥1500</span></div>
            <input type="button" class="cardBtn" value="カートに入れる">
          </a>
        </div>
        <div class="card">
          <a href="#">
            <img src="images/sitorasu.png" alt="〇〇1">
            <span>【新作】サマーシトラス（5個入り）</span>
            <div class="price"><span>税込  ￥1600</span></div>
            <input type="button" class="cardBtn" value="カートに入れる">
          </a>
        </div>
        <div class="card">
          <a href="#">
            <img src="images/itigokuranti.png" alt="〇〇1">
            <span>ストロベリークラッシュ（5個入り）</span>
            <div class="price"><span>税込  ￥1800</span></div>
            <input type="button" class="cardBtn" value="カートに入れる">
          </a>
        </div>
      </div>
    </div>
    <h2>バラエティセット</h2>
    <div class="container">
      <div class="cardContainer">
        <div class="card">
          <a href="#">
            <img src="images/orenziBox.png" alt="〇〇1">
           <span>フルーツドーナツセット（12個入り）</span>
           <div class="price"><span>税込  ￥3500</span></div>
           <input type="button" class="cardBtn" value="カートに入れる">
          </a>
        </div>
        <div class="card">
          <a href="#">
            <img src="images/siroBox.png" alt="〇〇1">
            <span>フルーツドーナツセット（14個入り）</span>
            <div class="price"><span>税込  ￥4000</span></div>
            <input type="button" class="cardBtn" value="カートに入れる">
          </a>
        </div>
        <div class="card">
          <a href="#">
            <img src="images/bestBox.png" alt="〇〇1">
            <span>ベストセレクションボックス（4個入り）</span>
            <div class="price"><span>税込  ￥1200</span></div>
            <input type="button" class="cardBtn" value="カートに入れる">
          </a>
        </div>
        <div class="card">
          <a href="#">
            <img src="images/kurantiBox.png" alt="〇〇1">
            <span>クラッシュボックス（7個入り）</span>
            <div class="price"><span>税込  ￥2400</span></div>
            <input type="button" class="cardBtn" value="カートに入れる">
          </a>
        </div>
        <div class="card">
          <a href="#">
            <img src="images/kurimuBox4.png" alt="〇〇1">
            <span>クリームボックス（4個入り）</span>
            <div class="price"><span>税込  ￥1400</span></div>
            <input type="button" class="cardBtn" value="カートに入れる">
          </a>
        </div>
        <div class="card">
          <a href="#">
            <img src="images/kurimuBox.png" alt="〇〇1">
            <span>クリームボックス（9個入り）</span>
            <div class="price"><span>税込  ￥2800</span></div>
            <input type="button" class="cardBtn" value="カートに入れる">
          </a>
        </div>
      </div>
    </div> -->


<h2>メインメニュー</h2>
<div class="container">
	<div class="cardContainer">
		<?php
		$pdo = new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8',
			'ccStaff', 'ccDonuts');

		// 画像ファイル名の配列 (変更なし)
		$imageFiles = array("normal.png", "tyoko.png", "kyarameru.png","plain.png","sitorasu.png","itigokuranti.png","orenziBox.png","siroBox.png","bestBox.png","kurantiBox.png","kurimuBox4.png","kurimuBox.png", );

		$imageIndex_main = 0;
		$imageRange_main_start = 0;
		$imageRange_main_end = 5;
		$mainMenuCount = 0;
		$mainMenuLimit = 6;


		// 「メインメニュー」カテゴリの商品のみ取得 (カテゴリ絞り込みを**復活**) **(変更)**
		foreach ($pdo->query('select * from products') as $row) { // SQLクエリでカテゴリ絞り込みを復活 **(変更)**

			// メインメニューの表示件数が上限に達したら、ループを抜ける
			if ($mainMenuCount >= $mainMenuLimit) {
				break;
			}


			echo '<div class="card">';
			echo '<a href="detail.php?id=', htmlspecialchars($row['id']), '">';

			// 画像を順番に選択 (範囲指定)
			$currentImageIndex = $imageRange_main_start + ($imageIndex_main % ($imageRange_main_end - $imageRange_main_start + 1));
			$currentImage = $imageFiles[$currentImageIndex];
			$imageIndex_main++;

			echo '<img src="images/' . $currentImage . '" alt="', htmlspecialchars($row['name']), '">';

			echo '<span>', htmlspecialchars($row['name']), '</span>';
			echo '<div class="price"><span>税込 ￥', htmlspecialchars($row['price']), '</span></div>';
			echo '<input type="button" class="cardBtn" value="カートに入れる">';
			echo '</a>';
			echo '</div>';
			echo "\n";

			$mainMenuCount++;
		}
		?>
	</div>
</div>

<h2>バラエティセット</h2>
<div class="container">
	<div class="cardContainer">
		<?php
		$pdo = new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8',
			'ccStaff', 'ccDonuts');


		$imageIndex_variety = 0;
		$imageRange_variety_start = 6;
		$imageRange_variety_end = 11;

		// 「バラエティセット」カテゴリの商品のみ取得 (カテゴリ絞り込みを**復活**) **(変更)**
		foreach ($pdo->query('select * from products') as $row) { // SQLクエリでカテゴリ絞り込みを復活 **(変更)**
			echo '<div class="card">';
			echo '<a href="detail.php?id=', htmlspecialchars($row['id']), '">';

			// 画像を順番に選択 (範囲指定)
			$currentImageIndex = $imageRange_variety_start + ($imageIndex_variety % ($imageRange_variety_end - $imageRange_variety_start + 1));
			$currentImage = $imageFiles[$currentImageIndex];
			$imageIndex_variety++;

			echo '<img src="images/' . $currentImage . '" alt="', htmlspecialchars($row['name']), '">';

			echo '<span>', htmlspecialchars($row['name']), '</span>';
			echo '<div class="price"><span>税込 ￥', htmlspecialchars($row['price']), '</span></div>';
			echo '<input type="button" class="cardBtn" value="カートに入れる">';
			echo '</a>';
			echo '</div>';
			echo "\n";
		}
		?>
	</div>
</div>





    <?php include 'footer.php'; ?>
  </body>
</html> 