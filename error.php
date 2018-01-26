<?php
    session_start();
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
    <div id="content">
      <div id="article">
        <p class="din-bold Title"> An Error Occured: </p>
        <p class="din-bold"> <?php echo $_SESSION['message']; ?> </p>
        <small><a href="index.php"> Vissza a kezdőlapra </a></small>
      </div>
    </div>
  </body>
