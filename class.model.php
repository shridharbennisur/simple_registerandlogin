<?php
namespace project\model; 
use  project\bean\Bean;
ini_set('display_errors', '1');
include 'configuration.php';
include 'regBean.php';
     
  

    class Model {
        public $conn;
        public $error="";

        public function __construct() {
             
            $this->conn = mysqli_connect(SERVER_NAME, USER_NAME ,PASSWORD, DATABASE_NAME);

            if (!$this->conn) {

               return  $this->error .="connection not established".mysqli_connect_error();
             }
        }

    
        /** 
         * Function to store the user information in database
         *
         *@parameter bean class object 
         *
         *@return string -> true(values stored) 
                            false(something wrong ,not stored)
         */  
       
        public function add_db($user) {

            $insert =  "INSERT INTO View (name, gender, city, email, pass) VALUES ( '".$user->name."', '".$user->gender."', '".$user->city."', '".$user->email."', '".$user->pass."') ";

            if ( mysqli_query($this->conn, $insert)) {

                $this->error.= "true";

            } else {

                $this->error .="not stored in db".mysqli_connect_error();
            }

            return $this->error;
         }


  
       /** 
         *Function to get all data from database by using email id
         *
         *@param email id 
         *
         *@return type is bean class object ,values of users sending
         */

        public function getAllDataByEmail($email1) {
            
            $name =  $gender = $city = $email =  $pass  = "";
            $sel = "SELECT * FROM View WHERE email = '$email1'";
        
            $result = mysqli_query($this->conn,$sel); 

            if (mysqli_num_rows($result)>0) { 

                while ($row=mysqli_fetch_assoc($result)) {
              
                    $name = $row["name"];
        
                    $gender = $row["gender"];
                    $city = $row["city"];
                    $email = $row["email"];
                    $pass = $row["pass"];
                }
            } else {

                  $this->error.="false";
                  return $this->error;
           }
              
      
           $bean = new Bean($name, $gender, $city, $email, $pass );
           return $bean;  
          

        }

        /**
         *Function to Update the user information 
         *
         *@param name,gender,city,email,pass,id
         *@return type is string - true(values stored) 
                            false(something wrong ,not stored)
         */  
       
        
        public function update_UserinformByID($name, $gender, $city, $email, $pass, $id) {
             $msg="";

             $update = "UPDATE View SET name = '$name', gender = '$gender',city = '$city', email = '$email', pass = '$pass' WHERE id = $id ";
          
           if (mysqli_query($this->conn,$update)) {
               $msg .="true";
     
           } else {

                 $msg .= "false ";
           }    
           return $msg; 
        }
       
       /** 
        *Function to get user information by thier id
        *@param is id
        *@return type is string - true(values stored) 
                            false(something wrong ,not stored)
         */  
        
        
        public function getUserInformById($id) {
            
             $row;
             $sel = "SELECT * FROM View WHERE id = $id";
             $result = mysqli_query($this->conn, $sel);
             $row = mysqli_fetch_assoc($result);  
            return $row;
        } 
      

      /**
       *Function to delete user information by their id
       *@param is id
       *@return type is string - true(values stored) 
                            false(something wrong ,not stored)
       */  
        
       
       public function deleteUserInform($id) { 

           $msg = "";
           $delete = "DELETE FROM View WHERE id = $id";
           if (mysqli_query($this->conn,$delete)) {
               $msg .="true";
           } else {
                 $msg .="error.".mysqli_connect_error($this->conn);
           }
              return $msg;
        }
        
       /**
        *Function to validating user for login
        *@param email ,password
         *@return type is string - true(values stored) 
                            false(something wrong ,not stored)
       */  
        
       public function loginValidate($email,$pass) {

          $msg="";
          $sel="SELECT * FROM View WHERE email='$email' and pass='$pass'";
          $result=mysqli_query($this->conn,$sel);
          $row=mysqli_num_rows($result);
          if ($row>0) {

               $msg .= "true";

          } else {

                $msg .= "false";
          }

          return $msg;   
       }
       
       /**
        *Function to checking wether email is exist or not
        * @param email 
        *@return type is string - true(values stored) 
                            false(something wrong ,not stored)
       */   

      public function checkEmail($email) {

         $msg="";
         $sel = "SELECT * FROM View WHERE email = '$email '";
         $result = mysqli_query($this->conn,$sel);
         $row = mysqli_num_rows($result);
         if ($row>0) {
              $msg .= "true";

          } else {

                $msg .= "false";
          }

          return $msg;   
       }
          
         /**
          *Function to get all users information
          */
          
        public function getAllUsers() {
          
          
           $sel = "SELECT * FROM View " ;
           $result = mysqli_query($this->conn, $sel);
           
           $row = mysqli_fetch_assoc($result);
            if( $row >0) {
                 while ($rows=mysqli_fetch_assoc($result)) {
                        
                  }
            }
        }    
    } 
?>


