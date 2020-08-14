function validate() {
      	             
      var email = document.Formfeed.mail.value;
      	
         atpos = email.indexOf("@");
         dotpos = email.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.Formfeed.mail.focus() ;
            return false;
         }
         else{
         	alert("validate")
         }
         alert(email)
         return( true );
      }
      function validateinform(){
      
      	 var name = document. forms['FormIn']['inform-nme'].value;
      	 var phone = document.forms['FormIn']['inform-nme'].value;  
      	 var address = document.forms['FormIn']['inform-nme'].value; 
      	 var email = document.forms['FormIn']['inform-mail'].value; 
      	// alert(email);
          atpos = email.indexOf("@");
          dotpos = email.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.Formfeed.inform=mail.focus() ;
            return false;
         }

         else if(phone.length > 10 || phone.length < 10){
            alert("Please enter valid Phone No")
            document.Formfeed.inform-phn.focus() ;
            return false;
         }

         else{
         	alert("validate")
         }
         
         return( true );

      }    
    