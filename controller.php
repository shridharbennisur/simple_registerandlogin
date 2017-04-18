<?php 
    namespace project\controller;
     use project\model\Model;
     ini_set('display_errors','1');
    // include_once 'class.model.php';
     //include 'view.php' ;
     
     class Controller { 

            public $error;

          //sending  values to model for storing in the database

         public function add_User($values) {

             
             $model = new Model();
             $result = $model->add_db($values); 

             if( $result == "true") {
                  return $result;

             } else {
                   return $result;
             }
         }
  
        public function login_User($email1) {
               $model = new Model();
              $result = $model->getAllDataByEmail($email1);
              if($result != "false") {
                 return $result;
              } else {
                return "false";
              }
         
         }






     }
?> 


 
