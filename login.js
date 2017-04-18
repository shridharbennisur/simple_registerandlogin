 function loginValidate() {
        
      var email = document.lform.email.value;
      var pass = document.lform.pass.value;
      if (email == "" || email == "null" || email.search("@") == -1) {
          document.getElementById("email").innerHTML = "email is required ";
          return false;
      }
      if (pass == "" || pass =="null") {
          document.getElementById("pass").innerHTML = "password is required ";
           return false;
      }
         
      
     
      return true;
   }
    
 //doing deletion
 
