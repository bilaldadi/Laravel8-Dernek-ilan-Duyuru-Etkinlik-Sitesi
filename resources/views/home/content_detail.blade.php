<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>ESC Details</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/lightbox.css">
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
    <!--


     <!-- styles for the stars -->
            <style amp-custom>
                .rating {
                    --star-size: 2;  /* use CSS variables to calculate dependent dimensions later */
                    padding: 0;  /* to prevent flicker when mousing over padding */
                    border: none;  /* to prevent flicker when mousing over border */
                    unicode-bidi: bidi-override; direction: rtl;  /* for CSS-only style change on hover */
                    text-align: left;  /* revert the RTL direction */
                    user-select: none;  /* disable mouse/touch selection */
                    font-size: 3em;  /* fallback - IE doesn't support CSS variables */
                    font-size: calc(var(--star-size) * 1em);  /* because `var(--star-size)em` would be too good to be true */
                    cursor: pointer;
                    /* disable touch feedback on cursor: pointer - http://stackoverflow.com/q/25704650/1269037 */
                    -webkit-tap-highlight-color: rgba(0,0,0,0);
                    -webkit-tap-highlight-color: transparent;
                    margin-bottom: 1em;
                }
                /* the stars */
                .rating > label {
                    display: inline-block;
                    position: relative;
                    width: 1.1em;  /* magic number to overlap the radio buttons on top of the stars */
                    width: calc(var(--star-size) / 3 * 1.1em);
                }
                .rating > *:hover,
                .rating > *:hover ~ label,
                .rating:not(:hover) > input:checked ~ label {
                    color: transparent;  /* reveal the contour/white star from the HTML markup */
                    cursor: inherit;  /* avoid a cursor transition from arrow/pointer to text selection */
                }
                .rating > *:hover:before,
                .rating > *:hover ~ label:before,
                .rating:not(:hover) > input:checked ~ label:before {
                    content: "★";
                    position: absolute;
                    left: 0;
                    color: gold;
                }
                .rating > input {
                    position: relative;
                    transform: scale(3);  /* make the radio buttons big; they don't inherit font-size */
                    transform: scale(var(--star-size));
                    /* the magic numbers below correlate with the font-size */
                    top: -0.5em;  /* margin-top doesn't work */
                    top: calc(var(--star-size) / 6 * -1em);
                    margin-left: -2.5em;  /* overlap the radio buttons exactly under the stars */
                    margin-left: calc(var(--star-size) / 6 * -5em);
                    z-index: 2;  /* bring the button above the stars so it captures touches/clicks */
                    opacity: 0;  /* comment to see where the radio buttons are */
                    font-size: initial; /* reset to default */
                }
                form.amp-form-submit-error [submit-error] {
                    color: red;
                }
            </style>

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


    <!-- Form -->
    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            @livewireScripts
                           @livewire('review',['id'=> $data->id])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-service-item owl-carousel">
                        @foreach($reviews as $rs)
                         <div class="item">
                            <div class="icon">
                                <img src="assets/images/service-icon-01.png" alt="">
                            </div>
                            <div class="down-content">
                                <h4>{{$rs->user->name}}</h4>
                                <p>{{$rs->review}}.</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>









@include('home._footer')
</section>
</body>
</html>
