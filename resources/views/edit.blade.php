@extends('master')

@section('contant')
  <div class="d-flex align-items-stretch">
  <div class="col-lg-12 mb-5">
    <div class="card" style="width:1100px; margin-top: 30px;">
      <div class="card-header">
        <h3 class="h6 text-uppercase mb-0">User</h3>
      </div>
      <div class="card-body">
      <p>User Edit Form</p>              
        <form method="POST" action="{{route('editData',$display->id)}}" enctype="multipart/form-data">
        	@csrf
          @method('PUT')
            <input type="hidden" name="id" value="{{$display['id']}}">
            <div class="form-group">
              <label class="form-control-label text-uppercase">Name</label>
              <input type="text" name="name" placeholder="Please Enter Name" class="form-control"  autocomplete="off" value="{{$display['name']}}">
            </div>

            <div class="form-group">
              <label class="form-control-label text-uppercase">Email</label>
              <input type="email" placeholder="Email Address"  name ="email" class="form-control" autocomplete="off" value="{{$display['email']}}">
            </div>
            <div class="form-group">       
              <label class="form-control-label text-uppercase">Mobile</label>
              <input type="text" name="mobile" placeholder="Enter mobile number" class="form-control" autocomplete="off" value="{{$display['mobile']}}">
            </div>
            <legend>Skill</legend>
                <div class="form-check">
                  <input class="form-check-input" value="php" name="skill[]" type="checkbox" id="flexCheckDefault" {{in_array('php',explode(',',$display->skill))? 'checked':''}}>
                  <label class="form-check-label" for="flexCheckDefault">
                    php
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" name="skill[]" type="checkbox" value="java" id="flexCheckChecked" {{in_array('java',explode(',',$display->skill))? 'checked':''}}>
                  <label class="form-check-label" for="flexCheckChecked">
                    java
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" name="skill[]" type="checkbox" value="laravel" id="flexCheckChecked" {{in_array('laravel',explode(',',$display->skill))? 'checked':''}}>
                  <label class="form-check-label" for="flexCheckChecked">
                    laravel
                  </label>
                </div>
                <br>
                <legend>Gender</legend>
                <div class="form-check">
                <input class="form-check-input" value="male" type="radio" name="gender" id="flexRadioDefault1" {{$display->gender ==='male' ? 'checked':''}}>
                <label class="form-check-label" for="flexRadioDefault1">
                  Male
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female" {{$display->gender ==='female' ? 'checked':''}}>
                <label class="form-check-label" for="flexRadioDefault2">
                 Female
                </label>
              </div>
              <br>
              <select class="form-select form-control" name="country" aria-label="Default select example">
              <option>Country</option>
              <option value="Pakistan" {{$display->country ==='Pakistan' ? 'selected':''}}>Pakistan</option>
              <option value="England" {{$display->country ==='England' ? 'selected':''}}>England</option>
              <option value="Newziland" {{$display->country ==='Newziland' ? 'selected':''}}>Newziland</option>
            </select>
            <br><br>
            <img id="imagePreview" src="#" style="max-width: 200px; height: 200px; display: none; border-radius: 50%;">

            <div class="form-group">
                <label class="form-control-label text-uppercase">Image</label>
                <input type="file" name="image" class="form-control" 
                value="{{$display['image']}}" onchange="previewImage(event)">
                <input type="hidden" name="oldimg" class="form-control" value="{{$display['image']}}">
                <img id="imagePreview" src="{{ asset('client/images/'.$display['image']) }}" style="max-width: 200px; height: 200px; display: block; border-radius: 50%;">
            </div>

            
            <div class="form-group">       
              <button type="submit" class="btn btn-primary" name="update">Update</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection