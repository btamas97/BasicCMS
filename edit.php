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

    if (isset($_POST['title']))
    {
      $title= $_POST['title'];
      $query = $pdo->prepare("UPDATE cms_articles SET title=:title WHERE id=:id");
      $query->bindValue(':title',$title,PDO::PARAM_STR);
      $query->bindValue(':id',$id,PDO::PARAM_STR);
      $query->execute();
    }

    if (isset($_POST['author']))
    {
      $author=$_SESSION['username'];
      $query = $pdo->prepare("UPDATE cms_articles SET author=:auth WHERE id=:id");
      $query->bindValue(':auth',$author,PDO::PARAM_STR);
      $query->bindValue(':id',$id,PDO::PARAM_STR);
      $query->execute();
    }

    if (isset($_POST['content']))
    {
      $article=$_POST['content'];
      $query = $pdo->prepare("UPDATE cms_articles SET text=:content WHERE id=:id");
      $query->bindValue(':content',$content,PDO::PARAM_STR);
      $query->bindValue(':id',$id,PDO::PARAM_STR);
      $query->execute();
    }

    if (isset($_FILES['picture']['name'])&&($_FILES['picture']['name']!=""))
	   {
         $query = $pdo->prepare("SELECT picture FROM cms_articles WHERE id=:id");
         $query->bindValue(':id', $id, PDO::PARAM_STR);
         $query->execute();
         $rows =$query->rowCount();
         if (  $rows == 0  ){
           $_SESSION['message'] = "No such record!";
         }
         else {
           $file= $query->fetch(PDO::FETCH_ASSOC);
           if(is_file($file)){
              unlink($file);
           }
         }
         $picture=trim($_FILES['picture']['name']);
         $picture=rand().$picture;
         move_uploaded_file($_FILES['picture']['tmp_name'],"img/".$picture);

         $query = $pdo->prepare("UPDATE cms_articles SET text=:picture WHERE id=:id");
         $query->bindValue(':picture',$picture,PDO::PARAM_STR);
         $query->bindValue(':id',$id,PDO::PARAM_STR);
         $query->execute();
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
      <form action="edit.php" method="post" autocomplete="off" enctype="multipart/form-data">
        <div class="group">
          <input type="text" name="title" value="<?php echo $data['title']; ?>" required="required"/><span class="highlight"></span><span class="bar"></span>
          <label>Title</label>
        </div>
        <div class="group">
          <textarea row="10" cols="50" name="content" placeholder="Article"> <?php echo $data['text']; ?></textarea><span class="highlight"></span><span class="bar"></span>
        </div>
        <div class="group">
            <img src="img/<?php echo $article['picture']; ?>" alt="thumbnail" width="140" height="140">
          <input type="file" name="picture" required="required"/><span class="highlight"></span><span class="bar"></span>
        </div>
        <div class="btn-box">
          <button class="btn btn-submit" name="btn_login" type="submit">Save Modifications</button>
        </div>
      </div>
    </form>
  </body>
</html>
<?php } ?>
