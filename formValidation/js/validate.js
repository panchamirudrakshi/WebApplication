$(document).ready(function() {
		
	 $("#username").parent().append("<span class =\"info\" id=\"userinf\"> Username must have only letters.</span>")
	 $("#userinf").hide();
	 $("#username").parent().append("<span class =\"ok\" id=\"userk\"> OK! </span>")
	 $("#userk").hide(); 
	 $("#username").parent().append("<span class =\"error\" id=\"usererro\"> ERROR!!!</span>")
	 $("#usererro").hide();
      $("#username").focus(function(){
		   $("#usererro").hide();
		   $("#userk").hide();
           $("#userinf").show();
			   
	  });
	  
	  $("#username").blur(function(){
		   $("#userinf").hide();
		   var mm=$("#username").val();
		   var un= '^[a-zA-Z]+$';
		   if(mm==null|mm==""){
			   $("#userinf").hide();
		   }
		   else{
				if(mm.match(un))
			   {
				   $("#usererro").hide();
				   $("#userk").show();
				   
			   }
			   else
			   {
				 
				 $("#usererro").show();
				   $("#userk").hide();	
				
			   }
		   }
		   
	  });
	  
	
	   $("#password").parent().append("<span class =\"info\" id=\"sinfo\"> Password should have atleast 8 characters</span>")
	 $("#sinfo").hide();
	 $("#password").parent().append("<span class =\"ok\" id=\"sok\"> OK!</span>")
	 $("#sok").hide(); 
	 $("#password").parent().append("<span class =\"error\" id=\"serror\"> ERROR!!! </span>")
	 $("#serror").hide();
      $("#password").focus(function(){
		   $("#serror").hide();
		   $("#sok").hide();
           $("#sinfo").show();
		 
	 });
	  
	  $("#password").blur(function(){
		   $("#sinfo").hide();
		   var nn=$("#password").val();
		   var un= '^[a-zA-Z0-9]';
		   if(nn==null|nn==""){
			   $("#sinfo").hide();
		   }
		   else
		   {
			   if(nn.length>=8)
			   {
				   $("#serror").hide();
				   $("#sok").show();
			   }
			   else
			   {
				   $("#serror").show();
				   $("#sok").hide();			   
			   }
		   }
	  });
	  

	  
	  $("#email").parent().append("<span class =\"info\" id=\"mailinf\"> Email should have @ character.</span>")
	 $("#mailinf").hide();
	 $("#email").parent().append("<span class =\"ok\" id=\"mailk\"> OK!</span>")
	 $("#mailk").hide(); 
	 $("#email").parent().append("<span class =\"error\" id=\"mailerror\"> ERROR!!!</span>")
	 $("#mailerror").hide();
      $("#email").focus(function(){
		   $("#mailerror").hide();
		   $("#mailk").hide();
           $("#mailinf").show();
	  });
	  
	  $("#email").blur(function(){
		   $("#mailinf").hide();
		   var o=$("#email").val();
		   var un= '^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,4}';
		   if(o==null|o==""){
			   $("#mailinf").hide();
		   }
		   else 
			   {
				  if(o.match(un))
			   {
				   $("#mailerror").hide();
				   $("#mailk").show();
				   $("#mailinf").hide();
			   }
			   else
			   {
				   $("#mailerror").show();
				   $("#mailk").hide();
					$("#mailinf").hide();
			   } 
			   }
			   
	  });	  
	  
});