<?php
  session_start();
  include_once('connect.php');
  if (!isset($_SESSION['logged_in'])); {
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
      <div id="MDlist" class="">
      <div id="ListElement" class="">
        <div class="titleContentPic">
          <img src="img/placeholder.png" alt="placeholder" width="140" height="140">
        </div>
        <div class="titleContent">
          <a class="din-bold Title">Lorem ipsum dolor sit amet</a>
          <p class="din-light DateAuthor">Baráth Tamás- 2018.01.21</p>
          <p class="din-normal Content">Fusce id turpis efficitur, luctus dolor et, faucibus massa. Vestibulum lacinia vitae ex id elementum. Nulla gravida sapien mollis eros pellentesque, sit amet dignissim velit feugiat. Morbi justo quam, feugiat vel elementum sed, rhoncus vitae turpis. In lacinia, orci vitae vulputate aliquet, risus sem lacinia nulla, non vestibulum purus lacus non leo. Nulla facilisi. Phasellus eget gravida nisi... </p>
        </div>
      </div>
    </div>
  </body>
</html>
