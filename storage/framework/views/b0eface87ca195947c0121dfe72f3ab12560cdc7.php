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

  <!-- Fonts -->
  <link href="source/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="source/css/animate.css" rel="stylesheet" />
  <!-- Squad theme CSS -->
  <link href="source/css/style.css" rel="stylesheet">
  <link href="source/color/default.css" rel="stylesheet">
  <!-- FaTeam css -->
  <link href="source/css/FaStyle.css" rel="stylesheet" type="text/css">
  <!-- Midnights css -->
  <link href="source/css/Midnights.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <!-- Preloader -->
  <div id="preloader">
    <div id="load"></div>
  </div>

  <?php echo $__env->make('expeter.head_expeter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- Section: services -->
 <section id="service" class="home-section text-center bg-gray">

    <div class="heading-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2>Result</h2>
                <i class="fa fa-2x fa-angle-down"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <div class="container">
      <div class="row" id="tieu_chi" style="color:black;font-size:20px">
        <div class="col-md-3 text-left" style="font-family: tahoma; font-weight:700;color:gray;">
          YOUR SELECTIONS:
        </div>
       <div class="col-md-6 text-left">
        <div class="form-check">
          <label class="form-check-label" style="padding-right:20px;">
            <input type="checkbox" class="form-check-input" name="" id="check_age" value="checkedValue">Age
          </label>
          <label class="form-check-label" style="padding-right:20px;">
            <input type="checkbox" class="form-check-input" name="" id="check_hobby" value="checkedValue" >Hobby
          </label>
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="" id="check_address" value="checkedValue">Address
          </label>
        </div>
       </div>
       <div class="col-md-3">
         <a type="submit" id="check_result" class="btn btn-primary" style="margin-left:200px" onclick="return checked_norm()">GET</a>
       </div>
       
      </div>
      
      
      <div class="row" id="ket_qua" style="margin-top:30px">
        <div class="col-md-12">
          <div id= "result_navbar" style="width:70%;margin:auto;font-weight: 900;padding:10px; font-size:20px;opacity:0;">
        </div>
        <div class="col-md-12">
          <div id="f_love_cmt" style="text-align:center;color:black;padding-top:5px;"></div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
      </div>

      <div class="row">
      <?php $__currentLoopData = $infor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $if): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($if->sex == "Male"): ?>
        <div class="col-md-6">
            <div class="wow fadeInLeft" data-wow-delay="0.2s">
              <div class="service-box couple_show_box">
                <div class="service-icon">
                  <img  src="avatar/<?php echo e($if->id); ?>.jpg" alt="">
                </div>
                <div class="service-desc">
                  <a  href="heart_choice_detail/<?php echo e($if->id); ?>" target="_blank"><?php echo e($if->name); ?></a>
                </div>
                <br>
                <table class="text-center" id="table_male">
                    <tr>
                      <td>Full Name</td>
                      <td><?php echo e($if->name); ?></td>
                    </tr>
                    <tr>
                      <td>Sex</td>
                      <td><?php echo e($if->sex); ?></td>
                    </tr>
                    <tr>
                      <td>Age</td>
                      <td><?php echo e($if->age); ?></td>
                    </tr>
                    <tr>
                      <td>Hobby</td>
                      <td><?php echo e($if->hobby); ?></td>
                    </tr>
                    <tr>
                      <td>Address</td>
                      <td><?php echo e($if->address); ?></td>
                    </tr>
                    <tr>
                      <td>State</td>
                      <td><?php echo e($if->state); ?></td>
                    </tr>
                </table>
              </div>
            </div>
        </div>
        <?php endif; ?> 

        <?php if($if->sex == "Fe_Male" ): ?>
        <div class="col-md-6">
          <div class="wow fadeInLeft" data-wow-delay="0.2s">
            <div class="service-box couple_show_box" >
              <div class="service-icon">
                <img  src="avatar/<?php echo e($if->id); ?>.jpg" alt="">
              </div>
              <div class="service-desc">
                <a  href="heart_choice_detail/<?php echo e($if->id); ?>" target="_blank"><?php echo e($if->name); ?></a>
              </div>
              <br>
                <table class="text-center" id="table_fe_male">
                    <tr>
                      <td>Full Name</td>
                      <td><?php echo e($if->name); ?></td>
                    </tr>
                    <tr>
                      <td>Sex</td>
                      <td><?php echo e($if->sex); ?></td>
                    </tr>
                    <tr>
                      <td>Age</td>
                      <td><?php echo e($if->age); ?></td>
                    </tr>
                    <tr>
                      <td>Hobby</td>
                      <td><?php echo e($if->hobby); ?></td>
                    </tr>
                    <tr>
                      <td>Address</td>
                      <td><?php echo e($if->address); ?></td>
                    </tr>
                    <tr>
                      <td>State</td>
                      <td><?php echo e($if->state); ?></td>
                    </tr>
                </table>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>

      <div class="row">
        <a name="" id="Midnights" class="btn btn-success" href="<?php echo e(route('expeter_list.index')); ?>" role="button"  style="margin-top: 40px;">Back</a>
      </div>
    </div>
  </section>
  
  
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
  <script src="source/js/wow.min.js"></script>
  <script src="source/js/expeter.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="source/js/custom.js"></script>
  <script src="source/contactform/contactform.js"></script>

  
 
</body>

</html>
<?php /**PATH D:\xampp\htdocs\f_love\resources\views/expeter/couple_show.blade.php ENDPATH**/ ?>