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

                <h2>{{Auth::user()->name}}'s Profile</h2>
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
                                <a href=""><img src="images/pic07.jpg" alt=""></a>
                            </div>
                            @include('profile.show')
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="main-button-red">
                            <a href="meetings.html">Back To Meetings List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@include('home._footer')
</body>
</html>