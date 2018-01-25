<?php
  session_start();
  include('connect.php');
  $pdo = connect();

  if(isset($_GET['id']))
  {
	   $id=$_GET['id'];
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
     $query = $pdo->prepare("DELETE FROM cms_articles WHERE id=:id");
     $query->bindValue(':id', $id, PDO::PARAM_STR);
     $query->execute();
     $_SESSION['message']="Record deleted!"
     header("refresh:0;url=index.php" );
     exit();
  }
?>
