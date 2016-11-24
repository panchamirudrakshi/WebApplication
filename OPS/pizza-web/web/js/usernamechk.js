$(document).ready(function() {
    var x_timer;    
    $("input#email").keyup(function (e){
		alert("no");
        clearTimeout(x_timer);
        var user_name = $(this).val();
        x_timer = setTimeout(function(){
            check_username_ajax(user_name);
        }, 1000);
    }); 

function check_username_ajax(username){
    $("span#user-result").html('<img src="../images/loading.gif" />');
    $.post('../username-checker.php', {'username':username}, function(data) {
      $("#user-result").html(data);
    });
}
});