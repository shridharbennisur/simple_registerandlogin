     $(document).ready(function() {
          //alert("hrr");
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
                      //  $("#email").text(("Data: " + data + "\nStatus: " + status));
                            
                          if (data == true) {
                              $("#email").text("email allready exit,give new unique");
                           } else {
                                $("#email").text("*");
                           }
                       });
                  });



     });

 
