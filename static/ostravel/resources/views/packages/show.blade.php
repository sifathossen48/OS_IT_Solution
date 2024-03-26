<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>single package page </title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/style.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="responsive.css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

</head>
<body>

<div class="hero_single_package">
    <div class="single_package_form">
        <div class="single_package_content">
            <img src="{{url('/app/package-photos/'.$package->image_filepath)}}" alt="Avatar" class="card_image">
            <div class="single_package_details">
                <h3>Place - {{$package->name}}</h3>
                <h4><i class="fas fa-map-marker-alt" id="singlepage_location"></i>Location - {{$package->location}}</h4><br>
                <h4>Package -  2 days 1 night</h4>
                <h4><i class="fas fa-utensils" id="singlepage_location"></i>Food - {{$package->food}}</h4>
                <h4><i class="fas fa-dollar-sign" id="singlepage_location"></i>Price - {{$package->adult_per_person_price}}/- TK for Adult,  {{$package->child_per_person_price}}/- TK for Child</h4>
                <h6 style="color: green">{{$package->family_discount_rate}}% discount for family & {{$package->corporate_discount_rate}}% discount for corporate booking</h6>


            </div>


        </div>

        <p>{{$package->description}}</p>

        @if(auth()->check())

        @if(auth()->user()->user_type === 'admin')
            <a href="{{route('packages/edit', $package)}}"><button>Edit</button></a>
        @else
            <a href="{{route('packages/book', $package)}}"><button>Book</button></a>
        @endif
        @else
            <a href="{{route('login', $package)}}"><button>Book</button></a>
        @endif




    </div>





</div>





</body>
</html>
