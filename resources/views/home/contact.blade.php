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
                <form method="post" action="#">
                    <div class="row gtr-uniform gtr-50">
                        <div class="col-6 col-12-xsmall">
                            <input type="text" name="name" id="name" value="" placeholder="Name" />
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <input type="email" name="email" id="email" value="" placeholder="Email" />
                        </div>
                        <div class="col-12">
                            <select name="category" id="category">
                                <option value="">- Category -</option>
                                <option value="1">Manufacturing</option>
                                <option value="1">Shipping</option>
                                <option value="1">Administration</option>
                                <option value="1">Human Resources</option>
                            </select>
                        </div>
                        <div class="col-4 col-12-medium">
                            <input type="radio" id="priority-low" name="priority" checked>
                            <label for="priority-low">Low Priority</label>
                        </div>
                        <div class="col-4 col-12-medium">
                            <input type="radio" id="priority-normal" name="priority">
                            <label for="priority-normal">Normal Priority</label>
                        </div>
                        <div class="col-4 col-12-medium">
                            <input type="radio" id="priority-high" name="priority">
                            <label for="priority-high">High Priority</label>
                        </div>
                        <div class="col-6 col-12-medium">
                            <input type="checkbox" id="copy" name="copy">
                            <label for="copy">Email me a copy of this message</label>
                        </div>
                        <div class="col-6 col-12-medium">
                            <input type="checkbox" id="human" name="human" checked>
                            <label for="human">I am a human and not a robot</label>
                        </div>
                        <div class="col-12">
                            <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
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
