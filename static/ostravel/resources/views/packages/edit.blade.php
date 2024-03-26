<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add package page </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/responsive.css') }}" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

</head>
<body>

<div class="hero_create_packageform">
    <div class="create_package_form">
        <div class="reset"><h1>Edit Package</h1></div>

        <form action="{{route('packages/post/edit', $package->id)}}" method="post" enctype="multipart/form-data" id="create_packageform" class="create_package-group">
            @csrf
            <div class="createPk_img">
                <label> Place Image:</label>
                <input type="file" class="input-field" name="image_filepath" >

            </div>

            <div class="createPk_img">
                <label>Place Name:</label>
                <input type="text" class="input-field" name="name" placeholder="{{__('Enter Place Name')}}" value="{{$package->name}}" required>

            </div>

            <div class="createPk_img">
                <label> Location:</label>
                <input type="text" class="input-field" name="location" placeholder="{{__('Enter Place Location')}}" value="{{$package->location}}" required>
            </div>

            <div class="createPk_img">
                <label>Description:</label>
                <input type="text" class="input-field" name="description" placeholder="{{__('Place Description')}}" value="{{$package->description}}" required>
            </div>

            <div class="createPk_img">
                <label>Place Type:</label>
                <div class="form-group">
                    <select  type="text"  name="package_type" id="inUserType"  >
                        <option value="inside" id="in0">Inside Bangladesh</option>
                        <option value="outside" id="in1">Outside Bangladesh</option>>


                    </select>
                </div>
            </div>


            <div class="createPk_img">
                <label>Capacity:</label>
                <input type="number" class="input-field" name="capacity" placeholder="{{__('Total Number of capacity')}}" value="{{$package->capacity}}" required>
            </div>

            <div class="createPk_img">
                <label>Food:</label>
                <input type="text" class="input-field" name="food" placeholder="{{__('Food')}}" value="{{$package->food}}" required>
            </div>

            <div class="createPk_img">
                <label>Days/Nights:</label>
                <div class="createPk_dayNight">
                    <input type="number" class="input-field" name="days" placeholder="" value="{{$package->days}}" required>
                    <label>Days</label>
                    <input type="number" class="input-field" name="nights" placeholder="" value="{{$package->nights}}" required>
                    <label>Nights</label>

                </div>
            </div>




            <div class="createPk_img">
                <label>Price(Adult):</label>
                <input type="number" class="input-field" name="adult_per_person_price" placeholder="{{__('Per Person Price')}}" value="{{$package->adult_per_person_price}}"  required>
                <h5>Taka</h5>

            </div>

            <div class="createPk_img">
                <label>Price(Child):</label>
                <input type="number" class="input-field" name="child_per_person_price" placeholder="{{__('Per Person Price')}}" value="{{$package->child_per_person_price}}" required>
                <h5>Taka</h5>

            </div>

            <div class="createPk_img">
                <label>Discount(F):</label>
                <input type="number" class="input-field" name="family_discount_rate" placeholder="{{__('Family Discount Rate')}}" value="{{$package->family_discount_rate}}" required>
                <h5>%</h5>

            </div>


            <div class="createPk_img">
                <label>Discount(C):</label>
                <input type="number" class="input-field" name="corporate_discount_rate" placeholder="{{__('Corporate Discount Rate')}}" value="{{$package->corporate_discount_rate}}" required>
                <h5>%</h5>

            </div>

            <div class="createPk_img">
                <label>Offer Type:</label>
                <div class="form-group">
                    <select  type="text"  name="offer_type" id="inUserType" >
                        <option value="regular" id="in0">Regular Offer</option>
                        <option value="special" id="in1">Special Offer</option>>
                    </select>
                </div>
            </div>


            <br><br> <br><br>

            <button type="submit" class="submit-btn">{{__('Submit')}}</button>

            <br><br>


        </form>


    </div>


</div>





</body>
</html>
