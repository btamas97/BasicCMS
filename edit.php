<?php
  session_start();
  include('connect.php');
  include_once('article.php');
  header('Content-type: text/html; charset=utf8');
  $pdo = connect();
  if (!isset($_SESSION['username'])) {
    header('location: index.php');
  }
  $article = new Article;

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $data = $article->fetch_data($id);

    if(isset($_POST['btn_save']))
    {
      $title =  $_POST['title'];
      $author = $_SESSION['username'];
      $content = $_POST['content'];
      echo $id.' '.$title.' '.$author.' '.$content;
      if (isset($_FILES['picture']['name'])&&($_FILES['picture']['name']!=""))
  	   {
         $file = $data['picture'];
         if(is_file($file)){
         unlink($file);
         }
         $picture=trim($_FILES['picture']['name']);
         $picture=rand().$picture;
         move_uploaded_file($_FILES['picture']['tmp_name'],"img/".$picture);

         $sql = "UPDATE cms_articles SET title=?, author =?, content=?, picture =? WHERE id=?";
         $pdo->prepare($sql)->execute([$title,$author,$content,$picture,$id]);

         header('location: admin.php');
         exit();
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
        <a class="din-normal logo">Basic<p class="din-bold logo">CMS</a><p class="din-light logo version">v0.1</p>
      </div>
      <div id="login">
        <li><a id='contribute' class='din-normal contribute MenuList' href="logout.php">Log out</a><li>
        <li><a id='contribute' class='din-normal contribute MenuList' href="upload.php">Upload</a><li>
        <li><a id='contribute' class='din-normal contribute MenuList' href="admin.php">Main page</a><li>
        <li><p id='contribute' class='din-normal contribute MenuList'> Hi <?php echo $_SESSION['username'];?>!</php>
      </div>
    </div>
    <div id="uploadEditForm" class="din-normal">
      <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
        <div class="group">
          <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
          <input type="text" name="title" value="<?php echo $data['title']; ?>" required="required"/><span class="highlight"></span><span class="bar"></span>
          <label>Title</label>
        </div>
        <div class="group">
          <textarea row="20" cols="50" name="content" placeholder="Article"> <?php echo $data['content']; ?></textarea><span class="highlight"></span><span class="bar"></span>
          <label>Article</label>
        </div>
        <div class="group">
            <img src="img/<?php echo $data['picture']; ?>" alt="thumbnail" width="140" height="140">
          <input type="file" name="picture" required="required"/><span class="highlight"></span><span class="bar"></span>
        </div>
        <div class="btn-box">
          <button class="btn btn-submit" name="btn_save" type="submit">Save Modifications</button>
        </div>
      </form>
    </div>
  </body>
</html>
<?php  } ?>
