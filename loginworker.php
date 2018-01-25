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
      $_SESSION['message'] = 'User does not exist!';
    }
    else {
        $user= $query->fetch(PDO::FETCH_ASSOC);
        echo $user['username'];
        if ( password_verify($_POST['password'], $user['password']) ) {
          $_SESSION['username'] = $user['username'];
          header("location: admin.php");
          exit();
        }
        else {
          $_SESSION['message'] = "Wrong password!";
        }
     }
  }
  else {
    $_SESSION['message']= "nem kaptam post értéket";
  }
 ?>