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
        <li class=""><a href="<?php echo e(route('home.index')); ?>">Home</a></li>
          <li class="active"><a href="<?php echo e(route('expeter_list.index')); ?>">Expecter</a></li>
          <li><a href="<?php echo e(route('hc_list.index')); ?>">Heart's choice</a></li>
        <li><a href="<?php echo e(route('logout')); ?>">Logout</a></li>
          
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>
<?php /**PATH D:\xampp\htdocs\f_love\resources\views/expeter/head_expeter.blade.php ENDPATH**/ ?>