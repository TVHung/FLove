<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit_Information</title>
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
      <div class="card-header text-center">Edit Information</div>
      <div class="card-body">
        @if(count($errors) > 0)
        <div class="alert alert-danger">
          @foreach($errors->all() as $err)
            {{$err}}<br>
          @endforeach
        </div>
        @endif

        @if(session('thongbao'))
          <div class="alert alert-success">
            {{session('thongbao')}}
          </div>
        @endif 

        <form method="post" action="{{ route('postEditInfor')}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="FullName" class="form-control" name="fullname" placeholder="FullName" required="required" autofocus="autofocus">
                  <label for="FullName">Full Name</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="Address" class="form-control" name="address" placeholder="Address" required="required" autofocus="autofocus">
                  <label for="Address">Address</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                        <select class="custom-select" name="State" id="state">
                            <option class="love" value="Dating">Dating</option>
                            <option class="love" value="Single">Single</option>
                        </select>
                  </div>
                  <div class="col-md-6">
                        <select class="custom-select" name="Sex" id="sex">
                            <option value="Fe_Male">FeMale</option>
                            <option value="Male">Male</option>
                        </select>
                  </div>
                </div>
            </div>

            <div class="form-group fe_dating">
              <div class="form-row">
                <div class="col-md-6 hide" id="dating_alone">
                    <div class="form-label-group">
                      <input type="text" id="op_user_name" class="form-control" name="op_user_name" placeholder="op_user_name" >
                      <label for="op_user_name">op_user_name</label>
                    </div>
                </div>
                <div class="col-md-6" id="female">
                    <div class="row">
                        <div class="col-md-4 form-label-group ">
                          <input type="text" id="The_1st" class="form-control" name="the1st" placeholder="The 1st" >
                          <label for="The_1st">The 1st</label>
                        </div>
                      
                        <div class="col-md-4 form-label-group measuares" >
                          <input type="text" id="The_2nd" class="form-control" name="the2st" placeholder="The 2nd" >
                          <label for="The_2nd">The 2nd</label>
                        </div>
                    
                        <div class="col-md-4 form-label-group measuares" >
                          <input type="text" id="The_3rd" class="form-control" name="the3st" placeholder="The 3rd" >
                          <label for="The_3rd">The 3rd</label>
                        </div>
                      </div>
                </div>
              </div>
            </div>

          <div class="form-group">
                <div class="form-row">
                  <div class="col-md-4">
                    <div class="form-label-group">
                      <input type="text" id="Height" class="form-control" name="height" placeholder="Height" required="required">
                      <label for="Height">Height (m)</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-label-group">
                        <input type="text" id="Weight" class="form-control" name="weight" placeholder="Weight" required="required">
                        <label for="Weight">Weight (kg)</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                        <label for="dateofbirth" style ="margin-bottom:3px;">Date Of Birth</label>
                        <input type="date" name="dateofbirth" id="dateofbirth">
                  </div>
                </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4">
                <div class="form-label-group">
                    <input type="text" id="Phone" class="form-control" name="phone" placeholder="Phone" required="required">
                    <label for="Phone">Phone</label>
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-label-group">
                    <input type="text" id="Email" class="form-control" name="email" placeholder="Email" required="required">
                    <label for="Email">Email</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="Job" class="form-control" name="job" placeholder="Job" required="required">
                  <label for="Job">Job</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="text" id="company" class="form-control" name="company" placeholder="company" required="required">
                    <label for="company">Company</label>
                  </div>
                </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="position" class="form-control" name="position" placeholder="position" required="required">
                  <label for="position">Position</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="Salary" class="form-control" name="salary" placeholder="Salary" required="required">
                  <label for="Salary">Salary</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-label-group">
                        <input type="text" id="Facebook" class="form-control" name="facebook" placeholder="Phone" required="required">
                        <label for="Facebook">Facebook/Twitter/Instagam</label>
                    </div>
                </div>
            </div>
          </div>
          <div class="form-group">
                <div class="form-row">
                  <div class="col-md-12">
                      <div class="form-label-group">
                          <input type="text" id="Hobby" class="form-control" name="hobby" placeholder="Hobby" required="required">
                          <label for="Hobby">Hobby</label>
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
                <div class="col-md-12 text-center">
                <input type="submit" class="btn btn-primary" value="Load to FLove">
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

  {{-- me js --}}
  <script src="source/js/me.js"></script>

</body>

</html>
