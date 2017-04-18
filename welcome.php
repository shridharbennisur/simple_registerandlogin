<?php
     ini_set('display_errors','1');
     session_start();
       echo "<h1 style = 'text-align:center;color:red'>".'WELCOME:'.$_SESSION['name']."</h1>";
       echo "<h4 style = 'text-align:right'><a href = 'logout.php'>LOGOUT</a></h4>";
       echo "<hr style = 'color:blue'>";
       echo "<table style='border-collapse:collapse;width:250px;height:250px' border='2'>";
    // echo "<tr><th>NAME</th><th>Gender</th><th>city</th><th>Email</th></tr>";
       echo "<tr>";
       echo "<th>NAME</th>";
       echo "<td>".$_SESSION["name"]."</td>";
       echo "</tr>";
       echo "<tr>";
       echo "<th>GENDER</th>";
       echo "<td>".$_SESSION["gender"]."</td>";
       echo "</tr>";
       echo "<tr>";
       echo "<th>CITY</th>";
       echo "<td>".$_SESSION["city"]."</td>";
       echo "</tr>";
       echo "<tr>";
       echo "<th>EMAIL</th>";
       echo "<td>".$_SESSION["email"]."</td>";
       echo "</tr>";
       echo "</table>";
       echo "<br>";
       echo "<h2>click here to see user information<a href = 'userInfo.php'>VIEW</h2>";
   
?>
