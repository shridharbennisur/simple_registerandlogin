<html>
<head>
     <link rel = "stylesheet" href = "register.css">
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js";>
     </script>
      <script src = "loginAjax1.js"></script>
      <script src = "login.js"></script>
</head>
<body>
       <?php  
               ini_set('display_errors','1');
               session_start();
             if (isset($_SESSION["email"])) {
                        header('Location:welcome.php');
               }
        ?>
  <h1 style = "color: #A0522D;text-align:center">Login Page</h1>
 <span id = "lo"> 
  <div  class="login" >
  <form name = "lform" action = "" method = "post">
  Enter Email: <input type = "text" name = "email" id = "emails" ><span id="email">*</span><br>
  Enter Password : <input type = "password" id = "passes" name = "pass"><span id="pass">*</span><br>
  <h3><span id ="error"></h3></span><br>
  <input class= "clickable" id="clickable" type = "button" value = "login">
  <input type = "reset" value= "reset"><br>
  
   if you are not registerd?<a href="registerView.html">REGISTER</a>
  </form>
  </div>
  </span>



</body>
</html>
