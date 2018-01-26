<?php
  include('conncet.php');
  $pdo = connect();
  session_start();
  header('Content-type: text/html; charset=utf8');
  if(isset($_POST['username'], $_POST['password']))
  {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = $pdo->prepare("SELECT * FROM cms_users WHERE username=?");
    $query->bindValue(1,$username);
    $query->execute();
    $num = $query->rowCount();
    if ($num>0) {
      $_SESSION['message']= 'User already exists!';
      header('location: error.php');
    }
    else {
      try {
        $query = $pdo->prepare("INSERT INTO cms_users(username,password) VALUES(:ufield,:pfield)");
        $query->bindValue(':ufield',$username,PDO::PARAM_STR);
        $query->bindValue(':pfield',$password,PDO::PARAM_STR);
        $query->execute();
        $_SESSION['username'] = $username;
        header("location: admin.php");
        exit();
      } catch (PDOException $e) {
        $error = $e->getMessage();
      }
    }
  }
 ?>
