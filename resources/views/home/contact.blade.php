<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>ESC Contact</title>
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
            <h2>Contact Us</h2>

        </header>


        <!-- Content -->
        <section id="content">
            <a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
            {!! $setting->contact !!}

        </section>

        <section id="content">

            <header class="major">
                <h2>Contact Us Form</h2>


            </header>


            <!-- Form -->
            <section>
                <h3>Form</h3>
                @include('home.message')
                <form method="post" action="{{route('sendmessage')}}">
                    @csrf
                    <div class="row gtr-uniform gtr-50">
                        <div class="col-6 col-12-xsmall">
                            <input type="text" name="name" id="name" value="" placeholder="Name" style="color: white"/>
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <input type="email" name="email" id="email" value="" placeholder="Email"style="color: white" />
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <input type="text" name="phone" id="phone" value="" placeholder="Phone Number" style="color: white"/>
                        </div>

                        <div class="col-6 col-12-xsmall">
                            <input type="text" name="subject" id="subject" value="" placeholder="subject" style="color: white" />
                        </div>

                        <div class="col-12">
                            <textarea name="message" id="message" placeholder="Enter your message" rows="6" style="color: white"></textarea>
                        </div>
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Send Message" class="primary" /></li>
                                <li><input type="reset" value="Reset" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </section>

        </section>

    </div>
</div>




@include('home._footer')
</body>
</html>
