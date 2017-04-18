<?php
   
    namespace project\login;
    use project\model\Model;
    use project\controller\Controller;
    ini_set('display_errors','1');
    include 'controller.php';
    include 'class.model.php';
    session_start();
    $email =  $_SESSION["email"];
    $pass =  $_SESSION["pass"];
    $model = new Model();

   //sendind email to model class to get all information

    $result = $model->getAllDataByEmail($email);
    print_r($result);

    if ($result != "false") {

        $_SESSION["name"] = $result->name;
        $_SESSION["gender"] = $result->gender;
        $_SESSION["city"] = $result->city;
        $_SESSION["email"] = $result->email;
        $_SESSION["pass"] = $result->pass;
        header("Location:welcome.php");
            
       
        } else {
            echo $result;
        }
           
     
?>
