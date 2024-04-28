<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
         .m-container{
            display: flex;
            flex-direction : column;
            justify-content: center;
            align-items: center;
 
        }
        
    </style>
</head>
<body>
    @include('professor.header')
     
    <div class="m-container">
    <h1 style="color:red">Edit client  </h1><br>
    <div class="form-group">
    <form action="/edit" method="post">
        @csrf
        <input type="hidden" name="id" value={{$users->id}}>
        <label for="">Name :</label>
        <input type="text" name="name" placeholder="enter name" value="{{$users->name}}"><br><br>
        <label for="">Subject :</label>
        <input type="text" name="subject" placeholder="enter subject" value="{{$users->subject}}"><br><Br>
        <label for="">Department : </label>
        <input type="text" name="department" placeholder="enter department" value="{{$users->department}}"><br><br>
        <button type="submit" class="btn btn-success">update</button>
    </form>
    </div>
    
    </div>
   @include('professor.footer')  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>