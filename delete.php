<?php
       namespace project\model; 
      ini_set('display_errors','1');
       include 'class.model.php';
       
       ini_set('display_errors','1');
       echo "<body style = 'background-color: #A9A9A9'></body>";
       $id = $_REQUEST["id"];
       
       $model = new Model();
        
       //sending id value to model class to delete the information
       
       $result = $model->deleteUserInform($id);
        
       if ( $result == "true") {
           echo "<h1 style = 'color: #8B0000'>deleted succesfully</h1>";
           echo "<h2>click here see user information<a href = 'userInfo.php'>VIEW</a> </h2>";
           echo "<h2>click here goto homepage<a href = 'index.html'>HOMEPAGE</a> </h2>";
       } else {
             echo $result;
              header("location:update.php");
       }   
      
       /*
           namespace project\model; 
     
       include 'class.model.php';
       
       ini_set('display_errors','1');
       echo "<body style = 'background-color: #A9A9A9'></body>";
       $id = $_REQUEST["id1"];
       
       $model = new Model();
        
       //sending id value to model class to delete the information
       
       $result = $model->deleteUserInform($id);
        
       if ( $result == "true") {
                 echo "true";
       } else {
             echo "false";
             
       }   
                
        */ 
?>
