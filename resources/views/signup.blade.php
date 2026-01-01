<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bubbly - Boootstrap 4 Admin template by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="{{asset('assets/css/orionicons.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('assets/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png?3')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
<body>

  <div class="page-holder d-flex align-items-center">
    <div class="container">
      <div class="row align-items-center py-5">
        <div class="col-5 col-lg-7 mx-auto mb-5 mb-lg-0">
                  
          <div class="pr-lg-5"><img src="{{asset('assets/img/illustration.svg')}}" alt="" class="img-fluid">
          </div>
        </div>
          <div class="col-lg-5 px-lg-4">
              <h1 class="text-base text-primary text-uppercase mb-4">Bubbly Dashboard</h1>
              <h2 class="mb-4">Welcome back!</h2>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <form action="{{'signup'}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group mb-4">
                    <input type="text"  name="name" placeholder="Username" class="form-control border-0 shadow form-control-lg" value="{{old('name')}}">
                </div>
                <span class="text-danger">@error ('name') {{$message}} @enderror</span>
                <div class="form-group mb-4">
                    <input type="text"  name="email" placeholder="User email" class="form-control border-0 shadow form-control-lg text-violet" value="{{old('email')}}">
                </div>
                <span class="text-danger">@error ('email') {{$message}} @enderror</span>
                <div class="form-group mb-4">
                    <input type="text"  name="mobile" placeholder="Mobile" class="form-control border-0 shadow form-control-lg text-violet" value="{{old('mobile')}}">
                </div>
                 <span class="text-danger">@error ('mobile') {{$message}} @enderror</span>
                <div class="form-group mb-4">
                    <input type="password"  name="password" placeholder="Password" class="form-control border-0 shadow form-control-lg text-violet" value="{{old('password')}}">
                </div>
                 <span class="text-danger">@error ('password') {{$message}} @enderror</span>
                <div class="form-group mb-4">
                    <input type="password"  name="confirm_password" placeholder="Confirm Password" class="form-control border-0 shadow form-control-lg text-violet">
                </div>
                <legend>Skill</legend>
                <div class="form-check">
                  <input class="form-check-input" value="php" name="skill[]" type="checkbox" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    php
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" name="skill[]" type="checkbox" value="java" id="flexCheckChecked" checked>
                  <label class="form-check-label" for="flexCheckChecked">
                    java
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" name="skill[]" type="checkbox" value="laravel" id="flexCheckChecked" checked>
                  <label class="form-check-label" for="flexCheckChecked">
                    laravel
                  </label>
                </div>
                <br>
                <legend>Gender</legend>
                <div class="form-check">
                <input class="form-check-input" value="male" type="radio" name="gender" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Male
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                 Female
                </label>
              </div>
              <br>
              <select class="form-select form-control" name="country" aria-label="Default select example">
              <option selected>Country</option>
              <option value="Pakistan">Pakistan</option>
              <option value="England">England</option>
              <option value="Newziland">Newziland</option>
            </select>
            <br><br>


            <img id="imagePreview" src="#" style="max-width: 200px; height: 200px; display: none; border-radius: 50%;">
             <input type="file" name="image[]" class="form-control border-0 shadow form-control-lg text-violet" onchange="previewImage(event)" multiple/>

               <div class="modal-footer">
             <input type="submit" value="Signup" class="btn btn-info">
            </div>
            </form>
          </div>
      </div>
          <p class="mt-5 mb-0 text-gray-400 text-center">Design by <a href="https://bootstrapious.com/admin-templates" class="external text-gray-400">Bootstrapious</a> & Your company</p>
          <Please do not remove the backlink to us unless you support further themes development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)>


<script>
        function previewImage(event) {
            var imagePreview = document.getElementById('imagePreview');
            var input = event.target;

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.style.display = 'block';
                    imagePreview.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                imagePreview.style.display = 'none';
                imagePreview.src = '#';
            }
        }
    </script>
    </body>

  </html>