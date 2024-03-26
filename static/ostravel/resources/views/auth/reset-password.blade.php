<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('Reset Password')}} </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="responsive.css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

</head>
<body>

<div class="hero">
    <div class="login_form">
        <div class="reset"><h1>{{__('Reset Password')}}</h1></div>

        <form action="{{route('password.update')}}" method="post" id="login" class="input-group">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <input type="email" name="email" class="input-field" id="email" placeholder= "{{__('Enter Your Email')}}" value="{{ old('email') }}"
                   required>
            @error('email')
            <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
            <div class="password_content">
                <input type="password" name="password" class="input-field" id="password" placeholder="{{__('Enter New Password')}}" required>
                @error('password')
                <span class="text-danger">
                            {{ $message }}
                        </span>
                @enderror


            </div>

            <div class="password_content">
                <input type="password" name="password_confirmation" class="input-field" id="confirm-password" placeholder="{{__('Enter Confirm Password')}}" required>
                @error('password')
                <span class="text-danger">
                            {{ $message }}
                        </span>
                @enderror


            </div>

            <br><br>

            <button type="submit" class="submit-btn" onclick="validate()">Update Password</button>

            <br><br>


        </form>


    </div>


</div>


</body>

<script src="script.js"></script>
</html>
