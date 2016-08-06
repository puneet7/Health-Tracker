var countClick = 0;
var smcountClick =0;
function openCalc(){//for med& large devices
	countClick += 1;
	if((countClick%2) == 1){//Click on 'Calculate BMI' to open calculator
		document.getElementById('BMI-desc').className = "col s12 m5";
		document.getElementById('BMI-calc-card').style.display = "block";
		document.getElementById('p-BMI').className += " left-align";
		document.getElementById('BMI_header').style.fontSize = "300%";
		document.getElementById('btn-show-calc').innerHTML = "Close";
	}
	else{//Click on 'Close' to close calculator
		document.getElementById('BMI-calc-card').style.display = "none";
		document.getElementById('BMI-desc').className = "col s12 m12";
		document.getElementById('p-BMI').className = "wow fadeInDown";
		document.getElementById('BMI_header').style.fontSize = "";
		document.getElementById('btn-show-calc').innerHTML = "Calculate BMI";
	}
}

function openCalcS(){//for small devices
	smcountClick += 1;
	if((smcountClick%2) == 1){//Click on 'Calculate BMI' to open calculator
		document.getElementById('BMI-desc-sm').className = "col s12 m5";
		document.getElementById('BMI-calc-card-sm').style.display = "block";
		document.getElementById('BMI_header-sm').style.fontSize = "300%";
		document.getElementById('btn-show-calc-sm').innerHTML = "Close";
	}
	else{//Click on 'Close' to close calculator
		document.getElementById('BMI-desc-sm').className = "col s12 m12";
		document.getElementById('BMI-calc-card-sm').style.display = "none";
		document.getElementById('BMI_header-sm').style.fontSize = "";
		document.getElementById('btn-show-calc-sm').innerHTML = "Calculate BMI";
	}
}


function BMI_calculator(){//for med& large devices
	var My_weight = document.getElementById('My_weight').value;
	var My_height = document.getElementById('My_height').value;

	var BMI = My_weight*10000/(My_height*My_height)
	document.getElementById('My_BMI').focus();
	document.getElementById('My_BMI').value = BMI.toFixed(2);
}

function BMI_calculatorS(){//for small devices
	var My_weight = document.getElementById('My_weight-sm').value;
	var My_height = document.getElementById('My_height-sm').value;

	var BMI = My_weight*10000/(My_height*My_height)
	document.getElementById('My_BMI-sm').focus();
	document.getElementById('My_BMI-sm').value = BMI.toFixed(2);
}