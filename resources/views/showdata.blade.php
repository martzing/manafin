
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Manafin</title>

    <!-- Bootstrap core CSS -->
    {!! Html::style('css/bootstrap-grid.css') !!}
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::script('ChartJs/dist/Chart.bundle.js') !!}
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Prompt">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {!! Html::script('jQuery/jquery-3.2.1.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}

    <style type="text/css">
    <style type="text/css">

      @media (min-width: 992px) {
         #userInformation{
             margin-left:20%;
           }
         }
      @media (min-width: 768px) {
        #userInformation{
            margin-left:15%;
            }
        }
      body {
        font-family: 'Prompt', serif;
      }
      .footer {
        background: #f5f5f5;;
        padding: 10px 0;
      }
      .footer a {
        color: #70726F;
        font-size: 20px;
        padding: 10px;
        transition: all .5s ease;
      }
      .footer a:hover {
        color: white;
      }
      canvas {
          -moz-user-select: none;
          -webkit-user-select: none;
          -ms-user-select: none;
      }
  </style>

  </head>

  <body>

    <!-- Fixed navbar -->
    <<?php $informationStringArray = array('property' => 'ประเภทสินทรัพย์',
                                           'property_price' => 'ราคาสินทรัพย์',
                                           'lend_amount' => 'จำนวนเงินที่กู้',
                                           'year' => 'จำนวนปีที่กู้',
                                           'condition' => 'ประกัน MRTA'
                                          ); ?>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Manafin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <!--ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul-->
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">About Us</a></li>
            <li><a href="../navbar-static-top/">Contract Us</a></li>
            <li><a href="../navbar-static-top/">Login</a></li>
            <!--li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <br>
      <br>
      <br>
<div class="row">
<div class="col-lg-5 col-md-6 col-sm-8 col-xs-12">
<!--panel-->
<div id="userInformation" style="border-color:#62b29e;" class="panel panel-primary">

    <!-- Default panel contents -->
    <div style="background-color:#62b29e;border-color:#62b29e;" class="panel-heading"><h4>User Information</h4></div>
    <div class="panel-body">
        <!--table-->
        <table class="table table-condensed">
              <?php foreach ($allDataArray['userInformation'] as $key => $value): ?>
                  <tr>
                    <th>{{ $informationStringArray[$key] }}</th>
                    <td>{{ $value }}</td>
                  </tr>
              <?php endforeach; ?>
        </table>
        <!--end of table-->
    </div>
    </div>
  </div>
  </div>


      <div>
        <canvas id="myChart" height="400" width="600"></canvas>
      </div>
      <select id="installment" class="form-control selectpicker">
          <option value="ยอดผ่อนต่อเดือน3เดือนแรก" selected="selected">ยอดผ่อนต่อเดือน3เดือนแรก</option>
          <option value="ยอดผ่อนต่อเดือน6เดือนแรก">ยอดผ่อนต่อเดือน6เดือนแรก</option>
          <option value="ยอดผ่อนต่อเดือน1ปีแรก">ยอดผ่อนต่อเดือน1ปีแรก</option>
          <option value="ยอดผ่อนต่อเดือน2ปีแรก">ยอดผ่อนต่อเดือน2ปีแรก</option>
          <option value="ยอดผ่อนต่อเดือน3ปีแรก">ยอดผ่อนต่อเดือน3ปีแรก</option>
          <option value="ยอดผ่อนต่อเดือนตลอดสัญญา">ยอดผ่อนต่อเดือนตลอดสัญญา</option>
      </select>
    </div> <!-- /container -->

    <footer class="footer">
      <div class="container text-center">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-skype"></i></a>
      </div>
    </footer>

