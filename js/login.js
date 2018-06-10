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

    $("#button1").click(function(event){
    	submit();
    });
});

function submit(){

	$('.spans').remove();
    var element = document.getElementById("pass_input");
    element.classList.add("valid");
    element.classList.remove("error");
    element = document.getElementById("user_input");
    element.classList.add("valid");
    element.classList.remove("error");

	    var values = $("#form").serialize();
    	$.ajax({
	    	url: "../back-end/functions.php?f=login",
	        type: "post",
	        data: values ,
	        success: function (response) {
	        	if (response =="wrong username") {
	        		wrongUser();
	        	}
	        	else if (response =="wrong password") {
	        		wrongPassword();
	        	}
	        	else{
	        		window.location.href = '/';
	        	}
	        }
	    });
}

function wrongUser(){

	$("#user_div").append('<span class="help-block form-error spans">This username does not exist.</span>');
    var element = document.getElementById("user_input");
    element.classList.add("error");
    element.classList.remove("valid");
}

function wrongPassword(){
	
	$("#pass_div").append('<span class="help-block form-error spans">Username and password don\'t match.</span>');
    var element = document.getElementById("pass_input");
    element.classList.add("error");
    element.classList.remove("valid");
}