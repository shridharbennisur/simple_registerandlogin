<html>
<head>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js";>
     </script>
<script src="loginAjax1.js">
    
 </script>
</head>
<body>
<?php 
    
    ini_set('display_errors','1');
     include("configuration.php");

     if (!$conn) {
         echo "error ".mysqli_connect_error();

     } else {

           //values retriving

           echo "<h1 style='color:red;text-align: center'>Users information</h1>";
           
           echo "<h3 style = 'color: #FF69B4;text-align:right'><a href = 'index.html'>HOMEPAGE</h3>";
           echo "<h3 style = 'color: #FF69B4;text-align:right'><a href = 'logout.php'>LOGOUT</h3>";
           echo "<hr style = 'color: blue'>"; 	 
           $sel = "SELECT * FROM View";

           $result = mysqli_query($conn, $sel);

           echo "<table style = 'border-colapse:colapse' border = '2' >
                 <tr><th>ID</th><th>Name</th>
                 <th>Gender</th><th>City</th>
                 <th>Email</th>
                 <th>Update</th>
                 <th>Delete</th></tr>";

           if (mysqli_num_rows($result)>0) { 

               while ($row = mysqli_fetch_assoc($result)) {
                   echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>  ".$row["gender"]."</td><td>"." ".$row["city"]."</td><td>".$row["email"]." "."</td><td>".'<a href = "update.php?id='.$row['id'].'">'."update</a>"."</td><td>".'<a href = "delete.php?id='.$row['id'].'">'."delete</a>"."</td><td>"."<button id='button' value ='d'>Delete</button>"."</td></tr>"."<span id= 'del'>*</span>";
               }
          echo "</table>";
           } else {
                 echo "0 records";
           }
    }

    mysqli_close($conn);
   
          echo "<h4><a href = 'welcome.php'>welcome page</a></h4>";



  
    
?>
</body>
</html>
