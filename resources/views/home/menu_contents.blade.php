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

        </header>

        <a href="#" class="image fit"><img src="{{asset('images')}}/pic07.jpg" alt="" /></a>

<section>

        <div class="table-wrapper">
            <table class="alt">

                <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Keywords</th>
                    <th>Details</th>

                </tr>
                </thead>
                <tbody>
                @foreach($datalist as $rs)
                <tr>
                    <td>{{$rs->updated_at}}</td>
                    <td>{{$rs->title}}</td>
                    <td>{{$rs->keywords}}</td>
                    <td>
                        <a href="{{route('content',['id'=>$rs->id,'title'=>$rs->title])}}" class="button small fit">Details</a>
                    </td>


                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
</section>

    </div>
</div>




@include('home._footer')
</body>
</html>
