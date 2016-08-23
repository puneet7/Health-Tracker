// TODO : Fast Double Click on buttons related to BMI Calculator and Calorie Finder creates issues

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
		animate_fadeOutBMIcards();
		setTimeout(function(){
			document.getElementById('BMI-desc').className = "col s12 m12";
			document.getElementById('p-BMI').className = "wow fadeInDown";
			document.getElementById('BMI_header').style.fontSize = "";
			document.getElementById('btn-show-calc').innerHTML = "Calculate BMI";
		},300);
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
		document.getElementById('BMI-desc-sm').className = "col s12 m12";
		animate_fadeOutBMI_smcards();
		setTimeout(function(){
			document.getElementById('cal_find').className = "col s12 m12";
			document.getElementById('cal_find_btn').innerHTML = "Find";
		},300);
		document.getElementById('BMI_header-sm').style.fontSize = "";
		document.getElementById('btn-show-calc-sm').innerHTML = "Calculate BMI";
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
			var BMI = My_weight*10000/(My_height*My_height)
			document.getElementById('My_BMI').focus();
			document.getElementById('My_BMI').value = BMI.toFixed(2);
		}
	}

}

function BMI_calculatorS(){//for small devices
	var My_weight = document.getElementById('My_weight-sm').value;
	var My_height = document.getElementById('My_height-sm').value;

	var BMI = My_weight*10000/(My_height*My_height)
	document.getElementById('My_BMI-sm').focus();
	document.getElementById('My_BMI-sm').value = BMI.toFixed(2);
}

var cal_count_click=0;
function calfind_card(){
	cal_count_click+=1
	//Click on 'Find' to open cal_find card
	if(cal_count_click%2==1){											

		document.getElementById('cal_card').className="col s12 m6";
		setTimeout(function(){
			animate_fadeIncards();
		}, 300);
		
		document.getElementById('cal_find').className="col s12 m6";
		document.getElementById('cal_find_btn').innerHTML = "Close";

	}
	//Else Click on 'Close' to close cal_find card
	else{															
		animate_fadeOutcards();
		setTimeout(function(){
			document.getElementById('cal_find').className = "col s12 m12";
			document.getElementById('cal_find_btn').innerHTML = "Find";
		},300);
	}


}
// list of fuctions to animate cards

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