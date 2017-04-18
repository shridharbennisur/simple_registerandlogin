  function validate() {
      var name = document.form1.fname.value;
      var gender = document.form1.gender.value;
      var city = document.form1.city.value;
      var email = document.form1.email.value;
      var pass = document.form1.pass.value;
      var rpass = document.form1.rpass.value;

      if (name == "" || name == null) {
          document.getElementById("name").innerHTML = "name is required";
          return false;
      }
      if (gender == "" || gender == "null" ) {
          document.getElementById("gender").innerHTML = "gender is required";
          return false;
      }
      if (city == "" || city == "null") {
           document.getElementById("city").innerHTML = "city is required";
           return false;
      }
      if (email == "null" || email == "" || email.search("@") == -1) {
           document.getElementById("email").innerHTML = "email is required ";
           return false;
      } 
     
         
       if ( pass == "null" || pass == "" ) {
          
          document.getElementById("pass").innerHTML = "password is required ";
          return false;
      }
      if( rpass == "" || rpass == "null") {
          document.getElementById("rpass").innerHTML = "conform password is required ";
          return false;
      }
      if( pass != rpass ) {
          document.getElementById("rpass").innerHTML = "give same password to conform ";
          return false;
       }
 else {
        return true;
 }
}

 
/* if (email != "")     { 
       //var x = document.forms["myForm"]["email"].value;
            var atpos = email.indexOf("@");
            var dotpos = email.lastIndexOf(".");
            if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("herelo");

                document.getElementById("email").innerHTML = "not valid email ,give correct format ";
                 return false;
                } 
                
        } */
