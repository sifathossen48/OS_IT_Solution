<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('Forget Password')}} </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="responsive.css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

</head>
<body>

<div class="hero">
    <div class="login_form">
        <div class="reset"><h1>{{__('Forget Password')}}</h1></div>
        <form action="{{route('password.request')}}" method = 'post' id="login" class="input-group"  >
            @csrf
            <br>
            <input type="email" class="input-field" id="email" name="email" placeholder="{{__('Enter your Email')}}" required>
            @error('email')
            <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
            <br><br>

            <button type="submit" class="submit-btn" onclick="validate()">{{__('Verify')}} </button>

            <br><br>


        </form>


    </div>


</div>


</body>

<script src="script.js"></script>
</html>

