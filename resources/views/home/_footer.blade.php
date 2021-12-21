<!-- Footer -->
<footer id="footer">
    <ul class="icons">

        <li><a href="https://www.facebook.com/belal.daady/" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
        <li><a href="https://www.linkedin.com/in/bilal-dadi-894a471b6/" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
        <li><a href="https://www.instagram.com/bilal.d7/" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
        <li><a href="https://github.com/bilaldadi" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>

    </ul>
    <ul class="copyright">
        <li>&copy; ESC Association. All rights reserved.</li>
    </ul>
</footer>

</div>

<!-- Scripts -->
<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.scrolly.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.dropotron.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.scrollex.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        $(".Modern-Slider").slick({
            autoplay:true,
            autoplaySpeed:10000,
            speed:900,
            slidesToShow:1,
            slidesToScroll:1,
            pauseOnHover:false,
            dots:true,
            pauseOnDotsHover:true,
            cssEase:'linear',
            fade:true,
            draggable:false,
            prevArrow:'<button class="PrevArrow"></button>',
            nextArrow:'<button class="NextArrow"></button>',
        });

    })
</script>


<script src="{{asset('assets')}}/js/browser.min.js"></script>
<script src="{{asset('assets')}}/js/breakpoints.min.js"></script>
<script src="{{asset('assets')}}/js/util.js"></script>
<script src="{{asset('assets')}}/js/main.js"></script>
