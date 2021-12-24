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
                <h6>{{$data->title}}</h6>
                <h2>{{\App\Http\Controllers\Admin\MenuController::getParentsTree($data->menu,$data->menu->title)}}</h2>
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
                                <a href=""><img src="{{asset('images')}}/pic07.jpg" alt=""></a>
                            </div>
                            <div class="down-content">
                                <h4 class="text-center deatils">{{$data->title}}</h4></a>

                                <p>
                                    {!! $data->description !!}
                                </p>
                                <br>
                                <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="owl-service-item owl-carousel">
                                                @foreach($datalist as $rs)
                                                    <div class="item">
                                                        <div class="icon">
                                                            <img src="{{Storage::url($rs->image)}}" alt="">
                                                        </div>

                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="main-button-red">
                            <a href="{{route('home')}}">Back To Home Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@include('home._footer')
</section>
</body>
</html>
