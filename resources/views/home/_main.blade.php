<!-- Banner -->
<section id="banner">
    <div class="content">
        <header>
            <h2>English Speaking club Association</h2>
            <p>Here for better english learning.<br />
               With the old fashoin ways.</p>
        </header>
        <span class="image"><img src="images/pic01.jpg" alt="" /></span>
    </div>
    <a href="#one" class="goto-next scrolly">Next</a>
</section>

<!-- One -->
<section id="one" class="spotlight style1 bottom">
    <span class="image fit main"><img src="images/pic02.jpg" alt="" /></span>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-4 col-12-medium">
                    <header>
                        <h2>Odio faucibus ipsum integer consequat</h2>
                        <p>Nascetur eu nibh vestibulum amet gravida nascetur praesent</p>
                    </header>
                </div>
                <div class="col-4 col-12-medium">
                    <p>Feugiat accumsan lorem eu ac lorem amet sed accumsan donec.
                        Blandit orci porttitor semper. Arcu phasellus tortor enim mi
                        nisi praesent dolor adipiscing. Integer mi sed nascetur cep aliquet
                        augue varius tempus lobortis porttitor accumsan consequat
                        adipiscing lorem dolor.</p>
                </div>
                <div class="col-4 col-12-medium">
                    <p>Morbi enim nascetur et placerat lorem sed iaculis neque ante
                        adipiscing adipiscing metus massa. Blandit orci porttitor semper.
                        Arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer
                        mi sed nascetur cep aliquet augue varius tempus. Feugiat lorem
                        ipsum dolor nullam.</p>
                </div>
            </div>
        </div>
    </div>
    <a href="#two" class="goto-next scrolly">Next</a>
</section>

<!-- Two -->
<section id="two" class="spotlight style2 right">
    <span class="image fit main"><img src="images/pic03.jpg" alt="" /></span>
    <div class="content">
        <header>
            <h2>Interdum amet non magna accumsan</h2>
            <p>Nunc commodo accumsan eget id nisi eu col volutpat magna</p>
        </header>
        <p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing lorem.</p>
        <ul class="actions">
            <li><a href="#" class="button">Learn More</a></li>
        </ul>
    </div>
    <a href="#three" class="goto-next scrolly">Next</a>
</section>

<!-- Three -->
<section id="three" class="spotlight style3 left">
    <span class="image fit main bottom"><img src="images/pic04.jpg" alt="" /></span>
    <div class="content">
        <header>
            <h2>Interdum felis blandit praesent sed augue</h2>
            <p>Accumsan integer ultricies aliquam vel massa sapien phasellus</p>
        </header>
        <p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing lorem.</p>
        <ul class="actions">
            <li><a href="#" class="button">Learn More</a></li>
        </ul>
    </div>
    <a href="#four" class="goto-next scrolly">Next</a>
</section>

<!-- Four -->
<section id="four" class="wrapper style1 special fade-up">
    <div class="container">
        <header class="major">
            <h2>How we are going to improve our English? </h2>
            <p>Let me explain to you ;)</p>
        </header>
        <div class="box alt">
            <div class="row gtr-uniform">
                <section class="col-4 col-6-medium col-12-xsmall">
                    <span class="icon solid alt major fa-chalkboard-teacher"></span>
                    <h3>Speak any time you want</h3>
                    <p>we offer an opportunity to speak with native speakers at any time you like .</p>
                </section>
                <section class="col-4 col-6-medium col-12-xsmall">
                    <span class="icon solid alt major fa-comment"></span>
                    <h3>Get adviced </h3>
                    <p> its important to get adviced by the native peopel.</p>
                </section>
                <section class="col-4 col-6-medium col-12-xsmall">
                    <span class="icon solid alt major fa-flask"></span>
                    <h3>Experience New Things</h3>
                    <p>With meeting new peopel and learning new Language you will experience alot of new things with us .</p>
                </section>

            </div>
        </div>

    </div>
</section>

<!-- Five -->
<section id="five" class="wrapper style2 special fade">
    <div class="container">
        <header>
            @auth
                <h2> We are Lucky to have you {{Auth::user()->name}}</h2>
        </header>

        <div>
            <a href="/myaccount" class="button">My Account</a>
        </div>
            @endauth
            @guest
            <h2>So get started Today and Sign up</h2>

        </header>

            <div>
                 <a href="/register" class="button">Sign up</a>
            </div>
        @endguest
    </div>
</section>
