<?php
  session_start();
  include('conncet.php');
  $pdo = connect();
  header('Content-type: text/html; charset=utf8');
  if(isset($_POST['username'], $_POST['password']))
  {
    $username = $_POST['username'];

    $query = $pdo->prepare("SELECT * FROM cms_users WHERE username=?");
    $query->bindValue(1,$username);
    $query->execute();
    $num = $query->rowCount();

    if (num==0) {
      $_SESSION['message'] = 'User does not exist! '.$username;
      header('location: error.php');
      exit();
    }
    else {
        $user= $query->fetch(PDO::FETCH_ASSOC);
        if ( password_verify($_POST['password'], $user['password']) ) {
          $_SESSION['username'] = $user['username'];
          header("location: admin.php");
          exit();
        }
        else {
          $_SESSION['message'] = "Wrong password!";
          header('location: error.php');
          exit();
        }
     }
  }
  else {
    $_SESSION['message']= "Post data was not recieved!";
    header('location: error.php');
    exit();
  }
 ?>
