<?php 
require_once('data.php');
require_once('menu.php');
?>

<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ハリネズミフード</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link rel="stylesheet" href="responsive.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
</head>
<body>

<header>

 <div class="header-title">
 <div  id="fanhui"  class='header-logo' >ハリネズミフード注文サイト</div>
</div>
 <div class="header-right">
          <a href="#" class="login" id='login-show'><font color='#ffffff'>ログイン</font></a>
		    <a href="index1.php" id="login-show"><font color='#ffffff'>サイトについて</font></a>
			  <a href="#" ><font color='#ffffff'>お知らせ</font></a>
 </div>
 </header>
 
 
  <div class="signup-modal-wrapper" id='signup-modal'>
  
  <div class="modal">
  <div class='close-modal'>
        <i class="fa fa-2x fa-times"></i>
      </div>
  
      <div id="signup-form">
        <h2>Emailで新規登録</h2>
        <form action="#">
          <input class="form-control" type="text" placeholder="メールアドレス">
          <input class="form-control" type="password" placeholder="パスワード">
          <div id="submit-btn">新規登録</div>
        </form>
      </div>
    </div>
	
  </div>
 
  <div class="login-modal-wrapper" id='login-modal'>
    
    <div class="modal">
	<div class='close-modal'>
        <i class="fa fa-2x fa-times"></i>
      </div>
	
      <div id="login-form">
        <h2>Emailログイン</h2>
        <form action="#">
          <input class="form-control" type="text" placeholder="メールアドレス">
          <input class="form-control" type="password" placeholder="パスワード">
          <div id="submit-btn">ログイン</div>
        </form>
      </div>
    </div>
    
    
  </div>
  
  
   <div class="top-wrapper">
      <div class="container">
        <h1>大好きなハリネズミにご飯を選んであげましょ.</h1>     
        <p>ユーザー登録すればポイントがもらえる</p>
        <p></p>
        <div class="btn-wrapper">
          <a href="#" class="btn signup signup-show"><font color='#ffffff'>新規登録はこちら</font></a>
          <p>or sign up with</p>
          <a href="#" class="btn facebook"><span class="fa fa-facebook"></span><font color='#ffffff'>Facebookで登録</font></a>
          <a href="#" class="btn twitter"><span class="fa fa-twitter"></span><font color='#ffffff'>Twitterで登録</font></a>
        </div>
      </div>
    </div>
  <div class="menu-wrapper container">
    <h1 class="logo"></h1>
    <h3>メニュー<?php echo Menu::getCount() ?>品</h3>
    <form method="post" action="confirm.php">
      <div class="menu-items">
        <?php foreach ($menus as $menu): ?>
          <div class="menu-item">
            <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
            <h3 class="menu-item-name">
              <a href="show.php?name=<?php echo $menu->getName() ?>">
                <?php echo $menu->getName() ?>
              </a>
            </h3>
            <?php if ($menu instanceof Drink): ?>
              <p class="menu-item-type"><?php echo $menu->getType() ?></p>
            <?php else: ?>
              <?php for ($i=0; $i<$menu->getSpiciness(); $i++): ?>
                <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/chilli.png" class='icon-spiciness'>
              <?php endfor ?>
            <?php endif ?>
            <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?>（税込）</p>
            <input type="text" value="0" name="<?php echo $menu->getName() ?>">
            <span>個</span>
          </div>
        <?php endforeach ?>
      </div>
      <input type="submit" value="注文する">
      </form>
     </div>
    </div>
  
   <div class="message-wrapper">
      <div class="container">
        <div class="heading">
          <h2 class="language-title">ハリネズミちゃん皆大食いですよ、量的に大丈夫かもう一度確認してください</h2>
		  <p class="language-text">野生のハリネズミは体重の3分の1の量の食事をとると言われてます<br>
		  飼育下では1日に30～70カロリーが適切だ</p>
	   
        </div>
     </div>  
     </div>
   <footer>
      
        <img src="img/logohari2.jpg">     
      </div>
	  <div class="footer-list">
        <ul>
          <li>会社概要</li>
          <li>採用</li>
          <li>お問い合わせ</li>
        </ul>
       
    </footer>
	<script  type="text/javascript" src="script.js"></script>
</body>
</html>
