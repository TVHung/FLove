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
  
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <!-- Preloader -->
  <div id="preloader">
    <div id="load"></div>
  </div>

  <?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Section: intro -->
  <section id="intro" class="intro">

    <div class="slogan">
      <h2>FIND LOVE</h2>
      <h4>STAY HERE, LOVE'LL GO ON!</h4>
    </div>
    <div class="page-scroll">
      <a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
    </div>
  </section>
  <!-- /Section: intro -->

  <?php echo $__env->make('layout.about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('layout.serviece', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <!-- Core JavaScript Files -->
  <script src="source/js/jquery.min.js"></script>
  <script src="source/js/bootstrap.min.js"></script>
  <script src="source/js/jquery.easing.min.js"></script>
  <script src="source/js/jquery.scrollTo.js"></script>
  <script src="source/js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="source/js/custom.js"></script>
  <script src="source/contactform/contactform.js"></script>

</body>

</html>
<?php /**PATH D:\xampp\htdocs\f_love\resources\views/layout/master.blade.php ENDPATH**/ ?>