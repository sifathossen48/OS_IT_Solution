{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Home page </title>--}}
{{--    <script src="script.js"></script>--}}
{{--    <link rel="stylesheet" type="text/css" href="style.css" media="all" />--}}
{{--    <link rel="stylesheet" type="text/css" href="responsive.css" media="all" />--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"--}}
{{--          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />--}}

{{--</head>--}}
{{--<body>--}}
{{--<div>--}}
{{--    <form action="{{ route('logout') }}" id="register" method= "post" class="input-group">--}}
{{--        @csrf--}}
{{--        <button type="submit" class="submit-btn">"{{__('Logout')}}"</button>--}}
{{--    </form>--}}

{{--</div>--}}

{{--<img src="{{storage_path('public/package-photos/1639587747-package.png')}}">--}}
{{--<img src="{{storage_path('app/package-photos/1639587747-package.png')}}">--}}
{{--<img src="{{storage_path(['package-photos/1639587747-package.png'])}}">--}}

{{--<div>--}}
{{--    <a href="{{route('packages.create')}}">--}}
{{--        Add Package--}}
{{--    </a>--}}
{{--</div>--}}

{{--<div>--}}
{{--    <a href="{{route('packages/inside')}}">--}}
{{--        Inside bangladesh package--}}
{{--    </a>--}}
{{--</div>--}}

{{--<div>--}}
{{--    <a href="">--}}
{{--        outside bangladesh package--}}
{{--    </a>--}}
{{--</div>--}}


{{--</body>--}}
{{--</html>--}}




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.travelers.com </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/responsive.css') }}" media="all" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css”rel=”nofollow” integrity=”sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm” crossorigin=”anonymous”>
    <link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css”rel=”nofollow” integrity=”sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I” crossorigin=”anonymous”>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />



    <style>

        #bodyswiper {
            background:white;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 1.4rem;
            color: #000;
            margin: 0;
            padding: 0;
            position: relative;
            height: 100%;
        }

        .swiper {
            width: 100%;
            padding-top: 5rem;
            padding-bottom: 5rem;

        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 20rem;
            height: 10rem;

        }

        .swiper-slide img {
            display: block;
            width: 100%;

        }
    </style>

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
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li>
                    <a href="#" class="desktop-link">Packages</a>
                    <input type="checkbox" id="show-features">
                    <label for="show-features">	Packages</label>
                    <ul>
                        <li><a href="#">Inside Bangladesh</a></li>
                        <li><a href="#">Outside Bangladesh</a></li>
                        <li><a href="#">Hajj Packages</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="desktop-link">Visa Service</a>
                    <input type="checkbox" id="show-services">
                    <label for="show-services">Visa Service</label>

                </li>
                <li><a href="#">Log In</a></li>
            </ul>
        </div>
        <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
        <form action="#" class="search-box">
            <input type="text" onkeyup="searchFunction()" id="show-datalist" name="" placeholder="Type Something to Search..." required>

            <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
        </form>
    </nav>

    <datalist id="datalist">
        <option value="Dhaka"></option>
        <option value="Shylet"></option>
        <option value="cox,Bazar"></option>
        <option value="India"></option>
        <option value="China"></option>
        <option value="canada"></option>
    </datalist>

</div><br><br><br>

<section>
    <video id="videoBG" poster="/client/images/background.png" autoplay muted loop >
        <source src="vedio.mp4" type="video/mp4">
    </video>
</section>


<div class="back">

    <div class="find">
        <h1>Find the Adventure of a lifetime</h1><br>

        <div class="search_container">

            <div class="search_content">
                <label for="place">Destination:</label>
                <input type="text" list="datalist"  placeholder="">
            </div>

            <div class="search_content">
                <label for="check-in date">Check-In-Date</label>
                <input type="date">
            </div>

            <div class="search_content">

                <label for="check-in date">Check-Out-Date</label>
                <input type="date">
            </div>

            <div class="search_content">
                <label for="price"> Starting Price</label>
                <input type="number" placeholder="">
            </div>

            <button>Search</button>

        </div>

    </div>


    <div class="rotated_pic">
        <h1>Popular Destinations</h1>
        <div class="gallery">
            <img
                src="picture/shylet.jpg"
                class="gallery__photo gallery__photo--p1"
                alt=""
            />
            <img
                src="picture/pahar.jpg"
                class="gallery__photo gallery__photo--p2"
                alt=""
            />
            <img
                src="picture/pathor.jpg"
                class="gallery__photo gallery__photo--p3"
                alt=""
            />
            <img
                src="picture/sea-beach.jpg"
                class="gallery__photo gallery__photo--p4"
                alt=""
            />
            <img
                src="picture/lalbagkall.jpg"
                class="gallery__photo gallery__photo--p5"
                alt=""
            />
        </div>


    </div>




    <div class="things">

        <div>
            <img src="picture/things.png" id="thingsimg">
        </div>

        <h1>Things to Know Before<br>
            Traveling to other <br>
            Places</h1><br><br>

        <h2>
            1. A small river named Duden flows by their place and <br>supplies it with the necessary regelialia.<br><br>

            2. A small river named Duden flows by their place and <br>supplies it with the necessary regelialia.
            It is a paradi-<br>sematic country, in which roasted parts of sentences <br>fly into your mouth.<br><br>

            3. It is a paradisematic country, in which roasted <br>parts of sentences fly into your mouth.<br>
        </h2><br>
        <h2 id="toggleText" style="display: none">
            4. A small river named Duden flows by their place and <br>supplies it with the necessary regelialia.<br><br>

            5. A small river named Duden flows by their place and <br>supplies it with the necessary regelialia.
            It is a paradi-<br>sematic country, in which roasted parts of sentences <br>fly into your mouth.<br><br>

            6. It is a paradisematic country, in which roasted <br>parts of sentences fly into your mouth.<br>
        </h2>

        <a id="displayText" href="javascript:toggle();"><button>Explore More</button></a>


    </div>


    <div class="title">
        <h1>Our Serivce</h1></div>

    <div class="service">

        <div id="bodyswiper">


            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <h4>Flight Booking</h4>
                        <img src="picture/image 15.png" />
                        <h4>Flight Booking</h4>
                    </div>
                    <div class="swiper-slide">
                        <h4>Hotel Booking</h4>
                        <img src="picture/image 21.png" />
                    </div>
                    <div class="swiper-slide">
                        <h4>Transport Booking</h4>
                        <img src="picture/image 16.png" />
                    </div>
                    <div class="swiper-slide">
                        <h4>Visa Processing</h4>
                        <img src="picture/image 18.png" />
                    </div>
                    <div class="swiper-slide">
                        <h4>Varity of Packages</h4>
                        <img src="picture/image 17.png" />
                    </div>
                    <div class="swiper-slide">
                        <h4>Experienced Tourist Guide</h4>
                        <img src="picture/image 19.png" />
                    </div>
                    <div class="swiper-slide">
                        <h4>Corporate or Social Events</h4>
                        <img src="picture/image 20.png" />
                    </div>
                    <div class="swiper-slide">
                        <h4>Haj & Omrah Package</h4>
                        <img src="picture/image 14.png" />
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </div>



    <br>


    <div class="title">
        <h1>Why Choose Us</h1></div>


    <div class="choose">
        <h3>Travellers is a trusted and reliable tour and travel agency
            among all the leading and updated tour-operating services
            in Bangladesh. We are here to bring the luxury to your traveling.
            Travellers is a proud member of Association of Travel Agents of
            Bangladesh-ATAB and also Tour Operators Association of Bangladesh.
        </h3>



        <div>
            <img src="picture/image 5.png" id="">
            <img src="picture/image 6.png" id="">
            <img src="picture/image 7.png" id="">


            <h2> 10 Years of Experience</h2>
            <h2 class="intern"> International Award </h2>
            <h2 class="customer"> Customer's Review</h2>


        </div>


    </div>


    <section>

        <div class="title">
            <h1>Top Bangladesh Packages</h1></div>

        <div class="top">

            <div class="card_line">

                <div class="card_container">
                    <img src="picture/sea-beach.jpg" alt="Avatar" class="card_image">
                    <div class="card_overlay">
                        <div class="text">
                            Cox,s Bazar<br>
                            <p>Longest Sea-beach</p><br>
                            <a href="E:\web\newslide\single package page.html">See More..</a>

                        </div>
                    </div>
                </div>

                <div class="card_container">
                    <img src="picture/shylet.jpg" alt="Avatar" class="card_image">
                    <div class="card_overlay">
                        <div class="text">
                            Shylet<br>
                            <p>Beautiful Place in Bangladesh</p><br>
                            <a href="E:\web\newslide\single package page.html">See More..</a>
                        </div>
                    </div>
                </div>

                <div class="card_container">
                    <img src="picture/pathor.jpg" alt="Avatar" class="card_image">
                    <div class="card_overlay">
                        <div class="text">
                            Rangamati<br>
                            <p>Natural Beauty</p><br>
                            <a href="E:\web\newslide\single package page.html">See More..</a>
                        </div>
                    </div>
                </div>

                <div class="card_container">
                    <img src="picture/image 8.png" alt="Avatar" class="card_image">
                    <div class="card_overlay">
                        <div class="text">
                            Shundharban<br>
                            <p>Longest Mnagrove Forest</p><br>
                            <a href="E:\web\newslide\single package page.html">See More..</a>
                        </div>
                    </div>
                </div>

                <div class="card_container">
                    <img src="picture/lalbagkall.jpg" alt="Avatar" class="card_image">
                    <div class="card_overlay">
                        <div class="text">
                            Lalbagh Kalla<br>
                            <p>Old Dhaka beauty</p><br>
                            <a href="E:\web\newslide\single package page.html">See More..</a>
                        </div>
                    </div>
                </div>

                <div class="card_container">
                    <img src="picture/nilgiri.jpg" alt="Avatar" class="card_image">
                    <div class="card_overlay">
                        <div class="text">
                            nilgiri<br>
                            <p>Winter Beauty</p><br>
                            <a href="E:\web\newslide\single package page.html">See More..</a>
                        </div>
                    </div>
                </div>

                <div class="card_container">
                    <img src="picture/image 10.png" alt="Avatar" class="card_image">
                    <div class="card_overlay">
                        <div class="text">
                            Shylet<br>
                            <p>Tea garden.</p><br>
                            <a href="E:\web\newslide\single package page.html">See More..</a>
                        </div>
                    </div>
                </div>

            </div>


            <a href="E:\web\newslide\insideBangladesh.html"><button>View All Packages</button></a>

        </div>

    </section>

        <section>

            <div class="title">
                <h1>Popular International Packages</h1></div>

            <div class="popular">


                <div class="card_line">

                    <div class="card_container">
                        <img src="picture/image 22.png" alt="Avatar" class="card_image">
                        <div class="outside_card_overlay">
                            <div class="text">
                                Sea-Beach<br>
                                <p>Beautiful Beach in Singapore</p><br>
                                <a href="E:\web\newslide\single package page.html">See More..</a>
                            </div>
                        </div>
                    </div>

                    <div class="card_container">
                        <img src="picture/image 23.png" alt="Avatar" class="card_image">
                        <div class="outside_card_overlay">
                            <div class="text">
                                Tembel<br>
                                <p>Beautiful Place </p><br>
                                <a href="E:\web\newslide\single package page.html">See More..</a>
                            </div>
                        </div>
                    </div>

                    <div class="card_container">
                        <img src="picture/image 9.png" alt="Avatar" class="card_image">
                        <div class="outside_card_overlay">
                            <div class="text">
                                Mondir<br>
                                <p>Beautiful Place </p><br>
                                <a href="E:\web\newslide\single package page.html">See More..</a>
                            </div>
                        </div>
                    </div>

                    <div class="card_container">
                        <img src="picture/image 24.png" alt="Avatar" class="card_image">
                        <div class="outside_card_overlay">
                            <div class="text">
                                Stachu<br>
                                <p>Beautiful Place in chine</p><br>
                                <a href="">See More..</a>
                            </div>
                        </div>
                    </div>

                    <div class="card_container">
                        <img src="picture/image 24.png" alt="Avatar" class="card_image">
                        <div class="outside_card_overlay">
                            <div class="text">
                                Stachu<br>
                                <p>Beautiful Place in chine</p><br>
                                <a href="">See More..</a>
                            </div>
                        </div>
                    </div>


                    <div class="card_container">
                        <img src="picture/image 9.png" alt="Avatar" class="card_image">
                        <div class="outside_card_overlay">
                            <div class="text">
                                Mondir<br>
                                <p>Beautiful Place </p><br>
                                <a href="">See More..</a>
                            </div>
                        </div>
                    </div>


                </div>







                <a href="E:\web\newslide\outsideBangladesh.html"><button>View All Packages</button></a>




            </div>

        </section>

        <div class="title">
            <h1>Special Offers</h1></div>

        <div class="special">



            <div class="cards1">

                <h3>Selected <br>places<br>
                    inside Bangladesh</h3><br><br><br><br>
                <h2>35%</h2><br><br>

                <h4>Last Minute Offer</h4><br><br><br>
                <button>See Offer</button>

            </div>
            <div class="cards2">
                <h3>Selected <br>places<br>
                    International</h3><br><br><br><br>
                <h2>25%</h2><br><br>

                <h4>Last Minute Offer</h4><br><br>
                <button>See Offer</button>
            </div>






        </div>
        <button class="specialButton">View More</button>


        <div class="beautiful">
            <img src="picture/beautful bangladesh.png" id="">
            <img src="picture/tourism board.png" id="">
            <img src="picture/civil.jpg" id="">




        </div>

</div>
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




<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>





<script>
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });

    // $('.slide').slide();



