       $(document).ready(function() {
         
      
          $("#emails").blur(function() {
                      
                     var email = $("#emails").val();
                      
                      if (email == "") {

                         $("#email").text("give email");
                      }
                     
             
                      $.post("regEmailValidate.php",
                      {
                        email1:email
                      },
                      function(data,status){
                             
                               
                          if (data == false ) {

                              $("#email").text("email is not found ,give correct email to login");

                           } else {

                                $("#email").text("*");
                           }
                       });
                  });

            $("#clickable").click(function() { 
                     
             var email = $("#emails").val();
             var pass = $("#passes").val();
    
              $.post("loginInputValidate.php",
              {
                  email1: email,
                  pass1: pass
	      },
             function(data1,status) {
                        
                      if (data1 == false) {
                          $("#error").text("you may given wrong information");
                          
                      } else if (data1) {
                          
                           document.location.href = "login.php"; 
                      }

                          
              });
                  

              
             });

                    
     });

 
   /*     $(document).ready(function() {
       alert("ff");
            $("#btnSubmit").button().click(function() {
                    var id = $("#button").val();
                     alert("ffd");
             $.post("delete.php",
                      {
                        id1:id
                      },
                      function(data,status){
                             
                               
                          if (data == "true" ) {
                                   document.location.href = "userInfo.php";
                              $("#email").text("email is not found ,give correct email to login");

                           } else {

                                $("#del").text("not deleted");
                           }
                       });
                  });
     
        });  */       
    





      
