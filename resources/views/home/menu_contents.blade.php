<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>ESC Content</title>

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

<!-- Main -->

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <h2>{{$data->title}}</h2>
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
                        <div class="filters">
                            <ul>
                                <li data-filter="*"  class="active">All Catogary</li>
                                <li data-filter=".Announcement">Announcments</li>
                                <li data-filter=".Activities">Activities</li>
                                <li data-filter=".News">News</li>
                            </ul>
                        </div>
                    </div>

        <div class="col-lg-12">
            <div class="row grid">

                @foreach($datalist as $rs)
                    @if ($rs->type == "Announcement")
                        <div class="col-lg-4 templatemo-item-col all Announcement">
                            <div class="meeting-item">
                                @if ($rs->image)
                                    <div class="thumb">
                                        <a href="{{route('content',['id'=>$rs->id,'title'=>$rs->title])}}"><img src="{{Storage::url($rs->image)}}" alt=""></a>
                                    </div>
                                @endif
                                <div class="down-content">
                                    <div class="date">
                                        <h6>{{$rs->updated_at}}</h6>
                                    </div>
                                    <br>
                                    <a href="{{route('content',['id'=>$rs->id,'title'=>$rs->title])}}"><h4>{{$rs->title}}</h4></a>

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach


                    @foreach($datalist as $rs)
                        @if ($rs->type == "Activities")
                            <div class="col-lg-4 templatemo-item-col all Activities">
                                <div class="meeting-item">
                                    @if ($rs->image)
                                        <div class="thumb">
                                            <a href="{{route('content',['id'=>$rs->id,'title'=>$rs->title])}}"><img src="{{Storage::url($rs->image)}}" alt=""></a>
                                        </div>
                                    @endif
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>{{$rs->updated_at}}</h6>
                                        </div>
                                        <br>
                                        <a href="{{route('content',['id'=>$rs->id,'title'=>$rs->title])}}"><h4>{{$rs->title}}</h4></a>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach


                    @foreach($datalist as $rs)
                        @if ($rs->type == "News")
                            <div class="col-lg-4 templatemo-item-col all News">
                                <div class="meeting-item">
                                    @if ($rs->image)
                                        <div class="thumb">
                                            <a href="{{route('content',['id'=>$rs->id,'title'=>$rs->title])}}"><img src="{{Storage::url($rs->image)}}" alt=""></a>
                                        </div>
                                    @endif
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>{{$rs->updated_at}}</h6>
                                        </div>
                                        <br>
                                        <a href="{{route('content',['id'=>$rs->id,'title'=>$rs->title])}}"><h4>{{$rs->title}}</h4></a>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach



    </div>
</div>




@include('home._footer')
</body>
</html>
