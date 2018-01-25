<?php
  session_start();
  include('connect.php');

  if (!isset($_SESSION['username'])) {
    header('location: index.php');
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
        <a class="din-normal logo">Basic<p class="din-bold logo">CMS</a><p class="din-light logo version">v0.1</p>
      </div>
      <div id="login">
        <li><a id='contribute' class='din-normal contribute' href="admin.php">Main page</a><li>
        <li><a id='contribute' class='din-normal contribute' href="upload.php">Upload</a><li>
        <li><p id='contribute' class='din-normal contribute'> Hi <?php echo $_SESSION['username'];?>!</php>
        <li><a id='contribute' class='din-normal contribute' href="logout.php">Log out</a><li>
      </div>
    </div>
    <div id="content" class="din-normal">
      <form action="upload.php" method="post" autocomplete="off" enctype="multipart/form-data">
        <div class="group">
          <input type="text" name="title" required="required"/><span class="highlight"></span><span class="bar"></span>
          <label>Title</label>
        </div>
        <div class="group">
          <textarea row="10" cols="50" name="article" placeholder="Article"> </textarea><br><span class="highlight"></span><span class="bar"></span>
        </div>
        <div class="group">
          <input type="file" name="picture" required="required"/><span class="highlight"></span><span class="bar"></span>
        </div>
        <div class="btn-box">
          <button class="btn btn-submit" name="btn_login" type="submit">Upload</button>
        </div>
      </div>
   </form>
  </body>
</html>