<script>
  var resultDataJson = {!! json_encode($allDataArray['resultData']) !!};
  var resultData = resultDataJson['data'];

  //console.log(resultData);
  // sort data
  resultData = bubbleSortJsonData(resultData, 'month3');
  console.log(resultData);

  var dataLength = 0;
  if(resultData.length>=10){
    dataLength = 10;
  }else{
    dataLength = resultData.length;
  }

  // set data to draw
  var dataSetJson = setDataToDraw(resultData, 'month3', dataLength);
  //console.log(dataSetJson);

  // draw bar chart
  var ctx = document.getElementById("myChart");
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
    labels: dataSetJson.labelList,
    datasets: [{
    label: $("#installment").val(),
    data: dataSetJson.dataList,
    backgroundColor: dataSetJson.backgroundColorList
              }]
          },
    options:{
      //onClick: function(e){},
      scales: {
       yAxes: [{
         scaleLabel: {
           display: true,
           labelString: 'ยอดผ่อนต่อเดือน (บาท)'
         },
         ticks: {
                   beginAtZero:true
           }
       }]
   },
   legend:{
      display:true
   }}});


   $("#installment").change(function(){

    if($("#installment").val() == 'ยอดผ่อนต่อเดือน3เดือนแรก'){
      var sortBy = 'month3';
    }else if($("#installment").val() == 'ยอดผ่อนต่อเดือน6เดือนแรก'){
      var sortBy = 'month6';
    }else if($("#installment").val() == 'ยอดผ่อนต่อเดือน1ปีแรก'){
      var sortBy = 'month12';
    }else if($("#installment").val() == 'ยอดผ่อนต่อเดือน2ปีแรก'){
      var sortBy = 'month24';
    }else if($("#installment").val() == 'ยอดผ่อนต่อเดือน3ปีแรก'){
      var sortBy = 'month36';
    }else if($("#installment").val() == 'ยอดผ่อนต่อเดือนตลอดสัญญา'){
      var sortBy = 'all';
    }
    var label = $("#installment").val();
    resultData = bubbleSortJsonData(resultData, sortBy);
    dataSetJson = setDataToDraw(resultData, sortBy, dataLength);
    reDrawChart(myChart, dataSetJson.labelList, dataSetJson.dataList, dataSetJson.backgroundColorList, label);
   });


   function bubbleSortJsonData(data, sortBy){
       for (var i = 0; i < data.length; i++) {
         for(var j=0; j < data.length - 1; j++){
           if (data[j].avg_payment[sortBy] > data[j + 1].avg_payment[sortBy]) {
             var a = data[j];
             var b = data[j + 1];
            data[j] = b;
        data[j + 1] = a;
          }
        }
      }
  return data;
}


  function setDataToDraw(resultData, sortBy, dataLength){
    var bankNameList = [];
    var averagePaymentList = [];
    var backgroundColorList = [];
    //var dataLength = 0;

    for( var i = 0; i<dataLength; i++){
      bankNameList.push(resultData[i]['bank_name'].split('ธนาคาร'));
      averagePaymentList.push(parseInt(resultData[i].avg_payment[sortBy]));
      backgroundColorList.push(getBackgroundColorByBankName(resultData[i].bank_name));
    }
    return { 'labelList':bankNameList, 'dataList':averagePaymentList, 'backgroundColorList':backgroundColorList };
  }

   function reDrawChart(chart, newLabelList, newData, newBackgroundColor, newLabel) {
    chart.data.labels = newLabelList;
    chart.data.datasets[0].data = newData;
    chart.data.datasets[0].backgroundColor = newBackgroundColor;
    chart.data.datasets[0].label = newLabel;
    chart.update();
  }

   function getBackgroundColorByBankName(bankName){
     // this function return rgba string
     var backgroundColorJson = {'ธนาคารออมสิน':'rgba(235, 12, 141, 1)',
                                'ธนาคารกรุงศรีอยุธยา':'rgba(249, 195, 62, 1)',
                                'ธนาคารเกียรตินาคิน':'rgba(0, 155, 201, 1)',
                                'ธนาคารยูโอบี':'rgba(0, 55, 123, 1)',
                                'ธนาคารแลนด์แอนด์เฮ้าส์':'rgba(109, 110, 112, 1)',
                                'ธนาคารอาคารสงเคราะห์':'rgba(245, 130, 32, 1)',
                                'ธนาคารกสิกรไทย':'rgba(51, 168, 80, 1)',
                                'ธนาคารทหารไทย':'rgba(18, 80, 155, 1)',
                                'ธนาคารไทยพาณิชย์':'rgba(81, 50, 130, 1)',
                                'ธนาคารธนชาต':'rgba(243, 126, 49, 1)',
                                'ธนาคารกรุงไทย':'rgba(91, 186, 232, 1)',
                                'ธนาคารกรุงเทพ':'rgba(0, 39, 129, 1)',
                                'ธนาคารซีไอเอ็มบีไทย':'rgba(124, 2, 27, 1)'};
    return backgroundColorJson[bankName];
   }
</script>
</body>
</html>
