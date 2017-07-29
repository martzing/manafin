
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

    <style type="text/css">
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
      <br><br><br><br><br><br><br>
      <div>
        <canvas id="myChart" height="400" width="600"></canvas>
      </div>
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




    {!! Html::script('jQuery/jquery-2.2.3.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
<script>
  var resultDataJson = {!! json_encode($resultData) !!};
  //console.log(resultDataJson);
  var resultData = resultDataJson['data'];
  // sort data
  resultData.sort(function(a, b) {
    return a.avg_payment.month3 < b.avg_payment.month3;
  });
  //resultData.sort();
  console.log(resultData);
  var bankNameList = [];
  var averagePaymentList = [];
  var backgroundColorList = [];

  // set data for draw chart
  $.each( resultData, function( key, value ) {
  bankNameList.push(value.bank_name);
  averagePaymentList.push(parseInt(value.avg_payment.month3*100000));
  backgroundColorList.push(getBackgroundColorByBankName(value.bank_name));
  });


  // draw bar chart
  var ctx = document.getElementById("myChart");
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
    labels: bankNameList,
    datasets: [{
    label: 'โปรโมชั่น',
    data: averagePaymentList,
    backgroundColor: backgroundColorList
              }]
          },
    options:{
      //onClick: function(e){},
      scales: {
       yAxes: [{
         scaleLabel: {
           display: true,
           labelString: 'ยอดผ่อนต่อเดือน ([บาท])'
           //ticks: {
           //        beginAtZero:true
           }
       }]
   },
   legend:{
      display:true
   }}});

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
