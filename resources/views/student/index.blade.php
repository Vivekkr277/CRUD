<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Student</title>
  <style>
    .main-container{
      display: flex;
      display-direction : column;
    }
    .m-container{
       margin: 15px;
      margin-bottom : 50px;
      /* width : 80%; */
    }
    .container1{
      height:100vh;
      width: 12%;
      background-color: darksalmon;
    }
  </style>
</head>
<body>
  
  @include('student.header')
  <div class="main-container">
    <!-- div1 -->
    <div class="container1">
          @include('student.sidebar')
    </div>

    <!-- div2 -->
    <div class="m-container">
  <h1 style="color:red">Students List</h1><br>
    <a href="insert" class="btn btn-info"> NEW</a>
  <table class="table table-border">
  <thead>
    <tr>
      <th scope="col">Roll_NO</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Course</th>
      <th scope="col">State</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    @csrf
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->age}}</td>
      <td>{{$user->course}}</td>
      <td>{{$user->state}}</td>
       <td>
        <a href="{{"edit/".$user->id}}" class="btn btn-primary">EDIT</a>
        <a href="{{"delete/".$user->id}}" class="btn btn-danger">DELETE</a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
  </div>
 

  </div>
  
    
  
  @include('student.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>