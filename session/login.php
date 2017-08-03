<?php
  $user = $_POST['user'];
  $pass = $_POST['pass'];

  if(strcmp($user,'kaeru') == 0 && strcmp($pass,'pass') == 0) {
      setcookie("sessionid", '1');
      // setcookie("sessionid", '1', null, '/session', null, null, true);
      header('Location: success.php');
  } else {
      header('Location: fail.html');
  }
?>

