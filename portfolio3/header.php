<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="common/reset.css">
    <link rel="stylesheet" href="styles/style.css">

    <title>C.C.Donuts</title>
  </head>
  <body>
    <div>
    <header>
      <div class="headerFlex">
        <nav class="gMenu">
          <input class="menuBtn" type="checkbox" id="menuBtn">
          <label class="menuIcon" for="menuBtn">
            <span class="navIcon"></span>
          </label>
          <ul class="menu">
              <li><a href="http://localhost/ccdonuts/index.php">TOP</a></li>
              <li><a href="http://localhost/ccdonuts/products.php">商品一覧</a></li>
              <li><a href="#">よくある質問</a></li>
              <li><a href="#">問い合わせ</a></li>
              <li><a href="#contactHref">当サイトのポリシー</a></li>
          </ul>
        </nav>
        <!-- <header>
      <div class="headerFlex">
        <div class="">
          <input class="menuBtn" type="checkbox" id="menuBtn">
          <label class="humburger" for="menuBtn">
            <span></span>
          </label>
          <ul class="menu">
            <li><a href="#conceptHref">TOP</a></li>
            <li><a href="#serviceHref">商品一覧</a></li>
            <li><a href="#flowHref">よくある質問</a></li>
            <li><a href="#qaHref">問い合わせ</a></li>
            <li><a href="#contactHref">当サイトのポリシー</a></li>
          </ul>
        </div> -->
        <a href="http://localhost/ccdonuts/index.php"><img class="logo" src="images/logo.png" alt="sanple"></a>
        <a href="http://localhost/ccdonuts/roguin.php"><img class="headerBtn" src="images/roguin.png" alt="sanple"></a>
        <a href="http://localhost/ccdonuts/cart.php"><img class="headerBtn" src="images/kago.png" alt="sanple"></a>
      </div>
      <div class="searchFlex">
        <!-- <a href="#"><img class="searchLogo" src="images/kensaku.png" alt="sanple"></a>
        <input type="text" class="searchBox"> -->
        <form action="search-output2.php" method="post">
        <input type="text" name="keyword">
        <input type="submit" value="検索">
</form>
      </div>
    </header>