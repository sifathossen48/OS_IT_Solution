<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search package page </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/responsive.css') }}" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

</head>
<body>

<div class="wrapper">
    <nav>
        <input type="checkbox"   id="show-search">
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
        <div class="content">
            <div class="logo"><a href="#">OS-Travels</a></div>
            <ul class="links">
                <li><a href="{{route('osTravel.home')}}">Home</a></li>
                <li><a href="{{route('company.about')}}">About Us</a></li>
                <li>
                    <a href="#" class="desktop-link">Packages</a>
                    <input type="checkbox" id="show-features">
                    <label for="show-features">	Packages</label>
                    <ul>
                        <li><a href="{{route('packages/inside')}}">Inside Bangladesh</a></li>
                        <li><a href="{{route('packages/outside')}}">Outside Bangladesh</a></li>
                        <li><a href="">Hajj Packages</a></li>
                        @if(Auth::check())
                            <li><a href="{{route('packages.create')}}" style="display: {{auth()->user()->user_type === 'admin' ? 'block' : 'none'}}">Create Packages</a></li>
                        @endif
                    </ul>
                </li>
                <li>
                    <a href="#" class="desktop-link">Visa Service</a>
                    <input type="checkbox" id="show-services">
                    <label for="show-services">Visa Service</label>
                </li>
                @if(auth()->check())
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <input type="checkbox" id="logout">
                        <label for="logout">Logout</label>
                        <form action="{{ route('logout') }}" method="post" id="logout-form" class="d-none">
                            @csrf
                        </form>
                    </li>
                @else
                    <li><a href="{{route('login')}}"> LogIn</a></li>
                @endif

                {{--                @if (Auth::check())--}}
                {{--                    <form action="{{ route('logout') }}" method= "post" >--}}
                {{--                        @csrf--}}
                {{--                        <li><a type="submit" > Logout</a></li>--}}
                {{--                    </form>--}}
                {{--                @else--}}
                {{--                    <li><a href="{{route('login')}}"> LogIn</a></li>--}}

                {{--                @endif--}}

            </ul>
        </div>
        <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
        <form action="{{route('home.search')}}" method="post" class="search-box">
            @csrf
            <input type="text" list="datalist" name="searchInput" id="search-input" placeholder="Type Something to Search..." required>

            <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
        </form>
    </nav>

    <datalist id="datalist" class="datalist">
        @foreach($packages as $package)
            <option value="{{ $package->name }}">{{ $package->name }}</option>
        @endforeach
    </datalist>

</div><br><br><br>
<br><br><br><br><br><br><br>

<div class="card_line">

    @foreach($packages as $key => $package)

        <div class="card_container">
            <img src="{{url('app/package-photos/'.$package->image_filepath)}}"  alt="Avatar" class="card_image">
            <div class="card_overlay">
                <div class="text">
                    {{$package->name}}<br>
                    <p>{{$package->location}}</p><br>
                    <a href="{{route('packages.show', $package)}}">See More..</a>

                </div>
            </div>
        </div>
    @endforeach


    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
    <!-- Footer -->

    <footer class="footer">
        <div class="l-footer">
            <h1>
                <img src="https://i.postimg.cc/y62wcLBq/logo.png" alt=""></h1>
            <p>Lets Travel with us. Travel makes you  happy and gives u a very memorable times.</p>
        </div>
        <ul class="r-footer">
            <li>
                <h2>
                    Social</h2>
                <ul class="box">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Pinterest</a></li>
                    <li><a href="#">Dribbble</a></li>
                </ul>
            </li>
            <li class="features">
                <h2>
                    Company</h2>
                <ul class="box h-box">
                    <li><a href="E:\web\newslide\aboutus.html">About Us</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="E:\web\newslide\Blogs& News.html">News & Blogs</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Packages</a></li>
                    <li><a href="#">Offers</a></li>
                </ul>
            </li>
            <li>
                <h2>
                    Contact Us</h2>
                <ul class="box">
                    <li><a href="#">Address:</a></li>
                    <li><a href="#">Email:</a></li>
                    <li><a href="#">Phone No:</a></li>
                </ul>
            </li>
        </ul>
        <div class="b-footer">
            <p>
                All rights reserved by © OSIT Solution Ltd./2021 </p>
        </div>
    </footer>

</body>
</html>
