<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('login / register page')}} </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

</head>
<body>

    <div class="hero">
        <div class="login_form">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>

            <form  action="{{ route('login') }}" method = "post" id="login" class="input-group">
                @csrf
                <input type="email" name="email" class="input-field" id="email" placeholder= "{{__('Enter Your Email')}}" value="{{ old('email') }}"
                required>
                @error('email')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
                <div class="password_container">
                    <input type="password" name="password" class="input-field" id="password" placeholder= "{{__('Enter Password')}}" required>
                     @error('password')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                    <select name="user_type" id="user_type" >
                        <option value="guest" id="in0">Guest</option>
                        <option value="admin" id="in1">Admin</option>
                    </select>
                </div>
                <br><br>

                <button type="submit" class="submit-btn" onclick="validate()">{{__('Log In')}}</button>

                <br><br>
                <div class="forget"><p>Forget password? <a href="{{route('password.request')}}">{{__('Reset Password')}}</a></p></div>

            </form>


            <form action="{{route('register')}}" method="post" id="register" class="input-group">
                @csrf
                <input type="text" name="name" class="input-field" id="name" placeholder= "{{__('Enter Your Name')}}" required>
                @error('name')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror

                <input type="email" name="email" class="input-field" id="email" placeholder= "{{__('Enter Your Email')}}" value="{{ old('email') }}"
                required>
                @error('email')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror

                <div class="password_container">
                    <input type="password" name="password" class="input-field" id="password" placeholder= "{{__('Enter Password')}}" required>
                     @error('password')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                    <span class="eye" onclick=" myFunction()">
                        <i id="hide1" class="fa fa-eye"></i>
                        <i id="hide2" class="fa fa-eye-slash"></i>
                    </span>
                </div> <br><br>

                <div class="form-group">
                    <select name="user_type" id="user_type" >
                        <option value="guest" id="in0">Guest</option>
                        <option value="admin" id="in1">Admin</option>
                    </select>
                </div>

                <br><br>

                <button type="submit" class="submit-btn">Register</button>
            </form>


        </div>


    </div>


</body>

         <script src={{asset('assets/script.js') }}></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</html>
