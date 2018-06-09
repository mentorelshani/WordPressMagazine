$(document).ready(function(){
	$.validate({
		lang: 'en'
	});

	$(window).keydown(function(event){
		if(event.keyCode == 13) {
	    	event.preventDefault();
	     	submit();
	    }
	});

    $("#button2").click(function(event){
    	submit();
    });
});

function submit(){

	$('.spans').remove();
    var element = document.getElementById("pass2");
    element.classList.add("valid");
    element.classList.remove("error");
    element = document.getElementById("user");
    element.classList.add("valid");
    element.classList.remove("error");
    
	var pass1 = document.getElementById('pass1').value;
	var pass2 = document.getElementById('pass2').value;
	if (pass1 != pass2) {
		wrongConfirm();
		return;
	}
	 var values = $("#form2").serialize();
    	$.ajax({
	    	url: "../back-end/functions.php?f=register",
	        type: "post",
	        data: values ,
	        success: function (response) {
	        	if (response == "username taken") {
	        		usernameTaken();
	        	}
	        	else{
	        		window.location.href = '/';
	        	}
	        }
	    });
}

function wrongConfirm(){

	$("#confirm_div").append('<span class="help-block form-error spans">Passwords didn\'t match.</span>');
    var element = document.getElementById("pass2");
    element.classList.add("error");
    element.classList.remove("valid");
}

function usernameTaken(){
	
	$("#user_div").append('<span class="help-block form-error spans">Username is already taken.</span>');
    var element = document.getElementById("user");
    element.classList.add("error");
    element.classList.remove("valid");
}
