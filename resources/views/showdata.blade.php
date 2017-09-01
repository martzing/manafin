
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
    {!! Html::style('css/widget/variable.css') !!}
    {!! Html::style('css/widget/style.css') !!}
    {!! Html::style('css/manafin.css') !!}
    {!! Html::script('ChartJs/dist/Chart.bundle.js') !!}
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Prompt">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    {!! Html::style('css/bank-carousel.css') !!}

    {!! Html::script('jQuery/jquery-3.2.1.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/bank-carousel.js') !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>

    <style>
    body {
      font-family: 'Prompt', serif;
      background-color: #f2f2f2;
    }


    </style>


  </head>

  <body>

    <!-- Fixed navbar -->
    <<?php $informationStringArray = array('property' => 'ประเภทสินทรัพย์',
                                           'property_price' => 'ราคาสินทรัพย์',
                                           'lend_amount' => 'จำนวนเงินที่กู้',
                                           'year' => 'จำนวนปีที่กู้',
                                           'condition' => 'ประกัน MRTA',
                                           'career' => 'อาชีพ'
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
    <div style="background-color:#62b29e;border-color:#62b29e;font-weight: bold;" class="panel-heading">User Information</div>
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

  <div class="row">
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-3">
      <select id="installment" class="form-control selectpicker">
          <option value="ยอดผ่อนต่อเดือน3เดือนแรก" selected="selected">ยอดผ่อนต่อเดือน3เดือนแรก</option>
          <option value="ยอดผ่อนต่อเดือน6เดือนแรก">ยอดผ่อนต่อเดือน6เดือนแรก</option>
          <option value="ยอดผ่อนต่อเดือน1ปีแรก">ยอดผ่อนต่อเดือน1ปีแรก</option>
          <option value="ยอดผ่อนต่อเดือน2ปีแรก">ยอดผ่อนต่อเดือน2ปีแรก</option>
          <option value="ยอดผ่อนต่อเดือน3ปีแรก">ยอดผ่อนต่อเดือน3ปีแรก</option>
          <option value="ยอดผ่อนต่อเดือนตลอดสัญญา">ยอดผ่อนต่อเดือนตลอดสัญญา</option>
      </select>
    </div>
  </div>
      <div>
        <canvas id="myChart" height="400" width="600"></canvas>
      </div>
      <br>
      <div id="showList">
      </div>
    </div>

    <div class="carouel-style">
    <div class="container">
      <div class="row">
        <h3 class="title-header">รวมโปรโมชั่นจากธนาคารชั้นนำ</h3>
        <div class="owl-carousel">
            <div><img class="bank-img" src="image/bank_logo/BAY.png" alt=""></div>
            <div><img class="bank-img" src="image/bank_logo/BBL.png" alt=""></div>
            <div><img class="bank-img" src="image/bank_logo/CIMB.png" alt=""></div>
            <div><img class="bank-img" src="image/bank_logo/GH.png" alt=""></div>
            <div><img class="bank-img" src="image/bank_logo/GSB.png" alt=""></div>
            <div><img class="bank-img" src="image/bank_logo/KBANK.png" alt=""></div>
            <div><img class="bank-img" src="image/bank_logo/KK.png" alt=""></div>
            <div><img class="bank-img" src="image/bank_logo/KTB.png" alt=""></div>
            <div><img class="bank-img" src="image/bank_logo/LH.png" alt=""></div>
            <div><img class="bank-img" src="image/bank_logo/SCB.png" alt=""></div>
            <div><img class="bank-img" src="image/bank_logo/TMB.png" alt=""></div>
            <div><img class="bank-img" src="image/bank_logo/TNC.png" alt=""></div>
            <div><img class="bank-img" src="image/bank_logo/UOB.png" alt=""></div>
          </div>
      </div>
    </div>
  </div>

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
  if(resultData.length>10){
    dataLength = 10;
  }else{
    dataLength = resultData.length;
  }

  // set data to draw
  var dataSetJson = setDataToDraw(resultData, 'month3', dataLength);
  //console.log(dataSetJson);

  // draw bar chart
  Chart.defaults.global.defaultFontFamily = 'Prompt';
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
      display:false,
   }}});



   // show data list
  printInformationRank(resultData, dataLength);

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
    $("#showList").empty();
    printInformationRank(resultData, dataLength);
   });


  function setDataToDraw(resultData, sortBy, dataLength){
    var bankNameList = [];
    var averagePaymentList = [];
    var backgroundColorList = [];

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

  function printInformationRank(resultData, dataLength){

      for( var i = 0; i<dataLength; i++){

        var bankName = resultData[i].bank_name;
        var bankLogo = getBankLogoByBankName(bankName);
        var backgroundColor = getBackgroundColorAlphaByBankName(bankName);
        var averagePaymentByThreeMonth = parseInt(resultData[i].avg_payment['month3']);
        var averagePaymentBySixMonth = parseInt(resultData[i].avg_payment['month6']);
        var averagePaymentByTwelveMonth = parseInt(resultData[i].avg_payment['month12']);
        var averagePaymentByTwentyFourMonth = parseInt(resultData[i].avg_payment['month24']);
        var averagePaymentByThirtySixMonth = parseInt(resultData[i].avg_payment['month36']);
        var allAveragePayment = parseInt(resultData[i].avg_payment['all']);

        $("#showList").append(
          "<div class=\"row\">"+
          "<div class=\"col-md-12\">"+
          "<div class=\"box-widget\">"+
             "<div style=\"background-color:"+backgroundColor+"\" class=\"profile-head\">"+
               "<div class=\"image-profile\">"+
                 "<img src=\"image/bank_logo/"+bankLogo+"\" class=\"image\" alt=\"user1\">"+
               "</div>"+
               "<div class=\"profile-name\">"+
                 "<h3 class=\"username\">อันดับที่ "+(i+1)+"</h3>"+
                 "<h5 class=\"role\">"+bankName+"</h5>"+
               "</div>"+
             "</div>"+
             "<div class=\"box-footer\">"+
               "<ul class=\"nav nav-stacked\">"+
                 "<li><a href=\"#\" class=\"main-fontcolor\">ยอดผ่อนต่อเดือน3เดือนแรก<span class=\"badge bg-aqua pull-right\">"+averagePaymentByThreeMonth+"</span></a></li>"+
                 "<li><a href=\"#\" class=\"main-fontcolor\">ยอดผ่อนต่อเดือน6เดือนแรก<span class=\"badge bg-aqua pull-right\">"+averagePaymentBySixMonth+"</span></a></a></li>"+
                 "<li><a href=\"#\" class=\"main-fontcolor\">ยอดผ่อนต่อเดือน1ปีแรก<span class=\"badge bg-aqua pull-right\">"+averagePaymentByTwelveMonth+"</span></a></a></li>"+
                 "<li><a href=\"#\" class=\"main-fontcolor\">ยอดผ่อนต่อเดือน2ปีแรก<span class=\"badge bg-aqua pull-right\">"+averagePaymentByTwentyFourMonth+"</span></a></a></li>"+
                 "<li><a href=\"#\" class=\"main-fontcolor\">ยอดผ่อนต่อเดือน3ปีแรก<span class=\"badge bg-aqua pull-right\">"+averagePaymentByThirtySixMonth+"</span></a></a></li>"+
                 "<li><a href=\"#\" class=\"main-fontcolor\">ยอดผ่อนต่อเดือนตลอดสัญญา<span class=\"badge bg-aqua pull-right\">"+allAveragePayment+"</span></a></a></li>"+
               "</ul>"+
             "</div>"+
              "</div>"+
             "</div>"+
         "</div>"+
         "<br>"
        );
      }
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

   function getBackgroundColorAlphaByBankName(bankName){
     // this function return rgba string
     var backgroundColorJson = {'ธนาคารออมสิน':'rgba(235, 12, 141, 0.7)',
                                'ธนาคารกรุงศรีอยุธยา':'rgba(249, 195, 62, 0.7)',
                                'ธนาคารเกียรตินาคิน':'rgba(0, 155, 201, 0.7)',
                                'ธนาคารยูโอบี':'rgba(0, 55, 123, 0.7)',
                                'ธนาคารแลนด์แอนด์เฮ้าส์':'rgba(109, 110, 112, 0.7)',
                                'ธนาคารอาคารสงเคราะห์':'rgba(245, 130, 32, 0.7)',
                                'ธนาคารกสิกรไทย':'rgba(51, 168, 80, 0.7)',
                                'ธนาคารทหารไทย':'rgba(18, 80, 155, 0.7)',
                                'ธนาคารไทยพาณิชย์':'rgba(81, 50, 130, 0.7)',
                                'ธนาคารธนชาต':'rgba(243, 126, 49, 0.7)',
                                'ธนาคารกรุงไทย':'rgba(91, 186, 232, 0.7)',
                                'ธนาคารกรุงเทพ':'rgba(0, 39, 129, 0.7)',
                                'ธนาคารซีไอเอ็มบีไทย':'rgba(124, 2, 27, 0.7)'};
    return backgroundColorJson[bankName];
   }

   function getBankLogoByBankName(bankName){
     // this function return bank logo name
     var backLogoNameJson = {'ธนาคารออมสิน':'GSB.png',
                                'ธนาคารกรุงศรีอยุธยา':'BAY.png',
                                'ธนาคารเกียรตินาคิน':'KK.png',
                                'ธนาคารยูโอบี':'UOB.png',
                                'ธนาคารแลนด์แอนด์เฮ้าส์':'LH.png',
                                'ธนาคารอาคารสงเคราะห์':'GH.png',
                                'ธนาคารกสิกรไทย':'KBANK.png',
                                'ธนาคารทหารไทย':'TMB.png',
                                'ธนาคารไทยพาณิชย์':'SCB.png',
                                'ธนาคารธนชาต':'TNC.png',
                                'ธนาคารกรุงไทย':'KTB.png',
                                'ธนาคารกรุงเทพ':'BBL.png',
                                'ธนาคารซีไอเอ็มบีไทย':'CIMB.png'};
    return backLogoNameJson[bankName];
   }
</script>
</body>
</html>
