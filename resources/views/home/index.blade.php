@if(Auth::check())

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
  <link href="source/css/Midnights.css" rel="stylesheet">
  
  
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <!-- Preloader -->
  <div id="preloader">
    <div id="load"></div>
  </div>

  @include('home.user_header')

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

  @include('layout.serviece')
  @include('layout.footer')

  @if(session('thongbao'))
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Notification</h4>
        </div>
        <div class="modal-body">
        {{session('thongbao')}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  @endif

  <!-- Core JavaScript Files -->
  <script src="source/js/jquery.min.js"></script>
  <script src="source/js/bootstrap.min.js"></script>
  <script src="source/js/jquery.easing.min.js"></script>
  <script src="source/js/jquery.scrollTo.js"></script>
  <script src="source/js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="source/js/custom.js"></script>
  <script src="source/contactform/contactform.js"></script>

  <script src="source/js/me.js"></script>
  <script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
  </script>
</body>

</html>
@else 
{{route('login')}}
@endif