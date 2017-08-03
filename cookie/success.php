<?php
  header('Cache-Control: no-cache');

  $user = $_COOKIE['user'];
  $pass = $_COOKIE['pass'];

  if(strcmp($user,'kaeru') == 0 && strcmp($pass,'pass') == 0) {
    echo '<p>Cookie!!</p>';
  } else {
      header('Location: fail.html');
  }

?>
