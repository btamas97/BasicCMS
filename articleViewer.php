<?php
  session_start();
  include('connect.php');
  include_once('article.php');
  $article = new Article;

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $data = $article->fetch_data($id);

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
   else { $error = "I didn't get posted data :c";}
    ?>
    <html>
      <head>
        <meta charset="utf-8">
        <meta name="description" content="Basic CMS">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <title> Basic CMS - Article </title>
      </head>
      <body>
        <div id="header" name="header">
          <div id="logo_name">
            <a href="index.php" class="din-normal logo">Basic<p class="din-bold logo">CMS</p></a><p class="din-light logo version">v1.0</p>
          </div>
          <div id="login">
            <?php if (isset($_SESSION['username'])) { ?>
              <li><a id='contribute' class='din-normal contribute MenuList' href="logout.php">Log out</a><li>
              <li><a id='contribute' class='din-normal contribute MenuList' href="upload.php">Upload</a><li>
              <li><a id='contribute' class='din-normal contribute MenuList' href="admin.php">Main page</a><li>
              <li><p id='contribute' class='din-normal contribute MenuList'> Hi <?php echo $_SESSION['username'];?>!</php>
          <?php  }
            else{ ?>
              <a id='contribute' class='din-normal contribute'>Contribute</a>
          <?php  } ?>
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
        <div id="content" class="din-normal">
          <div id="articlePicture">
              <img src="img/<?php echo $data['picture']; ?>" alt="thumbnail" class="img">
          </div>
          <div id="article">
            <p class="din-bold Bigtitle"> <?php echo $data['title']; ?></p>
            <p class="din-light DateAuthor ArticleDateAuthor"><?php echo $data['author']." - ".$data['date']; ?>
              <?php if (isset($_SESSION['username'])){ ?>
                <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $data['id']; ?>"> Delete</a>
            <?php  } ?>
            </p>
            <p class="din-normal Content"> <?php echo $data['content']; ?> </p>
            <br/>
            <a href="index.php">&larr; Back</a>
          </div>
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
    echo "<script> alert('error getting id')</script>";
    header('location:index.php');
    exit();
  }
?>
