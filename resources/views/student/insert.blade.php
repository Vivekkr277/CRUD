<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!-- div1 -->
    <div class="container1">
   @include('student.sidebar')
    </div>
 
    <div class="m-container">
    <h1 style="color:red">Add New Student</h1><br>
    <form action="inserted" method="POST">
        @csrf
        <div class="mb-3">
            <label for=" " class="form-label"><strong>Name</strong></label>
            <input type="text" name="name" class="form-control" id="input"  placeholder="enter name"  >
        </div>
        <div class="mb-3">
            <label for=" " class="form-label"> <strong>Email</strong></label>
            <input type="text"  name="email" class="form-control"  id="input" placeholder="enter name"  >
        </div>
        <div class="mb-3">
            <label for=" " class="form-label">  <strong>Age</strong></label>
            <input type="text" name="age" class="form-control" id="input"  placeholder="enter age"  >
        </div>
        <div class="mb-3">
            <label for=" " class="form-label"><strong>Course </strong> </label>
            <input type="text" name="course" class="form-control" id="input"  placeholder="enter course"  >
        </div>
        <div class="mb-3">
            <label for=" " class="form-label"> <strong>State</strong> </label>
            <input type="text" name="state" class="form-control" id="input"  placeholder="enter state"  >
        </div>
        <button type="submit" class="btn btn-success">Submit</button>


        
    </form>
    
</div>

 </div>
    
@include('student.footer')
</body>


</html>