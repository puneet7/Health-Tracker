var cal_history = [];
var cal_labels = [];
var burn_history = [];
var label_length = 0;

function check_progress(){

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/HT/php/graphdata.php", true);  
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    xhr.send("testcal=test");

    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200){
        var temp_cal_data = xhr.responseText;
        var cal_val = temp_cal_data.match(/ \[cal_history\] => (.*)/gm).toString().split("=>");
        var burn_val = temp_cal_data.match(/ \[burn_history\] => (.*)/gm).toString().split("=>");

        var cal_temp = cal_val[1].toString().split(",");
        cal_history = cal_temp.map(Number);
        var burn_temp = burn_val[1].toString().split(",");
        burn_history = burn_temp.map(Number);

        cal_labels = [];
        if(cal_history.length > burn_history.length)
          label_length = cal_history.length;
        else
          label_length = burn_history.length;

        for(var day_no = 1; day_no <= label_length; day_no++){
          cal_labels.push(parseInt(day_no));
        }

        init();
      }
    }

    window.onload = function() { 
        init();
    };
    function init() {
        var ctx_cal = $("#myChart").get(0).getContext("2d");
        // var ctx_burn = $("#myChart").get(0).getContext("2d");

        var data_cal = {

            labels: cal_labels,
            datasets: [
                {
                  label: "Calories Consumed",
                  borderColor: "rgba(191,255,0,1)",
                  backgroundColor: "rgba(0,128,128,0.5)",
                  pointBorderColor: "rgba(191,255,0,1)",
                  pointBackgroundColor: "#fff",
                  data: cal_history
                }, 
                {
                  label: "Calories Burnt",
                  borderColor: "rgba(191,255,0,1)",
                  backgroundColor: "rgba(0,145,234,0.5)",
                  pointBorderColor: "rgba(191,255,0,1)",
                  pointBackgroundColor: "#fff",
                  data: burn_history
                },
            ]
        };

        var chartCal = new Chart(ctx_cal, {
          type: "line",
          data: data_cal,
          options: {
            responsive: true,
            title: {
              display: true,
              text: "Entries vs Calories"
            }
          }
        });
    }
}


function submit_cal_intake(x){


  if(x==0){
    var intake = parseInt(document.getElementById("food_cal_field").value);


    document.getElementById("food_cal_field").value = "";
    if(intake.toString().trim().length == 0 || isNaN(intake) || intake == 0){
      document.getElementById("cal_error").innerHTML = "<center style='color:red;'>Please enter the calories.</center>";
      return false;
    }
  }

  if(x != 0)
    intake = parseInt(x);


  // document.getElementById("food_cal_field").click();
  // document.getElementById("track_prog").focus();
  var xhr_get_history = new XMLHttpRequest();
  
  xhr_get_history.open("POST", "http://localhost/HT/php/graphdata.php", true);  
  xhr_get_history.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
  xhr_get_history.send("testcal=test");

  xhr_get_history.onreadystatechange = function(){
    
    if(xhr_get_history.readyState == 4 && xhr_get_history.status == 200){
      var temp_cal_data = xhr_get_history.responseText;
      var cal_val = temp_cal_data.match(/ \[cal_history\] => (.*)/gm).toString().split("=>");
      var cal_temp = cal_val[1].toString().split(",");
      cal_history = cal_temp;

      if(cal_history.length > 29){
        cal_history.shift();
      } 
      
      cal_history.push(intake);
      
      var xhr_update_history = new XMLHttpRequest();
      xhr_update_history.open("POST", "http://localhost/HT/php/graphdata.php", true);  
      xhr_update_history.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
      xhr_update_history.send("intake="+cal_history);

    }
  }

}


function submit_food_intake(){

  document.getElementById("food_error").innerHTML = "";
  var food = document.getElementById("food_field").value;
  document.getElementById("food_field").value = "";
  if(food.toString().trim().length == 0){
    document.getElementById("food_error").innerHTML = "<center style='color:red;'>Please enter the food name</center>";
    return false;
  }

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "http://localhost/HT/php/cal_find.php", true);  
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && xhr.status == 200){

        if(xhr.responseText.toString().trim()=='<span style = "color:red;">Food not in database</span>'){
          document.getElementById("food_error").innerHTML = "<center style='color:red;'>Food not found in database.</center>";
        }
        else{
          submit_cal_intake(parseInt(xhr.responseText));
        }

    }

  }; 

  xhr.send("name_food="+food);

}

