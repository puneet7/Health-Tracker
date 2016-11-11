$( document ).ready(function() {
	$( window ).load(function() {


  		var xhr = new XMLHttpRequest();

		xhr.open("POST", "http://localhost/HT/php/resetcnt.php", true);  
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
		xhr.send();
	});
});