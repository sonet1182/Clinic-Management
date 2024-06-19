<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

        body {
            background: #c0c0c0;
            font-family: Raleway, sans-serif;
            color: #666;
        }

        .text-danger{
            color: red;
        }

        .login {
            margin: 20px auto;
            padding: 40px 50px;
            max-width: 300px;
            border-radius: 5px;
            background: #fff;
            box-shadow: 1px 1px 1px #666;
        }

        .login input {
            width: 100%;
            display: block;
            box-sizing: border-box;
            margin: 10px 0;
            padding: 14px 12px;
            font-size: 16px;
            border-radius: 2px;
            font-family: Raleway, sans-serif;
        }

        .login input[type=text],
        .login input[type=password] {
            border: 1px solid #c0c0c0;
            transition: .2s;
        }

        .login input[type=text]:hover {
            border-color: #F44336;
            outline: none;
            transition: all .2s ease-in-out;
        }

        .login input[type=submit] {
            border: none;
            background: #EF5350;
            color: white;
            font-weight: bold;
            transition: 0.2s;
            margin: 20px 0px;
        }

        .login input[type=submit]:hover {
            background: #F44336;
        }

        .login h2 {
            margin: 20px 0 0;
            color: #EF5350;
            font-size: 28px;
        }

        .login p {
            margin-bottom: 40px;
        }

        .links {
            display: table;
            width: 100%;
            box-sizing: border-box;
            border-top: 1px solid #c0c0c0;
            margin-bottom: 10px;
        }

        .links a {
            display: table-cell;
            padding-top: 10px;
        }

        .links a:first-child {
            text-align: left;
        }

        .links a:last-child {
            text-align: right;
        }

        .login h2,
        .login p,
        .login a {
            text-align: center;
        }

        .login a {
            text-decoration: none;
            font-size: .8em;
        }

        .login a:visited {
            color: inherit;
        }

        .login a:hover {
            text-decoration: underline;
        }
    </style>


</head>

<body>

    <form class="login" method="POST" action="{{ route('login') }}">
        @csrf
        <h2>Welcome, User!</h2>
        <p>Please log in</p>
        <input id="email" placeholder="email" type="email"
            class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
            required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <small class="text-danger">{{ $message }}</small class="text-danger">
            </span>
        @enderror
        <input id="password" placeholder="password" type="password"
            class="form-control @error('password') is-invalid @enderror" name="password" required
            autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <small class="text-danger">{{ $message }}</small class="text-danger">
            </span>
        @enderror
        <input type="submit" value="Log In" />
        <div class="links">
            @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            {{-- <a href="#">Register</a> --}}
        </div>
    </form>

</body>



</html>
