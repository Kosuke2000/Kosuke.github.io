<?php require_once('data.php') ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylesheet.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" />
    <title>いいざぁ〜福井</title>
  </head>
  <body>
    <header>
      <div class="header-container">
        <div class="btn-wrapper">
          <a href="#">会員登録</a>
        </div>
      </div>
    </header>
    <div class=top-wrapper>
      <div class=top-wrapper-container>
          <h1>いいざぁ〜福井</h1>
          <div class=top-wrapper-sentence>
            <p>いいざあ〜福井は、福井県のいいざあ〜＝いいね！なところを毎週紹介しています。</p>
            <p>福井県は全国幸福度ランキング4回連続1位を獲得するぐらいいいざあ〜な県なんです。</p>
            <p>皆さんに福井のいいざあ〜なところをおすそわけすることにしましょう！</p>
          </div>
      </div>
    </div>
    <div class=food-wrapper>
      <div class=first-end-sentence>
        <p>　今回ご紹介するのは、な、な、なんと、福井の3大いいざあ〜グルメ。</p>
        <p>山と海、田んぼに囲まれた福井県にはおいしい食べ物がいっぱいあります。</p>
        <p class=last-sentence>その中でも、特に(美食民族)福井県民に人気のある三品をご紹介します！</p>
      </div>
      <?php foreach ($foods as $food): ?>
        <div class=food-container>
          <h2><?php echo $food->hello();?></h2>
          <div class=food-image>
            <img src="<?php echo $food->getImage(); ?>"　>
          </div>
          <p><?php echo $food->getSentence(); ?></p>
        </div>
      <?php endforeach ?>
      <div class=first-end-sentence>  
        <p>おわり</p>
      </div>
    </div>
    <div class=message-wrapper>
      <div class=message-wrapper-container>
        <div class=message-message>
          <p>記事の向上のためご協力ください！</p>
        </div>
        <form method="post" action="sent.php">
          <div class=message-form>
            
          <p>評価</p>
            <select name="estimate" id="">
              <option value="未選択">選択してください</option>
              <?php 
              for($i = 1; $i <= 5; $i ++) {
                echo "<option value='{$i}'>☆$i</option>";
              } 
              ?>
            </select>

            <p>感想</p>
            <textarea rows="10" cols="60">ここに記入してください</textarea>
            
            <input class=contact type="submit" value="送信">
          </div>
        </form>

      </div>
    </div>
    <footer>
      <div class=footer-conteiner>
        <div class=footer-left>
          <div class=footer-img>
            <img src="https://4.bp.blogspot.com/-HKsGFBq_vx8/VUIHlJKYbII/AAAAAAAAtPo/GCQAjYtluPM/s800/4_chuubu6_fukui.png" alt="">
          </div>
          <p>いいざぁ〜福井</p>
        </div>
        <div class=footer-right>
          <div class=footer-right-btn>
            <p>この記事をシェアする<i class="fab fa-twitter-square"></i></p>

          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
