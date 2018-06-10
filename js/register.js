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
    
	var pass1 = document.getElementById('pass1').value;
	var pass2 = document.getElementById('pass2').value;
	if (pass1 != pass2) {
  		swal({
		 	type: 'error',
			title: 'Oops...',
			text: 'Passwords didn\'t match.',
			})
		return;
	}
	 var values = $("#form2").serialize();
    	$.ajax({
	    	url: "../back-end/functions.php?f=register",
	        type: "post",
	        data: values ,
	        success: function (response) {
	        	if (response == "ok") {
	        		window.location.href = '/';
	        	}
	        	else{
	        		swal({
					  type: 'error',
					  title: 'Oops...',
					  text: response,
					})
	        		// swal(response);
	        	}
	        }
	    });
}
