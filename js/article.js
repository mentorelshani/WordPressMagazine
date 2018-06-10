$(document).ready(function(){
	console.log(12);
	$.validate({
		lang: 'en'
	});

	$(window).keydown(function(event){
		if(event.keyCode == 13) {
	    	event.preventDefault();
	    }
	});

    $("#button3").click(function(event){
    	submit();
    });
});


function submit(){

		var searchParams = new URLSearchParams(window.location.search);
		if(searchParams.has('id')){
			var param = searchParams.get('id');
		}

		var comment = document.getElementById("comment_input").value;

	    var values = "article_id="+param+"&comment="+comment;
    	$.ajax({
	    	url: "../back-end/functions.php?f=addComment",
	        type: "post",
	        data: values ,
	        success: function (response) {
	        	swal(response);
	        }
	    });
}

// function wrongConfirm(){

// 	$("#confirm_div").append('<span class="help-block form-error spans">Passwords didn\'t match.</span>');
//     var element = document.getElementById("pass2");
//     element.classList.add("error");
//     element.classList.remove("valid");
// }