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
          <?php foreach ($articles as $article) {?>
            <div id="ListElement" class="">
              <div class="titleContentPic">
                <img src="<?php echo $article['picture']; ?>" alt="thumbnail" width="140" height="140">
              </div>
              <div class="titleContent">
                <a href="articleViewer.php?id=<?php echo $article['id']; ?>" class="din-bold Title"> <?php echo $article['title']; ?></a>
                <p class="din-light DateAuthor"><?php echo $article['author']." - ".$article['date']; ?> </p>
                <p class="din-normal Content">
                  <?php echo shorten($article['text']); ?></p>
              </div>
                <li><a href="edit.php?id=<?php echo $article['id']; ?>">Edit</a></li>
                <li><a href="delete.php?id=<?php echo $article['id']; ?>"> Delete</a></li>          
            </div>
          <?php } ?>
        </div>
      </div>
  </body>
</html>
