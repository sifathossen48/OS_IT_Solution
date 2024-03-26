<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book form page </title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/style.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="responsive.css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

</head>
<body>

<div class="hero_bookform">
    <div class="book_form">
        <div class="reset"><h1>Package Booking From</h1></div>

        <form action="{{route('pay', $package->id)}}" method="post" id="bookform" class="book-group" >
            @csrf
            <input type="text" class="input-field"  placeholder="{{__('Enter your Name')}}" name="name" required>
            <input type="text" class="input-field"  placeholder="{{__('Enter your Email')}}" name="email" required>
            <input type="text" class="input-field"  placeholder="{{__('Enter your Phone No')}}" name="phone_number" required>
            <div class="form-group">
                <select  type="text"  name="type" id="inUserType" >
                    <option value="family" >Family</option>
                    <option value="corporate" >Corporate</option>
                    <option value="friends">Friends</option>
                    <option value="solo">Solo</option>
                    <option value="couple">Couple</option>


                </select>
            </div>
            <input type="date" class="input-field"  placeholder="Check-In-Date" name="chek_in_date" required>
            <input type="date" class="input-field"  placeholder="Check-Out-Date" name="chek_out_date" required>

            <input type="number" class="input-field"  placeholder="Total Number of People" name="people_no" required>
            <input type="number" class="input-field"  placeholder="Total Number Of child" name="child_no" required>
            <br><br><br><br>

            <button type="submit" class="submit-btn">Submit</button>

            <br>


        </form>


    </div>


</div>



</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $$('form').on('submit', function (e) {

    })

</script>

</html>
