<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title> New Payment</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/lightbox.css">
    <!--

    TemplateMo 569 Edu Meeting

    https://templatemo.com/tm-569-edu-meeting

    -->
</head>
<body>

@include('home._header')

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <h2>{{Auth::user()->name}}'s Payments</h2>
            </div>
        </div>
    </div>
</section>

<section class="contact-us" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 align-self-center">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contact" action="{{route('user_payment_add')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Subscribe Now</h2>
                                    @include('home.message')
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <select  name="y_or_m" id="pay_type" onchange="getSelectedValue();">
                                            <option value="Monthly">Monthly</option>
                                            <option value="Yearly" selected>Yearly</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                   <script>
                                       function getSelectedValue(){
                                           var selectedValue = document.getElementById("pay_type").value;
                                           let price;
                                           if (selectedValue == "Monthly"){
                                               price = 30;
                                           }
                                           else {
                                               price = 300;
                                           }
                                           document.getElementById("price").innerHTML = price;
                                       }


                                   </script>

                                   <h3>your total is </h3> <br>
                                    <textarea id="price" name="total"></textarea><br>

                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">Pay Now</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@include('home._footer')
</body>
</html>
