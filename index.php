<?php
 session_start();
 include('connect.php');
 include_once('article.php');
 $article = new Article;
 $articles = $article->fetch_all();
 function shorten($stringLong){
   if (strlen($stringLong)>350)
   {
     $string = substr($stringLong,0,350)."...";
     return $string;
   }
   else return $stringLong;
 }

 if($_SERVER['REQUEST_METHOD']=='POST')
  {
    if (isset($_POST['btn_login']))
    {
      require('loginworker.php');
    }
    else if (isset($_POST['btn_register']))
    {
       require('registerworker.php');
     }
  }
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Basic CMS">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <title> Basic CMS </title>
  </head>
  <body>
    <div id="header" name="header">
      <div id="logo_name">
        <a href="index.php" class="din-normal logo">Basic<p class="din-bold logo">CMS</p></a><p class="din-light logo version">v0.1</p>
      </div>
      <div id="login">
        <a id='contribute' class='din-normal contribute'>Contribute</a>
      </div>
    </div>
    <div id="LoginWindow">
      <div class="wrapper">
        <form action=index.php method="post" autocomplete="off" >
          <div class="group">
            <input type="text" name="username" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Username</label>
          </div>
          <div class="group">
            <input type="password" name="password" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Password</label>
          </div>
          <div class="btn-box">
            <button class="btn btn-submit" name="btn_login" type="submit">Login</button>
            <button class="btn btn-cancel" name="btn_register" type="submit">Registration</button>
          </div>
        </form>
      </div>
    </div>
    <?php foreach ($articles as $article) {?>
      <div id="content" class="din-normal">
        <div id="MDlist" class="">
          <div id="ListElement" class="">
            <div class="titleContentPic">
              <img src="img/<?php echo $article['picture']; ?>" alt="thumbnail" class="imgThumbnail" width="150" height="150">
            </div>
            <div class="titleContent">
              <a href="articleViewer.php?id=<?php echo $article['id']; ?>" class="din-bold Title"> <?php echo $article['title']; ?></a>
              <p class="din-light DateAuthor"><?php echo $article['author']." - ".$article['date']; ?> </p>
              <p class="din-normal Content">
                <?php echo shorten($article['text']); ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </body>
  <script>
    document.getElementById("contribute").onclick = showLogin;

    var isShown = false;
    function showLogin() {
      if (isShown == false) {
        document.getElementById('LoginWindow').style.display = "block";
        isShown = true;
        exit();
      }

    if (isShown == true) {
      document.getElementById('LoginWindow').style.display = "none";
      isShown = false;
    }
  }
</script>
</html>
