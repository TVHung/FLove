<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FLove</title>
  <link rel="shortcut icon" type="image/png" href="source/img/logoflove.png"/>


  <!-- Bootstrap Core CSS -->
  <link href="source/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <base href="<?php echo e(asset('')); ?>">
  <!-- Fonts -->
  <link href="source/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="source/css/animate.css" rel="stylesheet" />
  <!-- Squad theme CSS -->
  <link href="source/css/style.css" rel="stylesheet">
  <link href="source/color/default.css" rel="stylesheet">
  <!--Midnights css -->
  <link href="source/css/Midnights.css" rel="stylesheet">

  <link rel="stylesheet" href="source/css/FaStyle.css">
  
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <!-- Preloader -->
  <div id="preloader">
    <div id="load"></div>
  </div>

  <?php echo $__env->make('home.user_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



  <!-- Core JavaScript Files -->
  <script src="source/js/jquery.min.js"></script>
  <script src="source/js/bootstrap.min.js"></script>
  <script src="source/js/jquery.easing.min.js"></script>
  <script src="source/js/jquery.scrollTo.js"></script>
  <script src="source/js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="source/js/custom.js"></script>
  <script src="source/contactform/contactform.js"></script>
  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FLove - Expeter</title>

  <!-- Bootstrap Core CSS -->
  <link href="source/css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <!-- Fonts -->
  <link href="source/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="source/css/animate.css" rel="stylesheet" />
  <!-- Squad theme CSS -->
  <link href="source/css/style.css" rel="stylesheet">
  <link href="source/color/default.css" rel="stylesheet">
  <!-- FaTeam css -->
  
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="background-color: #40B2D2;">
  <div class="container">
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                  <i class="fa fa-bars"></i>
              </button>
      <a class="navbar-brand" href="<?php echo e(route('home.index')); ?>">
        
        <img src="source/img/logoflove.png" alt="">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo e(route('home.index')); ?>">Home</a></li>
        <li ><a href="<?php echo e(route('expeter_list.index')); ?>">Expecter</a></li>
        <li><a href="<?php echo e(route('hc_list.index')); ?>">Heart's choice</a></li>
      <li><a href="<?php echo e(route('logout')); ?>">Logout</a></li>
        
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>


  <section id="about" class="home-section text-center" style="margin-bottom:-100px;">
    <div class="heading-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2>Couple</h2>
                <i class="fa fa-2x fa-angle-down"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

   <!-- Section: services -->
   <div class="li-main-blog-page pt-60 pb-55" style="margin:auto;">
    <div class="container" style="background-color: beige;padding: 30px 20px">
        <div class="row">
            
            <div class="col-md-5">
                <div class="img_to_show">
                  <img src="avatar/<?php echo e($user->id); ?>.jpg" alt="" >
                  <div class="gra"></div>
                </div>
            </div>
            <!-- end filter area -->
                <div class="col-md-7">
                    <h2 class="text_right" style="margin-left:10%"><?php echo e($infor->name); ?></h2>
                    <table class="text-left"  style="margin-left: 10%;">
                        <tr>
                          <td style="font-size: 18px; width:250px; height: 30px">Your account:</td>
                          <td style="font-size: 18px; width:250px; height: 30px"><?php echo e($user->name); ?></td>
                        </tr>
                        <tr>
                          <td style="font-size: 18px; width:250px; height: 30px">Sex:</td>
                          <td style="font-size: 18px; width:250px; height: 30px"><?php echo e($infor->sex); ?></td>
                        </tr>
                        <tr>
                          <td style="font-size: 18px; width:250px; height: 30px">Date of birth:</td>
                          <td style="font-size: 18px; width:250px; height: 30px"><?php echo e($infor->date); ?></td>
                        </tr>
                        <?php if($infor->sex == "Fe_Male"): ?>
                        <tr>
                          <td style="font-size: 18px; width:250px; height: 30px">Rounds:</td>
                          <td style="font-size: 18px; width:250px; height: 30px"><?php echo e($measure->mea1); ?> & <?php echo e($measure->mea2); ?> & <?php echo e($measure->mea3); ?></td>
                        </tr>
                        <?php endif; ?>
                        <tr>
                          <td style="font-size: 18px; width:250px; height: 30px">Age:</td>
                          <td style="font-size: 18px; width:250px; height: 30px"><?php echo e($infor->age); ?></td>
                        </tr>
                        <tr>
                          <td style="font-size: 18px; width:250px; height: 30px">Weight:</td>
                          <td style="font-size: 18px; width:250px; height: 30px"><?php echo e($infor->weight); ?> kg</td>
                        </tr>
                        <tr>
                          <td style="font-size: 18px; width:250px; height: 30px">Height:</td>
                          <td style="font-size: 18px; width:250px; height: 30px"><?php echo e($infor->height); ?> m</td>
                        </tr>
                        <tr>
                          <td style="font-size: 18px; width:250px; height: 30px">Phone number:</td>
                          <td style="font-size: 18px; width:250px; height: 30px"><?php echo e($infor->phonenumber); ?></td>
                        </tr>
                        <tr>
                          <td style="font-size: 18px; width:250px; height: 30px">Email:</td>
                          <td style="font-size: 18px; width:250px; height: 30px"><?php echo e($infor->email); ?></td>
                        </tr>
                        <tr>
                          <td style="font-size: 18px; width:250px; height: 30px">Facebook:</td>
                          <td style="font-size: 18px; width:250px; height: 30px"><?php echo e($infor->facebook); ?></td>
                        </tr>
                        <tr>
                          <td style="font-size: 18px; width:250px; height: 30px">Hobby:</td>
                          <td style="font-size: 18px; width:250px; height: 30px"><?php echo e($infor->hobby); ?></td>
                        </tr>
                        <tr>
                          <td style="font-size: 18px; width:250px; height: 30px">Adress:</td>
                          <td style="font-size: 18px; width:250px; height: 30px"><?php echo e($infor->address); ?></td>
                        </tr>
                        <tr>
                          <td style="font-size: 18px; width:250px; height: 30px">State:</td>
                          <td style="font-size: 18px; width:250px; height: 30px"><?php echo e($infor->state); ?></td>
                        </tr>
                        <tr>
                          <td style="font-size: 18px; width:250px; height: 30px">Company:</td>
                          <td style="font-size: 18px; width:250px; height: 30px"><?php echo e($job->company); ?></td>
                        </tr>
                        <tr>
                          <td style="font-size: 18px; width:250px; height: 30px">Position:</td>
                          <td style="font-size: 18px; width:250px; height: 30px"><?php echo e($job->position); ?></td>
                        </tr>
                        <tr>
                          <td style="font-size: 18px; width:250px; height: 30px">Salary:</td>
                          <td style="font-size: 18px; width:250px; height: 30px"><?php echo e($job->salary); ?>$/month</td>
                        </tr>
                        <?php if($infor_couple != null): ?>
                        <tr>
                          <td style="font-size: 18px; width:250px; height: 30px">Couple with:</td>
                          <td style="font-size: 18px; width:250px; height: 30px"><?php echo e($infor_couple->name); ?></td>
                        </tr>
                        <?php endif; ?>

                    </table>
                </div>
            <!-- Result Area -->

            <!-- Li's Main Content Area End Here -->
        </div>
    </div>
</div>

<div class="container">
    <div class="row" style="margin-top:20px;">
        <div class="col-md-6 text-center" style="margin-bottom:30px;">
        <a name="" id="Midnights" class="btn btn-success " href="<?php echo e(route('information')); ?>" role="button">Back</a>
        </div>
        
        <div class="col-md-6 text-center" style="margin-bottom:30px;">
        <a name="" id="Midnights2" class="btn btn-success " href="<?php echo e(route('break')); ?>" role="button">Break</a>
        </div>
    </div>
</div>

<!-- /Section: services -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="wow shake" data-wow-delay="0.4s">
            <div class="page-scroll marginbot-30">
              <a href="#intro" id="totop" class="btn btn-circle">
              <i class="fa fa-angle-double-up animated"></i>
            </a>
            </div>
          </div>
          <p>&copy;FLove! OnLy Love</p>
          <div class="credits">
            Designed by <a href="https://www.facebook.com/uninkute.can" target="_blank">LoiIn</a>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Core JavaScript Files -->
  <script src="source/js/jquery.min.js"></script>
  <script src="source/js/bootstrap.min.js"></script>
  <script src="source/js/jquery.easing.min.js"></script>
  <script src="source/js/jquery.scrollTo.js"></script>


  
  <script src="source/js/expeter.js"></script>
  <script src="source/js/me.js"></script>
  <script src="source/js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="source/js/custom.js"></script>
  <script src="source/contactform/contactform.js"></script>

  

  <!-- Custom scripts for all pages-->
  <script src="source/login/js/sb-admin.min.js"></script>
  <script src="source/login/vendor/jquery/jquery.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="source/login/js/demo/datatables-demo.js"></script>

  <script src="source/login/vendor/datatables/jquery.dataTables.js"></script>
  <script src="source/login/vendor/datatables/dataTables.bootstrap4.js"></script>

</body>

</html><?php /**PATH D:\xampp\htdocs\f_love\resources\views/request/couple.blade.php ENDPATH**/ ?>