function log_ex_activity(){

  var select = document.getElementById("ex_activity");
  var answer = select.options[select.selectedIndex].value;
  var cal_values = [0, 11, 7, 12, 11, 3];
  var time = parseInt(document.getElementById("ex_time").value);

  document.getElementById("ex_time").value = "";

  if(answer == 0){
    document.getElementById("time_error").innerHTML = "<center style = 'color:red;'>Please choose an exercise</center>";
    return false;
  }

  if(time == 0 || isNaN(time) ){
    document.getElementById("time_error").innerHTML = "<center style = 'color:red;'>Please enter the time</center>";
    return false;
  }
  document.getElementById("time_error").innerHTML = "";
  var cal_burned = time*cal_values[answer];

  var xhr_get_history = new XMLHttpRequest();
  
  xhr_get_history.open("POST", "http://localhost/HT/php/graphdata.php", true);  
  xhr_get_history.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
  xhr_get_history.send("testcal=test");

  xhr_get_history.onreadystatechange = function(){
    
    if(xhr_get_history.readyState == 4 && xhr_get_history.status == 200){
      var temp_cal_data = xhr_get_history.responseText;
      var cal_val = temp_cal_data.match(/ \[burn_history\] => (.*)/gm).toString().split("=>");
      var cal_temp = cal_val[1].toString().split(",");
      burn_history = cal_temp;

      if(burn_history.length > 29){
        burn_history.shift();
      }
      
      burn_history.push(cal_burned);
      
      var xhr_update_history = new XMLHttpRequest();
      xhr_update_history.open("POST", "http://localhost/HT/php/graphdata.php", true);  
      xhr_update_history.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
      xhr_update_history.send("exlog="+burn_history);

    }
  }

}


function generateDiet(){

  var xhr = new XMLHttpRequest();
  var goals = document.getElementById("diet_goal").value;
  console.log(goals);
  if(goals.toString().trim().length == 0){
    document.getElementById("no_goals").innerHTML = "<center style = 'color:red'>Enter a goal</center>"
    return false;
  }

  xhr.open("POST", "http://localhost/HT/php/graphdata.php");
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("goals="+goals);
  document.getElementById("no_goals").innerHTML = "";
  document.getElementById("ldiet").innerHTML = "<center>Generating Diet. Please wait a minute</center><br/>";
  document.getElementById("bdiet").innerHTML = "<center>Generating Diet. Please wait a minute</center><br/>";
  document.getElementById("sdiet").innerHTML = "<center>Generating Diet. Please wait a minute</center><br/>";
  document.getElementById("ddiet").innerHTML = "<center>Generating Diet. Please wait a minute</center><br/>";
  xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && xhr.status == 200){
      // console.log(alldiet);
      console.log("AAA = " + xhr.responseText);
      // console.log(JSON.parse(xhr.responseText));
      var alldiet = xhr.responseText.split("---");
      try{
        var lunch_json = JSON.parse(alldiet[0]);
        var bfast_json = JSON.parse(alldiet[1]);
        var dinner_json = JSON.parse(alldiet[2]);
        var snacks_json = JSON.parse(alldiet[3]);
      } catch(e){
        document.getElementById("no_goals").innerHTML = "<center style = 'color:red'>Cannot generate a Diet. Try increasing the calorie</center>";
        document.getElementById("ldiet").innerHTML = "";
        document.getElementById("bdiet").innerHTML = "";
        document.getElementById("sdiet").innerHTML = "";
        document.getElementById("ddiet").innerHTML = "";
        console.log(e);
        return false;
      }

      var lfood = [], lcal = [], bfood = [], bcal = [], sfood = [], scal = [], dfood = [], dcal = [], lcal_total = 0, bcal_total = 0, scal_total = 0, dcal_total = 0 ;
      for(var i = 0; i < lunch_json.length; i++){
        lfood.push(lunch_json[i]['Fname']);
        lcal.push(lunch_json[i]['Cal']);
        lcal_total = lcal_total + parseInt(lunch_json[i]['Cal']);
      }

      for(var i = 0; i < bfast_json.length; i++){
        bfood.push(bfast_json[i]['Fname']);
        bcal.push(bfast_json[i]['Cal']);
        bcal_total = bcal_total + parseInt(bfast_json[i]['Cal']);
      }

      for(var i = 0; i < snacks_json.length; i++){
        sfood.push(snacks_json[i]['Fname']);
        scal.push(snacks_json[i]['Cal']);
        scal_total = scal_total + parseInt(snacks_json[i]['Cal']);
      }

      for(var i = 0; i < dinner_json.length; i++){
        dfood.push(dinner_json[i]['Fname']);
        dcal.push(dinner_json[i]['Cal']);
        dcal_total = dcal_total + parseInt(dinner_json[i]['Cal']);
      }

      document.getElementById("ldiet").innerHTML = "<center> Food items: " +  lfood + "<br>Calorie Total: " + lcal_total+"</center><br>";
      document.getElementById("bdiet").innerHTML = "<center> Food items: " +  bfood + "<br>Calorie Total: " + bcal_total+"</center><br>";
      document.getElementById("sdiet").innerHTML = "<center> Food items: " +  sfood + "<br>Calorie Total: " + scal_total+"</center><br>";
      document.getElementById("ddiet").innerHTML = "<center> Food items: " +  dfood + "<br>Calorie Total: " + dcal_total+"</center><br>";

    }
  }


}