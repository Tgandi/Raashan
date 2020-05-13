

		function validateForm(){
			var value = document.getElementById('qw');
           if(value.email.contains("@"))
           {}
           else{
			   alert("invalid email");
			   return false;
		   } 
		
		}
		
		
        function email_check(value) {
			
           if(value.contains("@"))
           {}
           else{
		   location.href('signup.php')
			  // alert("invalid email");
			   return false;
		   }  
        }
    
		function passwordConfirmation(password2){
			var password = document.getElementById('pw');
			//alert(password.value);
			//alert(password2);
			if(password.value!==password2)
			{alert("wrong password");
				return false;}
		}
		
		function confirmPhone(value){
			if(value.length!=10){
				alert("phone is of inappropriate length ");
				}
				if(value[0]!=9&&value[0]!=8&&value[0]!=7)
				{alert("Mobile no invlaid");return false;
				}
			}
		
		


