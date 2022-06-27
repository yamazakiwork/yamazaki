<?php 
  declare(strict_types=1);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="form.css">
  </head>
  <body>
    <div class="wrapper" >
      <div class="backopacity">
        <div class="container">
          <p>好きなこと</p>
          <ul class="likelist">
            <li>趣味</li>
            <li>ゲーム</li>
            <li>漫画</li>
            <li>TV野球観戦</li>
          </ul>
          <div class="game" >
            <p>プレイしてるゲーム :</p>
            <iframe src="../slider/game.html" width="320" height="240" frameborder="0"></iframe>
          </div>
          <div class="anime">
            <p>おすすめアニメ</p>
            <iframe src="../slider/anime.html" width="320" height="240" frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </div>
    <iframe src="../inputchangebox/inputchangebox.html" width="400" height="100" frameborder="0"></iframe>
    <p class="heading">ご質問等ありましたら下記に入力してお問い合わせください。</p>
    <form name="form" action="./confirm.php" method="post" class="form">
      <div class="name">
        <span>お名前（必須）</span>
        <input type="name" id="name" name="name" >
      </div>
      <div class="tel">
        <span>電話番号（記入例:09012345678）</span>
        <input type="tel" name="tel" >
      </div>
      <div class="email">
        <span>Eメールアドレス（必須）</span>
        <input type="email" id="email" name="email" size="35">
      </div>
      <div class="title">
        <span>件名</span>
        <input type="title" name="title" size="48">
      </div>
      <div class="content">
        <span>お問い合わせ内容<br></span>
        <textarea name="content" id="" cols="50" rows="10" placeholder="内容を入力してください"></textarea>
      </div>
      <div class="submit">
        <input id="form_submit" name="form_submit" type="submit" onclick="check">
      </div>
    </form>
    <script src="form.js"></script>
  </body>
</html>


