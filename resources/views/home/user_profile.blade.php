<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>User Profile</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload landing">

@include('home._header')

<!-- Main -->
<div id="main" class="wrapper style1">
    <div class="container">
        <header class="major">
            <h2>{{Auth::user()->name}}'s Profile</h2>

        </header>
        <div class="row gtr-150">
            <div class="col-4 col-12-medium">

                <!-- Sidebar -->
                <section id="sidebar">
                    <section>
                        <h3>User Panel</h3>

                        <footer>
                            <ul class="list-links">
                                <li><a href="{{route('myprofile')}}" >My Profile</a></li>
                                <li><a href="#" >Content</a></li>
                                <li><a href="#" >Activities</a></li>
                                <li><a href="#" >Payments</a></li>
                                <li><a href="{{route('admin_logout')}}" >Logout</a></li>

                            </ul>
                        </footer>
                    </section>
                    <hr/>

                </div>
            <div class="col-8 col-12-medium imp-medium">

                <!-- Content -->
                <section id="content">

                    @include('profile.show')
                </section>

        </div>
    </div>
</div>


@include('home._footer')

</body>
</html>
