// Fast Double Click on button related to BMI Calculator and Calorie Finder creates issues
// TODO : Fix animation bug after clicking twice quickly on Find and Close
var countClick = 0;
var smcountClick =0;
function openCalc(){//for med& large devices
	countClick += 1;
	if((countClick%2) == 1){//Click on 'Calculate BMI' to open calculator
		document.getElementById('BMI-desc').className = "col s12 m5";
		animate_fadeInBMIcards();
		document.getElementById('p-BMI').className += " left-align";
		document.getElementById('BMI_header').style.fontSize = "300%";
		document.getElementById('btn-show-calc').innerHTML = "Close";
	}
	else{//Click on 'Close' to close calculator
		document.getElementById('btn-show-calc').disabled = true;
		animate_fadeOutBMIcards();
		setTimeout(function(){
			document.getElementById('BMI-desc').className = "col s12 m12";
			document.getElementById('p-BMI').className = "wow fadeInDown";
			document.getElementById('BMI_header').style.fontSize = "";
			document.getElementById('btn-show-calc').innerHTML = "Calculate BMI";
			document.getElementById('btn-show-calc').disabled = false;
		},300);
		document.getElementById('My_weight').value = '';
		document.getElementById('My_height').value = '';
		document.getElementById('My_BMI').value = '';
		document.getElementById('BMI_response').value =  '';
	}
}

function openCalcS(){//for small devices
	smcountClick += 1;
	if((smcountClick%2) == 1){//Click on 'Calculate BMI' to open calculator
		document.getElementById('BMI-desc-sm').className = "col s12 m5";
		animate_fadeInBMI_smcards();
		document.getElementById('BMI_header-sm').style.fontSize = "300%";
		document.getElementById('btn-show-calc-sm').innerHTML = "Close";
	}
	else{//Click on 'Close' to close calculator
		document.getElementById('btn-show-calc-sm').disabled = true;
		animate_fadeOutBMI_smcards();
		setTimeout(function(){
			document.getElementById('BMI-desc-sm').className = "col s12 m12";
			document.getElementById('btn-show-calc-sm').innerHTML = "Calculate BMI";
			document.getElementById('btn-show-calc-sm').disabled = false;
		}, 300);
		document.getElementById('BMI_header-sm').style.fontSize = "";
		document.getElementById('My_weight-sm').value = '';
		document.getElementById('My_height-sm').value = '';
		document.getElementById('My_BMI-sm').value = '';
		document.getElementById('BMI_response-sm').value = '';
	}
}


function BMI_calculator(){//for med& large devices

	var My_weight = '';
	var My_height = '';

	if(parseInt(document.getElementById('My_weight').value))
		My_weight =  parseInt(document.getElementById('My_weight').value);

	if(parseInt(document.getElementById('My_height').value))
 		My_height =  parseInt(document.getElementById('My_height').value);

	if(My_weight.toString().trim().length == 0 || typeof My_weight == 'string' ) {
		return;
	}

	else{
		if(My_height.toString().trim().length == 0 || typeof My_height == 'string'){
			return;
		}
		else{
			var BMI = My_weight*10000/(My_height*My_height);
			BMI = BMI.toFixed(2);
			document.getElementById('My_BMI').focus();
			document.getElementById('My_BMI').value = BMI;
			document.getElementById('BMI_response').focus();
			if(BMI < 18.5){
				document.getElementById('BMI_response').value = 'UnderWeight';
			}
			else if(BMI <= 24.9 && BMI >= 18.5){
				document.getElementById('BMI_response').value = 'Normal';
			}
			else if(BMI >= 25 && BMI <= 29.9){
				document.getElementById('BMI_response').value = 'OverWeight';
			}
			else{
				document.getElementById('BMI_response').value = 'Obese';
			}
		}
	}

}

function BMI_calculatorS(){//for small devices
	var My_weight = '';
	var My_height = '';

	if(parseInt(document.getElementById('My_weight-sm').value))
		My_weight =  parseInt(document.getElementById('My_weight-sm').value);

	if(parseInt(document.getElementById('My_height-sm').value))
 		My_height =  parseInt(document.getElementById('My_height-sm').value);

	if(My_weight.toString().trim().length == 0 || typeof My_weight == 'string' ) {
		return;
	}

	else{
		if(My_height.toString().trim().length == 0 || typeof My_height == 'string'){
			return;
		}
		else{
			var BMI = My_weight*10000/(My_height*My_height)
			BMI = BMI.toFixed(2);
			document.getElementById('My_BMI-sm').focus();
			document.getElementById('My_BMI-sm').value = BMI;
			document.getElementById('BMI_response-sm').focus();
			if(BMI < 18.5){
				document.getElementById('BMI_response-sm').value = 'UnderWeight';
			}
			else if(BMI <= 24.9 && BMI >= 18.5){
				document.getElementById('BMI_response-sm').value = 'Normal';
			}
			else if(BMI >= 25 && BMI <= 29.9){
				document.getElementById('BMI_response-sm').value = 'OverWeight';
			}
			else{
				document.getElementById('BMI_response-sm').value = 'Obese';
			}
		}
	}
}


// TODO : Fix animation bug after clicking twice quickly on Find and Close

var cal_count_click=0;
function calfind_card(){
	cal_count_click+=1
	if(cal_count_click%2==1){
		//Click on 'Find' to open calfind_card
		var name_food=document.getElementById('calorie_finder').value.trim();
		if(name_food.trim() == '')
				return;
		document.getElementById('cal_card').className="col s12 m6";
		setTimeout(function(){
			animate_fadeIncards();
		}, 300);
		document.getElementById('cal_find').className="col s12 m6";
		document.getElementById('cal_find_btn').innerHTML = "Close";
		var foodname='name_food='+name_food;

		var xhr = new XMLHttpRequest();
		xhr.open("POST", "http://localhost/HT/php/cal_find.php", true);  
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
		xhr.send(foodname);

		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200)
			{
				console.log(xhr.responseText);
					if(xhr.responseText.toString().trim()=='<span style = "color:red;">Food not in database</span>')
					{

						 document.getElementById("calorie_card").innerHTML =xhr.responseText;

					}
					else 
					{
						document.getElementById("calorie_card").innerHTML = 'Calorie of '+name_food+' are:<br>'+xhr.responseText;
					}
			}
		};

	}
	else{//Click on 'Close' to close cafind_card
		document.getElementById('cal_find_btn').disabled = true;
		animate_fadeOutcards();
		setTimeout(function(){
			document.getElementById('cal_find').className = "col s12 m12";
			document.getElementById('cal_find_btn').innerHTML = "Find";
			document.getElementById('cal_find_btn').disabled = false;
		},300);
	}



}
// list of fuctions to animate cards
/*global $*/
function animate_fadeIncards(){
    $("#cal_card").fadeIn();
    $('#cal_find').fadeIn();
}

function animate_fadeOutcards(){
    $("#cal_card").fadeOut();
    $('#cal_find').fadeIn();
}

function animate_fadeInBMIcards(){
    $("#BMI-calc-card").fadeIn();
    $('#BMI-desc').fadeIn();
}

function animate_fadeOutBMIcards(){
    $("#BMI-calc-card").fadeOut();
    $('#BMI-desc').fadeIn();
}

function animate_fadeInBMI_smcards(){
    $("#BMI-calc-card-sm").fadeIn();
    $('#BMI-desc-sm').fadeIn();
}

function animate_fadeOutBMI_smcards(){
    $("#BMI-calc-card-sm").fadeOut();
    $('#BMI-desc-sm').fadeIn();
}