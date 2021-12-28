@php
$daily=\App\Http\Controllers\HomeController::daily()
@endphp

<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="assets/images/course-video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="caption">
                        <h6>Hello Students</h6>
                        <h2>Welcome to ESC</h2>
                        <p>Here is the place that you can learn real English with real English speakers all around the world.</p>
                        @guest
                        <div class="main-button-red">
                            <div><a href="/register">Join Us Now!</a></div>
                        </div>
                        @endguest
                        @auth
                            <div class="main-button-red">
                                <div><a href="{{route('myprofile')}}">Welcome Back {{Auth::user()->name}}</a></div>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Main Banner Area End ***** -->

<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-service-item owl-carousel">

                    <div class="item">
                        <div class="icon">
                            <img src="assets/images/service-icon-01.png" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Best Education</h4>
                            <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="assets/images/service-icon-02.png" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Best Teachers</h4>
                            <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="assets/images/service-icon-03.png" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Best Students</h4>
                            <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="assets/images/service-icon-02.png" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Online Meeting</h4>
                            <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon">
                            <img src="assets/images/service-icon-03.png" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Best Networking</h4>
                            <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="upcoming-meetings" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>All Categories</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="#">Announcments</a></li><br>
                        <li><a href="#">Activities</a></li><br>
                        <li><a href="#">News</a></li>

                    </ul>

                </div>
            </div>


            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="meeting-item">
                            <div class="thumb">
                                <a href=""><img src="{{Storage::url($daily->image)}}" alt="New Lecturer Meeting"></a>
                            </div>
                            <div class="down-content">

                                <a href="{{route('content',['id'=>$daily->id,'title'=>$daily->title])}}"><h4>{{$daily->title}}</h4></a>
                                <p>{{$daily->updated_at}}</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>





<section class="our-facts">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>A Few Facts About Our Association</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="count-area-content percentage">
                                    <div class="count-digit">94</div>
                                    <div class="count-title">Succesed Students</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="count-area-content">
                                    <div class="count-digit">126</div>
                                    <div class="count-title">Current Teachers</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="count-area-content new-students">
                                    <div class="count-digit">2345</div>
                                    <div class="count-title">New Students</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="count-area-content">
                                    <div class="count-digit">32</div>
                                    <div class="count-title">Awards</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="video">
                    <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-us" id="contact">

