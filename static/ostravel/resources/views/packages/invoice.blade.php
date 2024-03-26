<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Bill Page </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/responsive.css') }}" media="all" />
    <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css”rel=”nofollow” integrity=”sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm” crossorigin=”anonymous”>
    <link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css”rel=”nofollow” integrity=”sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I” crossorigin=”anonymous”>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

</head>
<body>


<div class="hero_bookform_bill">
    <div class="book_form_bill">

        <div>
            <div class="resetbill"><h1>Booking Bill</h1></div>
            <div class="bill">
                <label>Total Amount:</label>
                <h5>{{$total_price}}</h5>
                <h5>Taka</h5>

            </div>
            <br>
            <div class="bill">
                <label>Discount Amount:</label>
                <h5>{{$discount_amount}}</h5>
                <h5>Taka</h5>

            </div><br>
            <div class="bill">
                <label>Payable Amount:</label>
                <h5>{{$payable_amount}}</h5>
                <h5>Taka</h5>

            </div>
        </div>
        <div class="paymentbutton">

            <a href="{{ URL::previous() }}"><button type="button" class="btn btn-primary" id="cancelbill">Cancel</button></a>
            <a href=""><button type="button" class="btn btn-primary" id="paymentbill">Pay</button></a>

        </div>


    </div>


</div>


</body>

<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

</html>
