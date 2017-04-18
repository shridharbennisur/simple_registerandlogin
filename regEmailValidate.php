<?php
               use project\model\Model;
               ini_set('display_errors','1'); 
               include 'class.model.php';
               $email=$_POST['email1'];
             //echo $email;
              
              //include 'configuration.php';
               
              $model = new Model();
              $result = $model->checkEmail($email);
              if ($result == "true" ) {
                  echo true;
              } else {
                    echo false;
              }












 
?>
