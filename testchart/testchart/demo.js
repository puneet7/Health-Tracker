$(document).ready(function () {
   
//     var a = [1, 2, 3];
//     var data = {
//         labels: ["January", "February", "March", "April", "May", "June", "July"],
//         datasets: [
//             {
//                 label: "My First dataset",
//                 fill: false,
//                 lineTension: 0.1,
//                 backgroundColor: "rgba(75,192,192,0.4)",
//                 borderColor: "rgba(75,192,192,1)",
//                 borderCapStyle: 'butt',
//                 borderDash: [],
//                 borderDashOffset: 0.0,
//                 borderJoinStyle: 'miter',
//                 pointBorderColor: "rgba(75,192,192,1)",
//                 pointBackgroundColor: "#fff",
//                 pointBorderWidth: 1,
//                 pointHoverRadius: 5,
//                 pointHoverBackgroundColor: "rgba(75,192,192,1)",
//                 pointHoverBorderColor: "rgba(220,220,220,1)",
//                 pointHoverBorderWidth: 2,
//                 pointRadius: 1,
//                 pointHitRadius: 10,
//                 data: [65, 59, 80, 81, 56, 55, 40],
//                 spanGaps: false,
//             }
//         ]
//     };

// // Chart.types.Bar.extend({
// //     name: "BarAlt",
// //     draw: function(){
// //         this.options.barValueSpacing = this.chart.width / 5;
// //         Chart.types.Bar.prototype.draw.apply(this, arguments);
// //     }
// // });
    
//     var ctx = $("#myChart2").get(0).getContext("2d");
//     var myLineChart = new Chart(ctx, {
//         type: 'line',
//         data: data,
//         options: options
//     });

//     var ctx = $("#myChart1").get(0).getContext("2d");
//     var myLineChart = Chart.Line(ctx, {
//         data: data,
//         options: options
//     });



var myElement = document.getElementById("visitors-graph").getContext("2d"),
    lineChartData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        datasets: [{
            fillColor: "rgba(0,0,0,0)",
            strokeColor: "rgba(197,115,30,1)",
            pointColor: "#c5731e",
            pointStrokeColor: "#c5731e",
            data: [65, 59, 90, 81, 56, 55, 40]
        }, {
            fillColor: "rgba(0,0,0,0)",
            strokeColor: "rgba(197,171,30,1)",
            pointColor: "#c5ab1e",
            pointStrokeColor: "#c5ab1e",
            data: [28, 48, 40, 19, 96, 27, 100]
        }]
    }, options = {  
        scaleFontColor: "#f00",
        datasetStrokeWidth: 5
    };

// Draw Visitors Graph Line
var myLine = new Chart(myElement).Line(lineChartData, options);



});