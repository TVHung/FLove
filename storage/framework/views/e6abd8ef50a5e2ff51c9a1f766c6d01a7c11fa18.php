<section id="service" class="home-section text-center bg-gray" >
<form method="get" action="<?php echo e(route('postExpecter')); ?>">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
  <div class="heading-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow bounceInDown" data-wow-delay="0.4s">
            <div class="section-heading">
              <h2>EXPETER</h2>
              <i class="fa fa-2x fa-angle-down"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container" style="color:black">
    <div class="row">
      <div class="col-lg-2 col-lg-offset-5">
        <hr class="marginbot-50">
      </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Sex</th>
                        <th>Age</th>
                        <th>Hobby</th>
                        <th>Address</th>
                        
                        <th>State</th>
                        <th class="text-center">Select</th>
                      </tr>
                    </thead>
                    <tbody class="text-left">
                    <?php $__currentLoopData = $infor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $if): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($if->id); ?></td>
                        <td><?php echo e($if->name); ?></td>
                        <td class="check_sex"><?php echo e($if->sex); ?></td>
                        <td><?php echo e($if->age); ?></td>
                        <td><?php echo e($if->hobby); ?></td>
                        <td><?php echo e($if->address); ?></td>
                        <td><?php echo e($if->state); ?></td>
                        <td class="text-center ">
                          <input type="checkbox" id="check_select" name="check_select[]" value="<?php echo e($if->id); ?>"><br>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
        
    </div>
  </div>
  <div class="container_fluid bg-gray">
    <div class="row text-center" style="padding-bottom: 30px">
    <input id="get_two_user" class="btn btn-success" type="submit" onclick="return checked_all()" value="View Result">
  </div>
  </form>
  <div class="row text-center" style="padding-bottom: 30px">
    <div id="show_errors"></div>
  </div>
</section><?php /**PATH D:\xampp\htdocs\f_love\resources\views/expeter/table.blade.php ENDPATH**/ ?>