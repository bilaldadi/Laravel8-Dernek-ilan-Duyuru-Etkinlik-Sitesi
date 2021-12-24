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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <!--

    TemplateMo 569 Edu Meeting

    https://templatemo.com/tm-569-edu-meeting

    -->
</head>
<body class="is-preload landing">

@include('home._header')

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <h2>Contact</h2>
            </div>
        </div>
    </div>
</section>

<section class="meetings-page" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="meeting-single-item">
                            <div class="thumb">
                                <img src="images/pic07.jpg" alt="">
                            </div>
                            <div class="down-content">

                                <p>
                                    {{$setting->contact}}
                                </p>


                                <div class="col-lg-12">
                                    <div class="share">
                                        <h5>Share:</h5>
                                        <ul>
                                            <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="main-button-red">
                        <a href="{{ route('home') }}">Back To Home Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


            <!-- Form -->
<section class="contact-us" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 align-self-center">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contact" action="{{route('sendmessage')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Let's get in touch</h2>
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
                                        <input name="phone" type="text" id="phone" placeholder="Phone Number" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="right-info">
                    <ul>
                        <li>
                            <h6>Phone Number</h6>
                            <span>{{$setting->phone}}</span>
                        </li>
                        <li>
                            <h6>Email Address</h6>
                            <span>{{$setting->email}}</span>
                        </li>
                        <li>
                            <h6>Street Address</h6>
                            <span>{{$setting->address}}</span>
                        </li>
                        <li>
                            <h6>Website URL</h6>
                            <span>www.meeting.edu</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



@include('home._footer')
</section>
</body>
</html>
