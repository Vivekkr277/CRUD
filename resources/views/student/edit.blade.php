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
      margin-bottom : 60px;
    }
    .container1{
      height:100vh;
      width: 12%;
      background-color: darksalmon;
    }
    #input {
        width : 330%;
    }
        
    </style>
</head>
<body>
    @include('student.header')

    <div class="main-container">
        <div class="container1">
        @include('student.sidebar')
        </div>
        <div class="m-container">
    <h1 style="color:red">Edit Student Data </h1><br>
    <div class="form-group">
    <form action="/edit" method="post">
        @csrf
        <div class="mb-3">
            <input type="hidden" name="id" class="form-control"  value="{{$users->id}}">
        </div>
        <div class="mb-3">
            <label for=" "  > <strong>Name</strong></label>
            <input type="text" name="name" class="form-control" id="input" placeholder="enter name" value="{{$users->name}}">
        </div>
        <div class="mb-3">
            <label for=" "  ><strong>Email</strong></label>
            <input type="text" name="email" class="form-control" id="input" placeholder="enter email" value="{{$users->email}}">
        </div>
        <div class="mb-3">
            <label for=" "  ><strong>Age</strong>  </label>
            <input type="text" name="age" class="form-control" id="input" placeholder="enter age" value="{{$users->age}}">
        </div>
        <div class="mb-3">
            <label for=" "  >  <strong>Course</strong></label>
            <input type="text" name="course" class="form-control" id="input" placeholder="enter course" value="{{$users->course}}">
        </div>
        <div class="mb-3">
            <label for=" " name="state"  ><strong>State</strong>  </label>
            <input type="text" name="state" class="form-control" id="input" placeholder="enter state" value="{{$users->state}}">
        </div>
        <button type="submit" class="btn btn-success">update</button>
        


        
    </form>
    </div>
    
    </div>
    </div>
     
    
   @include('student.footer')  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>