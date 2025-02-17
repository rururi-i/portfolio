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
    <div class="kaikei">
        <p>現在 商品2点</p>
        <p>ご注文小計：税込 ¥5,000</p>
        <input type="button" class="cardBtn" value="購入確認へすすむ">
    </div>
   
    

    <div class="kaikeiFlex">
        <img src="images/normal.png" alt="〇〇1">
        <div class="kaikeiSyousai">
          <span>CCドーナツ 当店オリジナル（5個入り）</span>
         
          <hr>
          <div class="priceFlex">
            <div class="price">
                <p>税込  ￥1500</p>
            </div>
            <div class="syousaiBtn">
                <p>数量</p>
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
            </div>    
          </div>
          <div class="keisanBtnFlex">
            <input type="button" class="keisanBtn" value="再計算">
            <button id="deleteButton">削除</button>
          </div>  
            <br><hr>
        </div>
      </div>

      <div class="kaikei">
        <p>現在 商品2点</p>
        <p>ご注文小計：税込 ¥5,000</p>
        <input type="button" class="cardBtn" value="購入確認へすすむ">
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html> 