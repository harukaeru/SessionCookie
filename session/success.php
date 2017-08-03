<?php
  header('Cache-Control: no-cache');

  $sessionid = $_COOKIE['sessionid'];

  if(strcmp($sessionid,'1') == 0) {
    echo '<p>Session!!</p>';
  } else {
      header('Location: fail.html');
  }

?>
