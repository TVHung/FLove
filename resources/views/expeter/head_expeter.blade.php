<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="background-color: #40B2D2;">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
        <a class="navbar-brand" href="{{route('home.index')}}">
          {{-- <h1>Flove</h1> --}}
          <img src="source/img/logoflove.png" alt="">
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
        <li class=""><a href="{{route('home.index')}}">Home</a></li>
          <li class="active"><a href="{{route('expeter_list.index')}}">Expecter</a></li>
          <li><a href="{{route('hc_list.index')}}">Heart's choice</a></li>
        <li><a href="{{route('logout')}}">Logout</a></li>
          
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>
