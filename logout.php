<?php
       ini_set('display_errors','1');
       session_start();
       session_destroy();
       echo "<body style ='background-color:#FFE4C4'></body>";
       echo "<h1 style= 'color: red;text-align: center'>LOGOUT PAGE</h1>";
       echo "<a href = 'loginView.php'>LOGIN</a><br><br>";
       echo "<a href = 'index.html'>HOME PAGE</a><br>";
?>
