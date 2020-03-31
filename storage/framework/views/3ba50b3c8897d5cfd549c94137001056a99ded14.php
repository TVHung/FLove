<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Update_Information</title>
  <link rel="shortcut icon" type="image/png" href="source/img/logoflove.png"/>

  <!-- Custom fonts for this template-->
  <link href="source/login/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="source/login/css/sb-admin.css" rel="stylesheet">

  <!--FaCss-->
  <link rel="stylesheet" href="source/css/FaStyle.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container" style = "margin-top:-50px;">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header text-center">Update Information</div>
      <div class="card-body">
        <form method="post" action="<?php echo e(route('postUpdate')); ?>" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-12">
              <div class="form-label-group">
                <input type="text" id="Full_Name" name="Full_Name" class="form-control" placeholder="Full_Name"  autofocus="autofocus">
                <label for="Full_Name">Full Name</label>
              </div>
            </div>
          </div>
        </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="Address" name="address" class="form-control" placeholder="Address"  autofocus="autofocus">
                  <label for="Address">Address</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-label-group">
                      <input type="text" id="Height" name="height" class="form-control" placeholder="Height" >
                      <label for="Height">Height</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="text" id="Weight" name="weight" class="form-control" placeholder="Weight" >
                        <label for="Weight">Weight</label>
                    </div>
                  </div>
                </div>
              </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4">
                <div class="form-label-group">
                    <input type="text" id="Phone" name="phone" class="form-control" placeholder="Phone" >
                    <label for="Phone">Phone</label>
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-label-group">
                    <input type="text" id="Email" name="email" class="form-control" placeholder="Email" >
                    <label for="Email">Email</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="Job" name="job" class="form-control" placeholder="Job" >
                  <label for="Job">Job</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="text" id="company" name="company" class="form-control" placeholder="company" >
                    <label for="company">Company</label>
                  </div>
                </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="position" name="position" class="form-control" placeholder="position" >
                  <label for="position">Position</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="Salary" name="salary" class="form-control" placeholder="Salary" >
                  <label for="Salary">Salary</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-label-group">
                        <input type="text" id="Facebook" name="facebook" class="form-control" placeholder="Phone" >
                        <label for="Facebook">Facebook/Twitter/Instagam</label>
                    </div>
                </div>
            </div>
          </div>
          <div class="form-group">
                <div class="form-row">
                  <div class="col-md-12">
                    <div class="form-label-group">
                      <input type="text" id="Hobby" class="form-control" name="hobby" placeholder="Hobby"  autofocus="autofocus">
                      <label for="Hobby">Hobby</label>
                    </div>
                  </div>
                </div>
            </div>
          
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="form-label-group">
                        Select files: <input type="file" name="myFile" >
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center" style="margin-bottom:20px;">
                <input type="submit" class="btn btn-primary" value="Comfirm">
            </div>
        </form>
      </div>
    </div>
  </div>

  

  <!-- Bootstrap core JavaScript-->
  <script src="source/login/vendor/jquery/jquery.min.js"></script>
  <script src="source/login/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="source/login/vendor/jquery-easing/jquery.easing.min.js"></script>

  
  
</body>

</html>
<?php /**PATH D:\xampp\htdocs\f_love\resources\views/alert/alert_infor.blade.php ENDPATH**/ ?>