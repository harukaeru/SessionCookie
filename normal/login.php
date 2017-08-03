<?php
  $user = $_POST['user'];
  $pass = $_POST['pass'];

  if(strcmp($user,'kaeru') == 0 && strcmp($pass,'pass') == 0) {
      header('Location: success.php');
  } else {
      header('Location: fail.html');
  }
?>

