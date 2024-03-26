
//login form login and register btn


var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

function register(){
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";
}

function login(){
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0";
}

// login form password hide btn

function myFunction(){
    var a = document.getElementById("password");
    var b = document.getElementById("hide1");
    var c = document.getElementById("hide2");

    if( a.type === 'password'){

        a.type = "text";
        b.style.display ="block";
        c.style.display ="none";


    }
    else{


        a.type = "password";
        b.style.display ="none";
        c.style.display ="block";



    }

}
// login form password hide btn

function toggle() {
    var ele = document.getElementById("toggleText");
    var text = document.getElementById("displayText");
    if(ele.style.display == "block") {
        ele.style.display = "none";

    }
    else {
        ele.style.display = "block";

    }
}




//swiper service of homepage
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


