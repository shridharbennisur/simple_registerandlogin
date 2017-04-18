<?php          
               session_start();
               use project\model\Model;
               ini_set('display_errors','1'); 
               include 'class.model.php';
               //include 'configuration.php';
               $email=$_POST['email1'];
               $pass=$_POST['pass1'];
              $model = new Model();
            
           //checking that user information is valid or not   
            $result = $model->loginValidate($email,$pass); 
                       
            if($result == "true") {
                           
                $_SESSION["email"] = $email;
                $_SESSION["pass"] = $pass;
                echo true;
            } else {
                             
                 echo false;
            }
                
?>
