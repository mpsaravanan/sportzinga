// for mobile menu
$('.servicess a[href*="#"]:not([href="#"])').click(function() {
	if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		if (target.length) {
		 $('html, body').animate({
		   scrollTop: target.offset().top - 200
		 }, 500);
		 return false;
		}
	}
});

$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).show();
 		$("#register-form").hide();
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).show();
 		$("#login-form").hide();
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

var loginService = function () {
    var loginService = {};
    loginService.setData = function (field,value) {
    	if(value){

	    	switch (field) {
	            case 'userName':
	                loginService.userName = value;
	                break;
	            case 'email':
	                loginService.email = value;
	             	break;
	             case 'mobile':
	                loginService.mobile = value;
	             	break;
	            case 'password':
	                loginService.password = value;
	             	break;
	            case 'confirmPwd':
	                loginService.password = value;
	             	break;

	            default:
	        }
	    }
    }

    loginService.registration = function () {
    	var token = $("input[name=_token]").val();
    	var payload = {
    		'userName':loginService.userName,
    		'email':loginService.email,
    		'mobile':loginService.mobile,
    		'password':loginService.password
    	};
    	$.ajax({
            url: "/homes/singup",
            method : "POST",
            //data:payload,
            data: { _token:token,data:payload},
            success: function(data) {

            }
        });
    }

    loginService.selectMobileNumber = function (mobile) {
    	var payload = {
    		'email':''
    	};
    }
     return loginService;
}();



