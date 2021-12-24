<!-- Sub Header -->
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <div class="left-content">
                    <p>Welcome to our  <em>Association</em>.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="right-icons">
                    <ul>
                        <li><a href="https://www.facebook.com/belal.daady"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/bilal.d7/"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/bilal-dadi-894a471b6/"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('home') }}" class="logo">
                        ESC Association
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('home') }}" class="active">Home</a></li>

                        @include('home._menu')

                        <li><a href="{{route('aboutus')}}">About Us</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>

                        @auth
                            <li><a href="{{route('myprofile')}}">{{Auth::user()->name}}</a></li>
                            <li><a href="{{route('admin_logout')}}">Log out</a></li>
                        @endauth
                        @guest
                            <li><a href="/register">Sign Up</a></li>
                            <li><a href="/login">Log In</a></li>
                        @endguest
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
