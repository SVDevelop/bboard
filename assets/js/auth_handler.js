$( document ).ready( function() {
	console.log('auth handler loaded');
	

	$( "#formRegistration #registrationSubmit" ).on( "click", function() {
        console.log("registration btn clicked");
        //TO DO if inputs check method false - error, TANYA sdilay pozhaluysta
        //else send ajax-data to server
        registrationSend( serializeFormJSON( $("#formRegistration") ) );
    });

    $( "#formLogin #loginSubmit" ).on( "click", function() {

        console.log("login btn clicked");
        //TO DO if inputs check method false - error, TANYA sdilay pozhaluysta
        //else send ajax-data to server
        loginSend( serializeFormJSON( $("#formLogin") ) );
    });

    $( "#formPasswordForgot #passwordForgotSubmit" ).on( "click", function() {

        console.log("forgot password btn clicked");
        //TO DO if inputs check method false - error, TANYA sdilay pozhaluysta
        //else send ajax-data to server
        passwordRecoverSend( serializeFormJSON( $("#formPasswordForgot") ) );
    });

    $( "#formPasswordReset #passwordResetSubmit" ).on( "click", function() {

        console.log("reset password btn clicked");
        //TO DO if inputs check method false - error, TANYA sdilay pozhaluysta
        //else send ajax-data to server
        passwordResetSend( serializeFormJSON( $("#formPasswordReset") ) );
    });
});

function registrationSend(data)
{
	$.ajax({
		url: base_url+"registration",
		method: "POST",
		data: {
			username:data.username,
			email:data.email,
			password:data.password,
			password_confirm:data.password_confirm,
			first_name:data.first_name,
			last_name:data.last_name
		}
		// dataType: "html"
	})
	.done(function( result ) {
		// console.log('response is '+ result.status+" "+ result.message+ result);
		// console.log(result.message);
		// console.log(result.debug);
		// console.log(result);

		let message = "<div class='alert alert-"+(result.status==1 ? "success" : "danger")+"'>";
		message += result.message;
		message += "</div>";

		$( "#formRegistration > div.form-message" ).append( message );

		setTimeout(function() {
			$('#formRegistration > div.form-message > div').fadeOut( "slow", function() {
				$('#formRegistration > div.form-message').empty();
			});
    	}, 7000);
	})
	.fail(function( jqXHR, text, Status ) {
		alert(jqXHR.responseText);
	});	
}

function loginSend(data)
{
	// console.log(data);
	$.ajax({
		url: base_url+"login",
		method: "POST",
		data: {
			identity:data.identity,
			password:data.password,
			remember:$("#rememberCheck").prop("checked")
		}
		// dataType: "html"
	})
	.done(function( result ) {
		// console.log('response is '+ result.status+" "+ result.message+ result);
		// console.log(result.message);
		// console.log(result.debug);
		// console.log(result);

		if (result.status == 0)
		{
			let message = "<div class='alert alert-danger'>";
			message += result.message;
			message += "</div>";

			$( "#formLogin > div.form-message" ).append( message );

			setTimeout(function() {
				$('#formLogin > div.form-message > div').fadeOut( "slow", function() {
					$('#formLogin > div.form-message').empty();
				});
	    	}, 7000);
		}else{
			window.location.assign(result.new_location);
		}
		
	})
	.fail(function( jqXHR, text, Status ) {
		alert(jqXHR.responseText);
	});	
}

function passwordRecoverSend(data)
{
	// console.log(data);
	$.ajax({
		url: base_url+"forgot_password",
		method: "POST",
		data: {
			identity:data.identity
		}
		// dataType: "html"
	})
	.done(function( result ) {
		// console.log('response is '+ result.status+" "+ result.message+ result);
		// console.log(result.message);
		// console.log(result.debug);
		// console.log(result);

		let message = "<div class='alert alert-"+(result.status==1 ? "success" : "danger")+"'>";
		message += result.message;
		message += "</div>";

		$( "#formPasswordForgot > div.form-message" ).append( message );

		if (result.status == 0)
		{

			setTimeout(function() {
				$('#formPasswordForgot > div.form-message > div').fadeOut( "slow", function() {
					$('#formPasswordForgot > div.form-message').empty();
				});
	    	}, 7000);

		}else{

			setTimeout(function() {
				window.location.assign(result.new_location);
	    	}, 3000);
		}
		
	})
	.fail(function( jqXHR, text, Status ) {
		alert(jqXHR.responseText);
	});	
}

function passwordResetSend(data)
{
	console.log("sent data below");
	console.log(data);
	let csrf_key = $('#formPasswordReset #csrf_key').attr("name"),
		csrf_pair = {};
	csrf_pair[csrf_key] = data[csrf_key];
	$.ajax({
		url: window.location.href,
		method: "POST",
		data: {
			new:data.new,
			new_confirm:data.new_confirm,
			csrf_pair,
			user_id:data.user_id			
		}
		// dataType: "html"
	})
	.done(function( result ) {
		console.log(result);
		console.log('auth ses debug section');
		console.log(result.session_debug);

		let message = "<div class='alert alert-"+(result.status==1 ? "success" : "danger")+"'>";
		message += result.message;
		message += "</div>";

		$( "#formPasswordReset > div.form-message" ).append( message );
		if (result.status == 0)
		{
			setTimeout(function() {
				$('#formPasswordForgot > div.form-message > div').fadeOut( "slow", function() {
					$('#formPasswordForgot > div.form-message').empty();
				});
	    	}, 7000);
		}else{
			setTimeout(function() {
				window.location.assign(result.new_location);
	    	}, 3000);
		}
		
	})
	.fail(function( jqXHR, text, Status ) {
		alert(jqXHR.responseText);
	});	
}
