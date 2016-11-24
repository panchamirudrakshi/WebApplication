function check_username_ajax(username,fieldElem){
	var val;
    $.post('../username-checker.php', {'email':username}, function(data) {
			fieldElem.parent().parent().find("div").show();
		if(data==0)
		{
		fieldElem.parent().parent().find("div").removeClass("ok info").addClass("error");
		fieldElem.parent().parent().find("div").text("Email address not Available!");
		}
		else
		{
		fieldElem.parent().parent().find("div").removeClass("error info").addClass("ok");
		fieldElem.parent().parent().find("div").text("Email address Available!");
		}
	});
};

 function validateField(required, fieldElem, infoMessage, validateFn) {
	// TODO: Implement validateField.
	fieldElem.parent().parent().append("<td><div></div></td>");
	fieldElem.parent().parent().find("div").hide();
	var res;
	//Edited
	//Info
	 fieldElem.focus(function(){
		fieldElem.parent().parent().find("div").show();
		fieldElem.parent().parent().find("div").removeClass("error ok").addClass("info");
		fieldElem.parent().parent().find("div").text("");
	});
 
	//Not Edited
	//Empty
	fieldElem.blur(function(){
		if(fieldElem.val().length == 0 && required==1){
			fieldElem.parent().parent().find("div").removeClass("info ok").addClass("error");
			fieldElem.parent().parent().find("div").text("This field cannot be empty");
		}
		else if(required==0 && fieldElem.val().length==0) {
		fieldElem.parent().parent().find("div").hide();
		}
		else{
			//Not Empty
			//Ok
			if(validateFn()){
				if(fieldElem.attr("id")=="username")
				{	
				fieldElem.parent().parent().find("div").show();
				check_username_ajax(fieldElem.val(),fieldElem);
				}
				else
				{
				fieldElem.parent().parent().find("div").show();
				fieldElem.parent().parent().find("div").removeClass("error info").addClass("ok");
				}
			}
			else{
				//Error
				fieldElem.parent().parent().find("div").show();
				fieldElem.parent().parent().find("div").removeClass("ok info").addClass("error");
				fieldElem.parent().parent().find("div").text(infoMessage);
			}
		}
	});
	
};

$(document).ready(function() {

	$('input[type=password]').keyup(function() {
    // keyup code here
	var pswd = $(this).val();
	if ( pswd.length < 8 ) {
    $('#length').removeClass('valid').addClass('invalid');
} else {
    $('#length').removeClass('invalid').addClass('valid');
}
//validate letter
if ( pswd.match(/[A-z]/) ) {
    $('#letter').removeClass('invalid').addClass('valid');
} else {
    $('#letter').removeClass('valid').addClass('invalid');
}

//validate capital letter
if ( pswd.match(/[A-Z]/) ) {
    $('#capital').removeClass('invalid').addClass('valid');
} else {
    $('#capital').removeClass('valid').addClass('invalid');
}

//validate number
if ( pswd.match(/\d/) ) {
    $('#number').removeClass('invalid').addClass('valid');
} else {
    $('#number').removeClass('valid').addClass('invalid');
}
	
}).focus(function() {
    $('#pswd_info').show();
}).blur(function() {
    $('#pswd_info').hide();
});
	
	
	
	// TODO: Use validateField to validate form fields on the page.	
	validateField(1,
		$("#firstname"),
		"Error! Firstname must contain alphanumeric characters only.",
		function(){
			return /^[0-9A-Za-z]+$/.test($("#firstname").val());
		});

	validateField(1,
		$("#address"),
		"Error! Address cannot have special characters except (,).",
		function(){
			return ($("#address").val()).match(/^[0-9A-Za-z ,]+$/);
		});
		
		
	validateField(1,
		$("#lastname"),
		"Error! Lastname must contain alphanumeric characters only.",
		function(){
			return /^[0-9A-Za-z]+$/.test($("#lastname").val());
		});

	validateField(1,
		$("#username"),
		"Error! Email must contain @ and .",
		function(){
			var atpos = $("#username").val().indexOf("@");
		    var dotpos = $("#username").val().lastIndexOf(".");
			
		    if (atpos< 1 || dotpos<1) {
		    	return false;
		    }
		    else{
		    	return true;
		    }
		});
	validateField(1,
		$("#email"),
		"Error! Email must contain @ and .",
		function(){
			var atpos = $("#email").val().indexOf("@");
		    var dotpos = $("#email").val().lastIndexOf(".");
			
		    if (atpos< 1 || dotpos<1) {
		    	return false;
		    }
		    else{
		    	return true;
		    }
		});
		
	validateField(0,
		$("#phone"),
		"Error! Phone number must contain only numbers.",
		function(){
			if(($("#phone").val()).match(/^\d+$/))
			return true;
			else
			return false;
		});
		
$('form#signup_form').submit(function(e){
	  var vals=$('form#signup_form').serialize();
	  e.preventDefault();
    $.ajax({
        type: 'POST',
        url: '../genphp/UserSignupDb.php',
        data: vals ,
        success: function(data){
			console.log(data);
			if(data==1)
			{
			alert("Signup Complete");
			window.location="../GeneralPages/UserLogin.html";
			}
			else{ alert("Something went wrong");}
		},
		error: function(){console.log("error");}
		});
});
	
});