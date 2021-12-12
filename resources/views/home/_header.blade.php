<div id="page-wrapper">

    <!-- Header -->
    <header id="header">
        <h1 id="logo"><a href="{{ route('home') }}">ESC Association</a></h1>
        <nav id="nav">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>
                    <a href="#">Menus</a>
                    <ul class="@if(!isset($page)) show-on-click @endif" >

                        @php
                            $parentMenu= \App\Http\Controllers\HomeController::menulist()
                        @endphp


                                @foreach($parentMenu as $rs)


                                    <li>
                                        <a href="{{route('home')}}">
                                            {{$rs->title}}
                                            @if(count($rs->children))
                                                @include('home.menutree',['children'=>$rs->children])
                                            @endif
                                        </a>
                                    </li>


                                @endforeach

                    </ul>

                <li><a href="{{route('aboutus')}}">About Us</a></li>
                <li><a href="{{route('references')}}">References</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                @auth
                    <li><a href="{{route('myprofile')}}"> {{Auth::user()->name}} </a></li>
                    <li><a href="{{route('admin_logout')}}">Log out</a></li>
                @endauth
                @guest
                    <li><a href="/register">Sign Up</a></li>
                    <li><a href="/login">Log In</a></li>
                @endguest

            </ul>
        </nav>
    </header>
