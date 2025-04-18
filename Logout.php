<?php
  session_start();
  session_unset();
  session_destroy();

  echo"
  <script>
     alert('You have been logout');
     window.location.href = 'Login and signup.php';
  </script>
  ";
  exit();
?>