</script>








</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<script src={{asset('assets/script.js') }}></script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js integrity=”sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q” crossorigin=”anonymous”></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<script>
    function searchFunction(){
        let element = document.getElementById("show-datalist");
        let search_key = element.value;
        const datalist = $('.datalist');
        console.log(search_key);
        $.get('{{ url('home/search') }}', search_key).done(function (response) {
            response['result'].forEach(function (item){
                let option = document.createElement('option');
                option.value = item['name'];
                datalist.appendChild(option);
            });
        }).fail(function (response) {
            console.log(response);
        });
    }
</script>

{{--<script>--}}

{{--    $('#show-datalist').keyup(delay(function (e) {--}}
{{--        console.log('searched result');--}}
{{--        let search_key = $(this).val();--}}
{{--        const datalist = $('.datalist');--}}
{{--        console.log(search_key);--}}
{{--        $.get('{{ route('search') }}', search_key).done(function (response) {--}}
{{--            $.each(response.result, function (i, index){--}}

{{--            });--}}
{{--            response.result.forEach(function (item){--}}
{{--                let option = document.createElement('option');--}}
{{--                option.value = item['name'];--}}
{{--                datalist.appendChild(option);--}}
{{--            });--}}
{{--        }).fail(function (response) {--}}
{{--            console.log(response);--}}
{{--        });--}}
{{--    }, 500));--}}
{{--</script>--}}
</html>
