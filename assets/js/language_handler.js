$( document ).ready( function() {
	
	console.log('language handler loaded');
	$.ajax({
		url: base_url+"language_get",
		method: "GET",
		data: {}
		// dataType: "html"
	})
	.done(function( result ) {
		console.log('success response');
		// console.log('lang prefix: '+ result.lang_prefix + ';  lang: '+result.lang);
		$('#dropdownLanguageSelector .'+result.lang_prefix).removeClass('d-none');
		$(".lang-select").val(result.lang_prefix);
		// if (result.lang_prefix == "en") {
  //               $(".en").show();
  //               $(".ru").hide();
  //               $(".lang-select").val("en");
  //           }
  //           else {
  //               $(".ru").show();
  //               $(".en").hide();
  //               $(".lang-select").val("ru");
  //           }
		console.log('lang ses debug section');
		console.log(result);

	})
	.fail(function( jqXHR, text, Status ) {
		alert(jqXHR.responseText);
	});

	// console.log('ur loc is '+location);
});

function languageChange(language)
{
	let new_path = window.location.pathname.split('/');
	// console.log('request path is '+ new_path[new_path.length - 1]);
	// console.log('request lang is '+ language+ ' sent request to '+ base_url+"language_change");
	$.ajax({
		url: base_url+"language_change",
		method: "POST",
		data: {language:language, url: new_path[new_path.length - 1]}
		// dataType: "html"
	})
	.done(function( result ) {
		console.log(result);
		// console.log('new ajax loc is '+result.new_location);
		// console.log('new js loc is '+new_path[new_path.length - 1]);
		window.location.assign(result.new_location);
	})
	.fail(function( jqXHR, text, Status ) {
		alert(jqXHR.responseText);
	});	
}