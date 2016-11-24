$(document).ready(function() {
$('form#user_vitals_update').submit(function(e){
	e.preventDefault();
	var vals=$('form#user_vitals_update').serialize();
$.ajax({
	type: "POST",
	url: "updateVitals.php",
	data: vals,
	success: function(data){
	if(data.length==0)
	{
		$('form#user_vitals_update div.error').empty().append($("<h5 style='color:#cf3035;'>Some Error Occurred</h5>"));
	}	
	else
	{		
		var obj=data;
		for(var i in obj)
			{
			$('form#user_vitals_update div.header').empty().append($("<h3>Update Patient Vitals</h3><h5 style='color:#cf3035;'>Vitals Updated</h5>"));	
            $('form#user_vitals_update input#patientid').val(obj[i].ID);
			$('form#user_vitals_update input#weight').val(obj[i].WT);
			$('form#user_vitals_update input#height').val(obj[i].HT);
			}
	}
},
   error: function(){
	   console.log(error);
   }

});
});

$('form#delete-doc').submit(function(e){
	e.preventDefault();
	var vals=$('form#delete-doc').serialize();
$.ajax({
	type: "POST",
	url: "deleteDocs.php",
	data: vals,
	success: function(data){
	if(data==0)
	{
		$('form#delete-doc div.error').empty().append($("<h5 style='color:#cf3035;'>Some Error Occurred</h5>"));
	}	
	else
	{	
console.log(data);
	$('form#delete-doc div.error').empty().append($("<h5 style='color:#cf3035;'>Doctor deleted</h5>"));
	}
},
   error: function(){
	   console.log(error);
   }

});
});

$(function(){
$('form#add-doc').submit(function(e){
	e.preventDefault();
	var vals=$('form#add-doc').serialize();
	console.log(vals);
$.ajax({
	type: "POST",
	url: "addDoc.php",
	data: vals,
	success: function(data){
	if(data==0)
	{
		$('form#add-doc div.error').empty().append($("<h5 style='color:#cf3035;'>Some Error Occurred</h5>")); 
	}	
	else
	{		
			$('form#add-doc div.header').empty().append($("<h3>Doctor Added</h3><h5 style='color:#cf3035;'>Doctor Added</h5>"));
				$('form#delete-doc div.content').load(document.URL +  ' form#delete-doc div.content');
	}
},
error: function()
{
	console.log("error");
}
});
})
});
$(function(){
$('form#patient_pres_update').submit(function(e){
	e.preventDefault();
	var vals=$('form#patient_pres_update').serialize();
	console.log(vals);
$.ajax({
	type: "POST",
	url: "updatePres.php",
	data: vals,
	success: function(data){
	if(data==1)
	{
		$('form#patient_pres_update div.error').empty().append($("<h5 style='color:#cf3035;'>Some Error Occurred</h5>"));
	}	
	else
	{		
			$('form#patient_pres_update div.header').empty().append($("<h3>Update Patient Prescriptions</h3><h5 style='color:#cf3035;'>Prescription Submitted</h5>"));	
	}
},
error: function()
{
	console.log("error");
}
});
})
});

});
