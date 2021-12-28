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


<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <div class="left-content">
                    <ul>

                        <li style="color: white"><a href="#">Payment</a></li>
                        <li style="color: white"><a href="#">My Qustions</a></li>
                        <li style="color: white"><a href="{{route('admin_logout')}}">Logout</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="meetings-page">
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
                                    <div class="row">
                                        <x-app-layout>
                                        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                            @livewire('profile.update-profile-information-form')

                                        @endif
                                        </div>
                                        </x-app-layout>

                                        <x-app-layout>
                                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                            <div class="mt-10 sm:mt-0">
                                                @livewire('profile.update-password-form')
                                            </div>

                                        @endif

                                        </x-app-layout>

                                        <x-app-layout>
                                        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                            <div class="mt-10 sm:mt-0">
                                                @livewire('profile.two-factor-authentication-form')
                                            </div>

                                        @endif
                                        </x-app-layout>
                                        <x-app-layout>
                                        <div class="mt-10 sm:mt-0">
                                            @livewire('profile.logout-other-browser-sessions-form')
                                        </div>

                                        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())


                                            <div class="mt-10 sm:mt-0">
                                                @livewire('profile.delete-user-form')
                                            </div>
                                        @endif
                                        </x-app-layout>
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
        </div>
    </div>





@include('home._footer')
</section>

</body>
</html>
