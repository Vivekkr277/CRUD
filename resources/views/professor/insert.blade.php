<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .m-container {
            display: flex;
            flex-direction : column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
      @include('student.header')
     
    <div class="m-container">
    <h1 style="color:red">Insert New Student</h1><br>
    <form action="inserted" method="POST">
        @csrf
        <label for="">Name :</label>
        <input type="text" name="name" placeholder="enter name"><br><br>
        <label for="">Subject :</label>
        <input type="text" name="subject" placeholder="enter subject"><br><br>
        <label for="">Department :</label>
        <input type="text" name="department" placeholder="enter department"><br><br>
        <button type="submit" class="btn btn-success">submit</button>
    </form>
    
</div>
@include('student.footer')
</body>


</html>