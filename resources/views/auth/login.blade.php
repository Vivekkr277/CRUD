<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
    <style>
        html, body , .container-out {
            display : flex;
            flex-direction : column;
            justify-content : center;
            align-items : center;
            height : 100%;
            width : 100%;
            background-color : silver;
            margin : 0;
            padding : 0;
        }
        .container-in {
            /* margin-top : 10%; */
            border : 1px solid black;
             width: 37%;
             /* height : 50%px; */
             padding:10px;
             background-color : gainsboro;
        }
       
        .button{
            color : green;
            background-color: green
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
    <div class="container-out">
        <div class="container-in">

        <div style="text-align:center">
            <h1 style="color:chocolate"><strong>Login</strong></h1>
            </div>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="email"><strong>Email</strong></label><br>
        <input id="email" class="txt" type="email" name="email" value="{{ old('email') }}" required autofocus>
        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div><br>

    <div>
        <label for="password"><strong>Password</strong></label><br>
        <input id="password" class="txt" type="password" name="password" required>
        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div><br>
    <div>
        <p>Don't have an account? <a href="/signup"  > Signup</a></p>
    </div>

    <div>
        <button type="submit" class="btn btn-info"><strong>Login</strong></button>
    </div>
</form>

        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>