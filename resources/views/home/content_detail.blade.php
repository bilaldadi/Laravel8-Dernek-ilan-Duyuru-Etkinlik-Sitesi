<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>ESC Association</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/main.css" />
    <noscript><link rel="stylesheet" href="{{asset('assets')}}/css/noscript.css" /></noscript>
</head>
<body class="is-preload landing">

@include('home._header')

<!-- Main -->
<div id="main" class="wrapper style1">
    <div class="container">
        <header class="major">
            <h2>{{$data->title}}</h2>
            <p>{{\App\Http\Controllers\Admin\MenuController::getParentsTree($data->menu,$data->menu->title)}}</p>
        </header>

        <!-- Content -->
        <section id="content">
            <h3>Discription</h3>
            <h4>{{$data->description}}</h4>


        </section>

        <section>

            <div class="Modern-Slider">
                <!-- Item -->
                @foreach($datalist as $rs)
                <div class="item">
                    <div class="img-fill">
                        <img src="{{Storage::url($rs->image)}}" alt="">
                    </div>
                </div>
                    @endforeach
                </div>

        </section>



    </div>
</div>






@include('home._footer')
</body>
</html>
