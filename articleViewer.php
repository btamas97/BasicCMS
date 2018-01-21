<?php
  include_once('connect.php');
  include_once('article.php');

  $article = new Article;

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $data = $article->fetch_data($id);
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
            <a class="din-normal logo">Basic<p class="din-bold logo">CMS</a><p class="din-light logo version">v0.1</p>
          </div>
          <div id="login">
            <a id='contribute' class='din-normal contribute'>Contribute</a>
          </div>
        </div>
        <div id="LoginWindow">
          <div class="wrapper">
            <form action=index.php method="post" autocomplete="off" >
              <div class="group">
                <input type="text" name="uname" required="required"/><span class="highlight"></span><span class="bar"></span>
                <label>Username</label>
              </div>
              <div class="group">
                <input type="password" name="pwd" required="required"/><span class="highlight"></span><span class="bar"></span>
                <label>Password</label>
              </div>
              <div class="btn-box">
                <button class="btn btn-submit" name="btn_login" type="submit">Login</button>
                <button class="btn btn-cancel" name="btn_register" type="submit">Registration</button>
              </div>
            </form>
          </div>
        </div>
        <div id="article">
          <div id="headerPic">
            <img src="<?php echo $article['picture']; ?>" alt="thumbnail" >
          </div>
            <h4 href="articleViewer.php?id=<?php echo $article['id']; ?>" class="din-bold Title"> <?php echo $article['title']; ?></h4>
            <p class="din-light DateAuthor"><?php echo $article['author']." - ".$article['date']; ?> </p>
            <p class="din-normal Content"> <?php echo $article['text']; ?> </p>
            <a href="index.php">&larr; Back</a>
        </div>
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
    <?php
  }
  else {
    header('location:index.php');
    exit();
  }

?>
