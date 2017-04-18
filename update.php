<html>
<head>
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js";>
     </script>
   <script src = "registerAjax.js"></script>
    <script src = "register.js"></script>
 <style>
    span {
           color:red;
    }
  </style>
</head>
<body>
<?php
         use project\model\Model;
         ini_set('display_errors','1');
         //include 'configuration.php';
         include 'class.model.php';
         $msg = "";
         $id = $_REQUEST['id'];
         $model = new Model();
  
         if (isset($_REQUEST["submit"])) {
             
             $name = $_POST["fname"];
             $gender = $_POST["gender"];
             $city = $_POST["city"];
             $email = $_POST["email"];
             $pass = $_POST["pass"];
        
      //sending to model class to update the information
       
             $result = $model->update_UserinformByID($name, $gender, $city, $email, $pass, $id);
        
     //checking wether the user information is updated or not

             if ( $result == "true") {

                 $msg .="updated sucesfully";
      
             } else {
       
                   $msg.="not updated";  
             } 
         }
      //sending to model class to fetch the all information by using id

         $row = $model->getUserInformById($id); 
        




 ?>
     <h1 style ="text-align:center;color:red">update page </h1>

     <div style = 'text-align:center;'>

      <fieldset>

      <legend style = 'color:blue'>update information</legend>

     <form name = "form1" method = "post" action = "" onsubmit = "return validate()">

     Enter Name: <input type = "text" name = "fname" placeholder = "enter your name" value="<?php echo $row["name"];?>"><span id="name">*</  span><br><br>

     Gender : Male<input type = "radio" name = "gender" value = "male" <?php if($row["gender"] == "male") {

echo " checked";}?>> Female<input type = "radio" name = "gender" value = "female" <?php if($row["gender"] == "female") { echo " checked";}?>><span  id="gender">*</span><br><br>

     Enter city: <select name = "city">
                <option value = "">---enter the city ----</option>
	        <option value = "gulbarga" <?php  echo (isset($row['city'])&&($row['city']=='gulbarga')?' selected="selected"':'');?> >gulbarga</option>
                <option value = "bangalore" <?php  echo (isset($row['city'])&&($row['city']=='bangalore')?' selected="selected"':'');?> >bangalore</option>
                <option value = "mysore"  <?php  echo (isset($row['city'])&&($row['city']=='mysore')?' selected="selected"':'');?>>mysore </option>
                </select><span id="city">*</span><br><br>

      
     Enter email: <input type = "text" name = "email" id="emails" value ="<?php echo $row["email"];?>"><span id="email">*</span><br><br>

    Enter password: <input type = "password" name = "pass" value = "<?php echo $row["pass"];?>"><span id="pass">*</span><br><br>

    Conform password: <input type = "password" name = "rpass" placeholder="give conform password"><span id="rpass">*</span><br><br>

                       <input type = "submit" value = "EDIT" name = "submit">

                       <a href = "userInfo.php"><b>VIEW</b></a>

    </form>
</fieldset>
   </div>
             <?php echo "<h1>".$msg."</h1>"?>
</body>
</html>
