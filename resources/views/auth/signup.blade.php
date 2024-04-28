
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
         html, body , .container-out {
            display : flex;
             justify-content : center;
            align-items : center;
            background-color : silver;
             height : 100%;
            width : 100%;
           margin:0;
           padding : 0;
        }
        .container-in {
            /* margin-top : 18%; */
            border : 1px solid black;
             width: 35%;
             /* height : 50%; */
             padding:10px;
              background-color : gainsboro;
        }
        
        .button{
            /* color : green; */
        }
        .txt {
            width : 95%;
        }
        p {
            font-size : 12px;
        }
    </style>
</head>
<body>
    <div class="container-out ">
        <div class="container-in">
            <div style="text-align:center">
            <h1 style="color:chocolate"><strong>Signup</strong></h1>
            </div>
            

<form method="POST" action="{{ route('signup') }}">
    @csrf

    <div>
        <label for="name"><strong>Name</strong></label>
        <input id="name" class="txt" type="text" name="name" value="{{ old('name') }}" required autofocus>
        @error('name')
            <span>{{ $message }}</span>
        @enderror
    </div><br>

    <div>
        <label for="email"><strong>Email</strong></label>
        <input id="email" class="txt"  type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div><br>

    <div>
        <label for="password"><strong>Password</strong></label>
        <input id="password" class="txt"  type="password" name="password" required>
        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div><br>

    <div>
        <label for="password_confirmation"><strong>Confirm Password</strong></label>
        <input id="password_confirmation" class="txt"  type="password" name="password_confirmation" required>
    </div><br>
    <div>
        <p>Already have an account?<a href="/login"> Login</a></p>
    </div>

    <div>
        <button type="submit" class="btn btn-info"><strong>Sign Up</strong></button>
    </div>
</form>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>