
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
    {!! Html::style('css/manafin.css') !!}
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

    <div style="width:100%;padding:8px;background:url('image/index-background.png');background-repeat: no-repeat;background-size:100% 100%;">
    <div class="row">
    <div class="col-lg-4 col-lg-offset-8 col-md-8 col-md-offset-4 col-sm-10 col-sm-offset-2 col-xs-12 col-xs-offset-0">
      <div id="contact-form">
  	<div>
  		<h1>ค้นหาโปรโมชั่นสินเชื่อกู้บ้าน</h1>
  		<h4 style="color:#BEBEBE;">บอกความต้องการของคุณมาได้เลย</h4>
      <h4 style="color:#BEBEBE;">เราจะหาโปรโมชันที่เหมาะกับคุณที่สุด มาให้คุณเอง</h4>
  	</div>
            {{ Form::open(array('url'=>'callWebService', 'id'=>'promotion_form')) }}
            <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                    <select name="property" class="form-control selectpicker">
                        <option value="" selected="selected">*ประเภทสินทรัพย์</option>
                        <option value="1">บ้านเดี่ยว</option>
                        <option value="2">บ้านแฝด</option>
                        <option value="3">ทาวน์เฮ้าส์</option>
                        <option value="4">ทาวน์โฮม</option>
                        <option value="5">ห้องชุดพักอาศัย</option>
                        <option value="6">คอนโด</option>
                        <option value="7">อาคารพานิชย์</option>
                        <option value="8">โฮมออฟฟิศ</option>
                        <option value="9">บ้านมือสอง</option>
                    </select>
                  </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i style="font-size:20px" class="fa fa-btc"></i></i></span>
                <input type="text" class="form-control" placeholder="*ราคาสินทรัพย์ (บาท)" id="property_price" name="property_price">
              </div>
            </div>
            <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                    <select name="lend_percent" id="lend_percent" class="form-control selectpicker">
                      <option value="" selected="selected">*ต้องการกู้กี่ %</option>
                      <option value="1">100%</option>
                      <option value="2">90%</option>
                      <option value="3">80%</option>
                      <option value="4">70%</option>
                    </select>
                </div>
          </div>
          <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-list"></i></span>
                  <select name="year" class="form-control selectpicker">
                      <option value="" selected="selected">*ต้องการกู้กี่ปี</option>
                      <option value="5">5 ปี</option>
                      <option value="10">10 ปี</option>
                      <option value="15">15 ปี</option>
                      <option value="20">20 ปี</option>
                      <option value="25">25 ปี</option>
                      <option value="30">30 ปี</option>
                    </select>
                  </div>
            </div>
            <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                    <select name="condition" class="form-control selectpicker">
                        <option value="" selected="selected">*ประกัน MRTA</option>
                        <option value="1">รับ</option>
                        <option value="2">ไม่รับ</option>
                      </select>
                    </div>
              </div>

            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h5 class="panel-title">
                    <a data-toggle="collapse" href="#collapse1">กรอกข้อมูลเพิ่มเติม</a>
                  </h5>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list"></i></span>
                            <select name="career" class="form-control selectpicker">
                              <option selected="selected">อาชีพ</option>
                              <option value="1">แพทย์</option>
                              <option value="2">สัตวแพทย์</option>
                              <option value="3">ทันตแพทย์</option>
                              <option value="4">เภสัชกร</option>
                              <option value="5">ผู้พิพากษา</option>
                              <option value="6">นักบินพานิชย์</option>
                              <option value="7">ข้าราชการ</option>
                              <option value="8">รัฐวิสาหกิจ</option>

                            </select>
                          </div>
                    </div>
                    <!--div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list"></i></span>
                            <select name="characterize_career" class="form-control selectpicker">
                              <option selected="selected">ลักษณะอาชีพ</option>
                              <option>วิศวกร</option>
                              <option>แพทย์</option>
                              <option>พยาบาล</option>
                              <option>เภสัชกร</option>
                              <option>พนักงานขาย</option>
                              <option>สถาปนิก</option>
                              <option>ครู/อาจารย์</option>
                              <option>ตำรวจ/ทหาร</option>
                              <option>ทนายความ</option>
                              <option>ผู้พิพากษา/อัยการ</option>
                              <option>อืนๆ</option>
                            </select>
                          </div>
                    </div-->
                    <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i style="font-size:20px" class="fa fa-btc"></i></span>
                          <input type="text" class="form-control" placeholder="เงินเดือน (บาท)" id="salary" name="salary">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i style="font-size:20px" class="fa fa-btc"></i></span>
                          <input type="text" class="form-control" placeholder=" ผ่อนที่อยู่อาศัยเดือนละ (บาท)" id="mortgage" name="mortgage">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i style="font-size:20px" class="fa fa-btc"></i></span>
                          <input type="text" class="form-control" placeholder="ผ่อนรถเดือนละ (บาท)" id="car_installment" name="car_installment">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i style="font-size:20px" class="fa fa-btc"></i></span>
                          <input type="text" class="form-control" placeholder="ผ่อนบัตรเครดิตเดือนละ (บาท)" id="credit_installment" name="credit_installment">
                        </div>
                    </div>

                  </div>
                </div>
              </div>
          </div>
            <input type="submit" id="find_promotion" class="btn center-block" value="ค้าหาโปรโมชั่นเลย">
            {{ Form::close() }}

    </div>
    </div>
    </div>
    </div>

    <div class="container">
    <br>
    <br>
            <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Manafin Services</h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i style="opacity: 0.7;color:#62b29e;" class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-dollar fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Service One</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i style="opacity: 0.7;color:#62b29e;" class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-bar-chart fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Service Two</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i style="opacity: 0.7;color:#62b29e;" class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-pie-chart fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Service Three</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i style="opacity: 0.7;color:#62b29e;" class="fa fa-circle fa-stack-2x text-success"></i>
                              <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Service Four</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h4 class=media-heading>Manafin คืออะไร?</h4>
        <div class="row">
        <div class="col-lg-6 col-md-9 col-sm-12 center-block">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/sBwQ8CLwwNg" frameborder="0" allowfullscreen></iframe>
        </div>
        </div>
        </div>



       <br>
       <br>
        <h4 class=media-heading>Topic 1</h4> <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
       <br>
    <br>
        <h4 class=media-heading>Topic 2</h4> <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>

        <br>
    <br>

        <h4 class=media-heading>Topic 3</h4> <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>


    </div> <!-- /container -->

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

    $(document).ready(function() {

      // set text value in lend_percent option on page refresh
      var oneHundredPercent = (parseInt($("#property_price").val())*1).toString();
      var ninetyPercent = (parseInt($("#property_price").val())*0.9).toString();
      var eightyPercent = (parseInt($("#property_price").val())*0.8).toString();
      var seventyPercent = (parseInt($("#property_price").val())*0.7).toString();

      $("#lend_percent option[value='1']").text('100% '+'( '+oneHundredPercent+' )');
      $("#lend_percent option[value='2']").text('90% '+'( '+ninetyPercent+' )');
      $("#lend_percent option[value='3']").text('80% '+'( '+eightyPercent+' )');
      $("#lend_percent option[value='4']").text('70% '+'( '+seventyPercent+' )');

      // set text value in lend_percent option on input change
      $("#property_price").change(function() {
        var oneHundredPercent = (parseInt($("#property_price").val())*1).toString();
        var ninetyPercent = (parseInt($("#property_price").val())*0.9).toString();
        var eightyPercent = (parseInt($("#property_price").val())*0.8).toString();
        var seventyPercent = (parseInt($("#property_price").val())*0.7).toString();

        $("#lend_percent option[value='1']").text('100% '+'( '+oneHundredPercent+' )');
        $("#lend_percent option[value='2']").text('90% '+'( '+ninetyPercent+' )');
        $("#lend_percent option[value='3']").text('80% '+'( '+eightyPercent+' )');
        $("#lend_percent option[value='4']").text('70% '+'( '+seventyPercent+' )');
      });



      // validation input data
    $('#promotion_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
          property: {
              validators: {
                  notEmpty: {
                      message: 'กรุณาเลือกประเภทสินทรัพย์'
                  }
              }
          },
            property_price: {
                validators: {
                    // stringLength: {
                    //    min: 4,
                  //  },
                    integer: {
                        message: 'กรุณากรอกเฉพาะตัวเลข'
                    },
                    notEmpty: {
                        message: 'กรุณากรอกราคาราสินทรัพย์ที่ต้องการกู้'
                    }
                }
            },
            lend_percent: {
                validators: {
                    notEmpty: {
                        message: 'กรุณาเลือกเปอเซนตในการกู้์'
                    }
                }
            },
            year: {
                validators: {
                    notEmpty: {
                        message: 'กรุณาเลือกจำนวนปีที่ต้องการกู้'
                    }
                }
            },
            condition: {
                validators: {
                    notEmpty: {
                        message: 'กรุณาระบุการรับการคุ้มครองประกัน MRTA'
                    }
                }
            },

            }
        });
        /*.on('success.form.bv', function(e) {
            // Do something ...
                $('#promotion_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });*/

      //end validation input data
});



    </script>

  </body>
</html>
