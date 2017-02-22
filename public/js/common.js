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
function auth() {
	$.ajax({
        url: "/auth",
        method : "GET",
        //data: { _token:token,data:payload},
        success: function(data) {
        	if(data && data.message == "AUTH_SUCCESS"){
        		$('.userName').removeClass('Hidden');
        		$("#loginData").text(loginService.enquiry_name);
        		$('.loginHide').addClass('Hidden');
        	}
        

        }
    });
}auth();

var loginService = function () {
    var loginService = {};
    loginService.enquiry_name = cookieService.getCookie("autofill_contactname") || '';
    loginService.enquiry_email = cookieService.getCookie("autofill_email") || '';
    loginService.enquiry_phone = cookieService.getCookie("autofill_no") || '';
     var $createAlertPopup = $('#contactModal_container .newmodal');
    var htmlData = _.template($('#scriptPostadError').html());
    $createAlertPopup.html(htmlData({
            'loginService': loginService
        }));
    loginService.setData = function (field,value) {
    	if(value){

	    	switch (field) {
	    		case 'gender':
	                loginService.gender = value;
	                break;
	            case 'name':
	                loginService.name = value;
	             	break;
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
	                loginService.password = btoa(value);
	             	break;
	            

	            default:
	        }
	    }
    }

    loginService.registration = function (event) {
    	event.preventDefault();
    	var payload = {
    		'name':loginService.name,
    		'user_id':loginService.userName,
    		'email':loginService.email,
    		'phone':loginService.mobile,
    		'password':loginService.password,
    		'gender':loginService.gender,
    		'dob':'1992-10-19'
    	};
    	$.ajax({
            url: "/singup",
            method : "POST",
            data:payload,
            //data: { _token:token,data:payload},
            success: function(data) {
            	if(data.message == 'SUCCESS'){
            		$('#loginmodule').modal('toggle');
            	}

            }
        });
    }
    loginService.signIn = function (event) {
    	event.preventDefault();
    	var payload = {
    		'username':loginService.userName,
    		'password':loginService.password
    	};
    	$.ajax({
            url: "/login",
            method : "POST",
            data:payload,
            success: function(data) {
            	if(data.auth_token){
	            	cookieService.setCookie("autofill_contactname", data.name);
					cookieService.setCookie("autofill_no", data.phone);
					cookieService.setCookie("autofill_email", data.email);
	            	$('.loginHide').addClass('Hidden');
	            	$('.userName').removeClass('Hidden');
	            	$("#loginData").text(data.name);
	            	$('#loginmodule').modal('toggle');
            	}
				

            }
        });
    }
    loginService.logOut = function (event) {
    	event.preventDefault();
    	var payload = {
    		'username':loginService.userName,
    		'password':loginService.password
    	};
    	$.ajax({
            url: "/logout",
            method : "GET",
            success: function(data) {
            	if(data.message == "SUCCESS"){
            		$('.loginHide').removeClass('Hidden');
            		$('.userName').addClass('Hidden');
            	}
            	
            }
        });
    }

    
     return loginService;
}();





