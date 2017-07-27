<!doctype html>
<html>

<head>
    <title>Bar Chart</title>
    {!! Html::script('ChartJs/dist/Chart.bundle.js') !!}
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Prompt">

    <style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style>
</head>

<body>
  <div style="width:50%">
    <canvas id="myChart" height="400" width="600"></canvas>

</div>
<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
type: 'bar',
data: {
 labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
 datasets: [{
   label: '# of Votes',
   data: [12, 19, 3, 5, 2, 3],
   backgroundColor: [
                   'rgba(255, 99, 132, 0.2)',
                   'rgba(54, 162, 235, 0.2)',
                   'rgba(255, 206, 86, 0.2)',
                   'rgba(75, 192, 192, 0.2)',
                   'rgba(153, 102, 255, 0.2)',
                   'rgba(255, 159, 64, 0.2)'
               ]
 }]
},
options:{
 onClick: function(e){
 var element = this.getElementAtEvent(e);
  //       for(var i=0;i<backgroundColor.length;i++){
  //   backgroundColor[i] = 'rgb(124, 181, 236)';
// }
//      backgroundColor[element[0]._index] = 'red';
//   this.update()
alert(element[0]._model.label)
console.log(element)
 },
 scales: {
     yAxes: [{
         ticks: {
             beginAtZero:true
         }
     }]
 },
legend:{
   display:true
 }
}
});
</script>
</body>

</html>
