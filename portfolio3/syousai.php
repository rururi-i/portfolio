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
    <div class="syousaiFlex">
      <img src="images/normal.png" alt="〇〇1">
      <div class="syousai">
      <!-- nameを入れたい下記 -->
        <span>CCドーナツ 当店オリジナル（5個入り）</span>
        <hr>
         <!-- introductionを入れたい下記 -->
        <p>当店のオリジナル商品、CCドーナツは、サクサクの食感が特徴のプレーンタイプのドーナツです。素材にこだわり、丁寧に揚げた生地は軽やかでサクッとした食感が楽しめます。一口食べれば、口の中に広がる甘くて香ばしい香りと、口どけの良い食感が感じられます。</p>
        <hr>
        <div class="price"><p>税込  ￥1500</p></div>
        <div class="syousaiBtn">
          <select name="cnt">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            </select>
            <p>個</p>
          <input type="button" class="cardBtn" value="カートに入れる">
          <p>♡</p>
        </div>
        
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html> 