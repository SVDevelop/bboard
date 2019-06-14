$( document ).ready( function() {
	console.log('user handler loaded');
	$.ajax({
		url: base_url+"get_user_data",
		method: "POST",
		data: {data:['username', 'email']}
		// dataType: "html"
	})
	.done(function( result ) {

		if (result.status == 1)
		{	
			alert('userdata is');
			console.log(result);
			// console.log(result.debug);
			// console.log(result.debug.username);
			// console.log(result.userdata);
			$('#usernameNavPlaceholder').text(result.userdata.username);
		}else{
			$('#usernameNavPlaceholder').text(result.username);
		}
		
	})
	.fail(function( jqXHR, text, Status ) {
		alert(jqXHR.responseText);
	});	

    $( "#logoutSubmit" ).on( "click", function() {
        console.log("logout btn clicked");
        logoutSend();
    });
});

function logoutSend()
{
	$.ajax({
		url: base_url+"logout",
		method: "POST",
		data: {}
		// dataType: "html"
	})
	.done(function( result ) {

		if (result.status == 0)
		{
			let message = "<div class='alert alert-danger'>";
			message += result.message;
			message += "</div>";
			alert(message);
		}else{
			window.location.assign(result.new_location);
		}
		
	})
	.fail(function( jqXHR, text, Status ) {
		alert(jqXHR.responseText);
	});	
}





