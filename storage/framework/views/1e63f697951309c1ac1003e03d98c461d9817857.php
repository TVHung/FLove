<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
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
          <li><a href="#service">Service</a></li>
          <li><a href="#contact">Contact</a></li>
        <li><a href="<?php echo e(route('information')); ?>"><?php echo e($user->name); ?></a></li>

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fa fa-bell"></i>
            <span class="badge badge-info"><?php echo e($total ?? '0'); ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" id="border">
              <span class="dropdown-item dropdown-header" style="text-align: center"><?php echo e($total ?? '0'); ?> Notifications</span>
              <?php if($rq): ?>
              <?php $__currentLoopData = $rq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="dropdown-divider"></div>
              <hr style="margin: 2px;">
              <div style="height: 40px">
              <a href="seeInfor/<?php echo e($var->id2); ?>" class="dropdown-item">
                 <?php echo e($array[$var->id2]); ?> send you a request
                <span class="float-right text-muted text-sm" id="time" style="font-size: 10px;"><?php echo e($var->updated_at->diffForHumans()); ?></span>
              </a>
              </div>
              <div style="height: 20px">
              <a href="accept/<?php echo e($var->id2); ?>" style="font-size: 10px;color: green;margin-left: 30px;">
                accept
              </a>
              <a href="denine/<?php echo e($var->id2); ?>" style="font-size: 10px;color: blue;margin-right: 30px;float: right;">
                denine
              </a>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
              <div class="dropdown-divider"></div>
              <hr style="margin: 2px;margin-bottom: 10px;">
              <a href="#" class="dropdown-item dropdown-footer" style="margin-left: 70px;">See All Notifications</a>
            </div>
          </li>
          

        <li><a href="<?php echo e(route('logout')); ?>">Logout</a></li>
          
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>
<?php /**PATH D:\xampp\htdocs\f_love\resources\views/home/user_header.blade.php ENDPATH**/ ?>