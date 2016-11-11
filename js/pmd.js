$( document ).ready(function() {  
	document.getElementById("track_prog").click();
	if($(window).width() < 601 ){
	  		$('#content-div').css("padding-left","5%");
	  		document.getElementById("track_prog").click();
	}

	$( window ).resize(function() {
	  	if($(window).width() < 601 ){
	  		$('#content-div').css("padding-left","5%");
	  		document.getElementById("track_prog").click();
	  	}
	  	if($(window).width() >= 601 ){
	  		$('#content-div').css("padding-left","27%");
	  		document.getElementById("track_prog").click();
	  	}
	});
 });