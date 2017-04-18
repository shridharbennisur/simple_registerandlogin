<?php 
      namespace project\regoop;
      use project\controller\Controller;
      use  project\bean\Bean;
      ini_set('display_errors','1');
      include 'controller.php';
      include 'class.model.php';
      session_start();
      echo "<body style = 'background-color:  	#DCDCDC'></body>";
     
    //creating bean class object 
    $bean =new Bean($_POST["fname"], $_POST["gender"], $_POST["city"], $_POST["email"], $_POST["pass"]);

    //creating controller class object
    $controller = new Controller();

     //sending user information to store in database
    $result = $controller->add_User($bean);
    

     //checking that values are stored or not and if stored showing success window
     if ($result == "true" ) { 
 
         echo "<h1>successfully values stored</h1><br><br>";
         echo "<h4>click here to go to home page  <a href = 'index.html'>HOMEPAGE</a><h4>";
         echo "<h4>click here to go to login page  <a href = 'loginView.php'>LOGINPAGE</a><h4>";
           
     } else {

             echo $result;
     }
            
  

 
       
?>




Enter Type:<select name = "type">
          
                      <option value = "">---select asset type---</option>
                      <option value = "Desktop">Desktop</option>
                      <option value = "Laptop">Laptop</option>
                      <option value = "Ipad">Ipad</option>
                      <option value = "Android">Android</option>
                      <option value = "IPhone">Iphone</option>
                      <option value = "Tablet">Tablet</option>
                      </select><span class = "err" id = "type">*</span><br><br>
