<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education Template - Meeting Detail Page</title>

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

                <h2>Subscribe with us to see the details </h2>
            </div>
        </div>
    </div>
</section>

<section class="upcoming-meetings" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Subscription</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories">
                    <h4>Subscription Catgories</h4>
                    <ul>
                        <li><a href={{route('user_payment_show')}}>Monthly Subscription</a></li>
                        <li><a href={{route('user_payment_show')}}>Yearly Subscription</a></li>

                    </ul>

                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>₺30.00</span>
                                </div>
                                <a href="meeting-details.html"><img src="{{asset('assets')}}/images/meeting-01.jpg" alt="New Lecturer Meeting"></a>
                            </div>
                            <div class="down-content">
                                <a href={{route('user_payment_show')}}><h4>Monthly Subscription</h4></a>
                                <p>This Monthly Subscription will allow you to have our full services for only one month.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>₺300.00</span>
                                </div>
                                <a href="meeting-details.html"><img src="{{asset('assets')}}/images/meeting-01.jpg" alt="New Lecturer Meeting"></a>
                            </div>
                            <div class="down-content">
                                <a href={{route('user_payment_show')}}><h4>Yearly Subscription</h4></a>
                                <p>This Yearly Subscription will allow you to have our full services for only one Year.</p>
                            </div>
                            <div class="col-lg-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@include('home._footer')
</body>
</html>
