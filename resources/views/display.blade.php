   @extends('master')

@section('contant')
<div class="container">
      <div class="card" style="width:1100px; margin-top: 30px;">

        <div class="card-header">
          <h6 class="text-uppercase mb-0">Users</h6>

      </div>
      <div class="card-body">
        <table class="table cart-text" style="width: 100%;" id="mytable">
        <thead>
            <tr>
              <th>Sr No</th>
              <th>Name</th>
              <th>Email</th>
              <th>Mobile</th>
              <th>Skill</th>
              <th>Gender</th>
              <th>Country</th>
              <th>Profile Photo</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($getData as $key=> $row)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$row->name}}</td>
              <td>{{$row->email}}</td>
              <td>{{$row->mobile}}</td>
              <td>{{$row->skill}}</td>
              <td>{{$row->gender}}</td>
              <td>{{$row->country}}</td>
             <td>
                @if (!empty($row->image))
                    @foreach (explode(',', $row->image) as $image)
                        <img src="client/images/{{ $image }}" width="100" height="100" style="border-radius: 50%;">
                    @endforeach
                @endif
            </td>

              <td>
                <a href="{{'edit/'.$row['id']}}" class="btn btn-primary">Edit</a>
                <a href="{{'delete/'.$row['id']}}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
          
  
      </table>
      </div>
  </div>
  

@endsection
