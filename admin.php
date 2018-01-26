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
    <title> Basic CMS - Admin </title>
  </head>
  <body>
    <div id="header" name="header">
      <div id="logo_name">
        <a class="din-normal logo">Basic<p class="din-bold logo">CMS</a><p class="din-light logo version">v1.0</p>
      </div>
      <div id="login">
        <li><a id='contribute' class='din-normal contribute MenuList' href="logout.php">Log out</a><li>
        <li><a id='contribute' class='din-normal contribute MenuList' href="upload.php">Upload</a><li>
        <li><a id='contribute' class='din-normal contribute MenuList' href="admin.php">Main page</a><li>
        <li><p id='contribute' class='din-normal contribute MenuList'> Hi <?php echo $_SESSION['username'];?>!</php>
      </div>
    </div>
      <div id="content" class="din-normal">
        <div id="MDlist" class="">
          <?php foreach ($articles as $article) {?>
            <div id="ListElement" class="">
              <div class="titleContentPic">
                <img src="img/<?php echo $article['picture']; ?>" alt="thumbnail" class="imgThumbnail" width="150" height="150">
              </div>
              <div class="titleContent">
                <a href="articleViewer.php?id=<?php echo $article['id']; ?>" class="din-bold Title"> <?php echo $article['title']; ?></a>
                <p class="din-light DateAuthor"><?php echo $article['author']." - ".$article['date']; ?>
                  <a href="edit.php?id=<?php echo $article['id']; ?>">Edit</a>
                  <a href="delete.php?id=<?php echo $article['id']; ?>"> Delete</a></p>
                <p class="din-normal Content">
                  <?php echo shorten($article['content']); ?></p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
  </body>
</html>
