<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Vertex, singple page mobile app theme.">
    <meta name="keywords" content="vertex, theme, app, single page">
    <meta name="author" content="rype pixel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bright Solutions - Do Bright, get Bright, live Bright</title>
    <script src="js/html5shiv.js"></script>  <!-- support for HTML5 in IE8 -->
    <!-- CSS file links -->
    <link href="{{url('assets/styles/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{url('assets/styles/style.css')}}" rel="stylesheet" type="text/css" media="all" id="styleChange" />
    <link href="{{url('assets/styles/jquery.bxslider.css')}}" rel="stylesheet" />
    <link href="{{url('assets/styles/lightbox.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{url('assets/styles/responsive.css')}}" type="text/css" rel="stylesheet" />
</head>

<body>

<!-- Header Start -->
<header class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="current"><a href="#sliderAnchor">Home</a></li>
                {{--<li><a href="#featuresAnchor">Features</a></li>--}}
                {{--<li><a href="#screenshotsAnchor">Screenshots</a></li>--}}
                {{--<li><a href="#howItWorksAnchor">How It Works</a></li>--}}
                {{--<li><a href="#pricingAnchor">Pricing</a></li>--}}
                {{--<li><a href="#faqAnchor">Faq</a></li>--}}
                {{--<li><a href="#ourTeamAnchor">Our Team</a></li>--}}
                {{--<li><a href="#contactAnchor" style="padding-right:0px;">Contact</a></li>--}}
            </ul>
        </div><!--/.navbar-collapse -->
    </div><!-- END Container -->
</header><!-- END Header -->

<!-- Slider Start -->
<a class="anchor" id="sliderAnchor"></a>
<section class="jumbotron">
    <div class="container">

        <ul class="slides" style="display:none;">
            <li>
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6 slideText">
                    <h1><span>Bright</span> Solutions</h1>
                    <p>Do Bright, get Bright, <span>Live Bright</span></p><br/>
                </div>
            </li><!-- END Slide 1 -->
            {{--<li>--}}
                {{--<div class="col-lg-6">--}}

                {{--</div>--}}
                {{--<div class="col-lg-5 col-lg-offset-1 slideText">--}}
                    {{--<h1><span>Connect &amp; share</span> easier then ever.</h1>--}}
                    {{--<p>Join a growing community on Vertex using the iPad,--}}
                        {{--iPhone, Andriod and web. Lorem ipsum dolor sit amet,--}}
                        {{--consectetur adipiscing elit. Lorem ipsum dolor sit amet,--}}
                        {{--consectetur adipiscing elit </p>--}}
                    {{--<form>--}}
                        {{--<input type="text" name="email" value="Your email" id="emailInputSlider" style="margin-right:0px" /><br/>--}}
                        {{--<input type="submit" name="submit" value="Start Your Free Trial" class="buttonSmall" id="buttonSmallSlider" />--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</li><!-- END Slide 2 -->--}}
            {{--<li style="text-align:center;">--}}
                {{--<h1><span>Vertex</span> is an incredible app</h1>--}}
                {{--<p>Join our community and start <span>exploring</span> today on iPad, iPhone or Android</p>--}}
                {{--<ul id="slideThreeList">--}}
                    {{--<li>Upload</li>--}}
                    {{--<li>Share</li>--}}
                    {{--<li>Connect</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>

    </div><!-- END Container -->

    <div class="sliderControls">
        <span id="slider-prev"></span>
        <span id="slider-next"></span>
    </div>

</section><!-- END Slider -->

<!-- sub-slider message Start -->
<section id="subSliderMessage">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Bright is there to support you by <span>removing clutter</span> and giving you a pat on your back simply because we know <span>you deserve it</span></span></h2>
            </div>
        </div>
    </div><!-- END container -->
</section><!-- END Sub-slider message -->

<!-- Features Start -->
<a class="anchor" id="featuresAnchor"></a>
<section id="features">
    <div class="container">
        <div class="row"><div class="col-lg-12"><h3>Modules</h3></div><div class="col-lg-12"><img class="dividerWide" src="{{url('assets/images/divider.png')}}" alt=""></div></div>
        <div class="row">
            <div class="col-lg-4 featureItem">
                <div class="featureIcon" id="addUserIcon"></div>
                <h4>LiveBRIGHT</h4>
                <p>Lorem ipsum dolor sit quis amet, consectetur adipiscing elit. Aenean leo lectus sollicitudin convallis quis eget libero. Aliquam laoreet tellus ut libero semper, egestas velit malesuada.  </p>
                <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4 featureItem">
                <div class="featureIcon" id="cloudIcon"></div>
                <h4>CommuneBRIGHT</h4>
                <p>Lorem ipsum dolor sit quis amet, consectetur adipiscing elit. Aenean leo lectus sollicitudin convallis quis eget libero. Aliquam laoreet tellus ut libero semper, egestas velit malesuada.  </p>
                <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4 featureItem">
                <div class="featureIcon" id="gearIcon"></div>
                <h4>StudyBRIGHT</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis leo lectus sollicitudin convallis quis eget libero. Aliquam laoreet tellus ut libero semper, egestas velit malesuada.  </p>
                <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div>
        </div><!-- END Row -->
    </div><!-- END Container -->
</section><!-- END Features -->

<!-- Start Our Team -->
<section id="ourTeam">
    <a class="anchor" id="ourTeamAnchor"></a>
    <div class="container">
        <div class="row"><div class="col-lg-12"><h3>Our Team</h3></div><div class="col-lg-12"><img class="dividerWide" src="{{url('assets/images/divider.png')}}" alt=""></div></div>
        <div class="row">
            <div class="col-lg-6 teamMemberInfo">
                <img class="teamImage" src="images/teamImage1.png" alt="" />
                <div class="col-lg-7 teamText">
                    <h4><span>Ferin Imeci</span> / Mastermind</h4>
                    <p>Lorem ipsum dolor non, consectetur adipiscing
                        elit. Aenean lectus sollicitudin convallis quis
                        libero. Aliquam laoreet tellus ut libero semper,
                        egestas velit malesuada. Sed non risus eget
                        dolor vestibulum ullamcorper. Integer feugiat
                        massa molestie.</p>
                    <ul class="socialIcons">
                        <li><a href="#" class="fbIcon" target="_blank"></a></li>
                        <li><a href="#" class="twitterIcon" target="_blank"></a></li>
                        <li><a href="#" class="googleIcon" target="_blank"></a></li>
                        <li><a href="#" class="flickrIcon" target="_blank"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 teamMemberInfo">
                <img class="teamImage" src="images/teamImage2.png" alt="" />
                <div class="col-lg-7 teamText">
                    <h4><span>Eran Machiels</span> / Developer</h4>
                    <p>Lorem ipsum dolor non, consectetur adipiscing
                        elit. Aenean lectus sollicitudin convallis quis
                        libero. Aliquam laoreet tellus ut libero semper,
                        egestas velit malesuada. Sed non risus eget
                        dolor vestibulum ullamcorper. Integer feugiat
                        massa molestie.</p>
                    <ul class="socialIcons">
                        <li><a href="#" class="fbIcon" target="_blank"></a></li>
                        <li><a href="#" class="twitterIcon" target="_blank"></a></li>
                        <li><a href="#" class="googleIcon" target="_blank"></a></li>
                        <li><a href="#" class="flickrIcon" target="_blank"></a></li>
                    </ul>
                </div>
            </div>
        </div><!-- END Row -->
    </div><!-- END Container -->
</section><!-- END Our team -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 about">
                <a href="#" class="logoDark"></a><br/><br/>
                <p>Lorem ipsum dolor amet, consectetur adipiscing elit. Aenean
                    leo lectus sollicitudin convallis eget libero. Aliquam laoreet
                    tellus ut libero semper, egestas velit malesuada. Sed non
                    risus eget dolor amet vestibulum ullamcorper. Integer feugiat
                    molestie.</p>
                <ul class="socialIcons">
                    <li><a href="#" class="fbIcon" target="_blank"></a></li>
                    <li><a href="#" class="twitterIcon" target="_blank"></a></li>
                    <li><a href="#" class="googleIcon" target="_blank"></a></li>
                    <li><a href="#" class="flickrIcon" target="_blank"></a></li>
                </ul>
            </div>
            <div class="col-lg-4 twitter">
                <h4>Latest Tweets</h4>
                <ul>
                    <li><a href="#">@John Doe</a> Lorem ipsum dolor amet, consectetur adipiscing
                        elit. Aenean leo lectus sollicitudin eget libero.<br/><span>2 minutes ago</span></li>
                    <li><a href="#">@John Doe</a> Lorem ipsum dolor amet, consectetur adipiscing
                        elit. Aenean leo lectus sollicitudin eget libero.<br/><span>About an hour ago</span></li>
                </ul>
            </div>
            <div class="col-lg-4 contact">
                <h4>Contact Info</h4>
                <p>Lorem ipsum dolor amet, consectetur adipiscing ipsum dolor.</p>
                <ul>
                    <li><img src="images/icons/footerPhone.png" alt="phone icon" />1-123-345-6789</li>
                    <li><img src="images/icons/footerPin.png" alt="pin icon" /><a href="#">contact@vertexTheme.com</a></li>
                    <li><img src="images/icons/footerMail.png" alt="mail icon" />123 Smith Drive, Baltimore, MD 21212</li>
                </ul>
            </div>
        </div><!-- END Row -->
    </div><!-- END Container -->
</footer><!-- END Footer -->

<!-- JavaScript file links -->
<script src="{{url('assets/javascript/jquery.js')}}"></script>			<!-- Jquery -->
<script src="{{url('assets/javascript/bootstrap.min.js')}}"></script>		<!-- bootstrap -->
<script src="{{url('assets/javascript/jquery.bxslider.min.js')}}"></script>  <!-- bxslider -->
<script src="{{url('assets/javascript/tabs.js')}}"></script> <!-- custom tab script -->
<script src="{{url('assets/javascript/lightbox-2.6.min.js')}}"></script>  <!-- lightbox -->
<script src="{{url('assets/javascript/jquery.scrollTo.js')}}"></script>  <!-- scollTo -->
<script src="{{url('assets/javascript/jquery.nav.js')}}"></script>  <!-- one page nav -->
<script src="{{url('assets/javascript/respond.js')}}"></script>

<script>
    "use strict";
    // ACTIVATE BXSLIDER (for slider section)
    $(document).ready(function(){
        $('.slides').fadeIn().bxSlider({
            auto: true,
            pager: false,
            nextSelector: '#slider-next',
            prevSelector: '#slider-prev',
            nextText: '<img src="{{url('assets/images/nextButton.png')}}" alt="slider next" />',
            prevText: '<img src="{{url('assets/images/prevButton.png')}}" alt="slider prev" />',
            // triggers slider animations on slide change
            onSlideBefore: function(){
                $('.jumbotron img').addClass("fadeInReallyFast");
                $('.jumbotron h1').addClass("fadeInFast");
                $('.jumbotron p').addClass("fadeInMed");
                $('.jumbotron .button').addClass("fadeInSlow");
                $('.jumbotron .buttonSmall').addClass("fadeInSlow");
                $('#emailInputSlider').addClass("fadeInSlow");

                setTimeout (function(){
                    $('.jumbotron img').removeClass("fadeInReallyFast");
                    $('.jumbotron h1').removeClass("fadeInFast");
                    $('.jumbotron p').removeClass("fadeInMed");
                    $('.jumbotron .button').removeClass("fadeInSlow");
                    $('.jumbotron .buttonSmall').removeClass("fadeInSlow");
                    $('#emailInputSlider').removeClass("fadeInSlow");
                }, 1400);
            }
        });

        //Triggers slider animations on page load
        $(document).ready(function() {
            $('.jumbotron img').toggleClass("fadeInReallyFast");
            $('.jumbotron h1').toggleClass("fadeInFast");
            $('.jumbotron p').toggleClass("fadeInMed");
            $('.jumbotron .button').toggleClass("fadeInSlow");
            $('.jumbotron .buttonSmall').toggleClass("fadeInSlow");
            $('#emailInputSlider').toggleClass("fadeInSlow");

            setTimeout (function(){
                $('.jumbotron img').removeClass("fadeInReallyFast");
                $('.jumbotron h1').removeClass("fadeInFast");
                $('.jumbotron p').removeClass("fadeInMed");
                $('.jumbotron .button').removeClass("fadeInSlow");
                $('.jumbotron .buttonSmall').removeClass("fadeInSlow");
                $('#emailInputSlider').removeClass("fadeInSlow");
            }, 1400);
        });

        //activate second bxslider (for testimonials section)
        $('.slides2').bxSlider({
            auto: true,
            controls: false
        });
    });


    // ACTIVATE ONE PAGE NAV
    $(document).ready(function() {
        $('.nav.navbar-nav.navbar-right').onePageNav();
    });
</script>

<script>
    "use strict";
    // SCREENSHOT IMAGE HOVERS
    $('.image').mouseover(function()
    {
        $(".overlay", this).stop(true, true).fadeIn();
    });

    $('.image').mouseout(function()
    {
        $(".overlay", this).stop(true, true).fadeOut();
    });
</script>

<!-- CONTACT FORM -->
<script type="text/javascript">
    <!--//--><![CDATA[//><!--
    $(document).ready(function() {
        $('form#contactForm').submit(function() {
            $('form#contactForm .error').remove();
            var hasError = false;
            $('.requiredField').each(function() {
                if($.trim($(this).val()) == '') {
                    var labelText = $(this).prev('label').text();
                    $(this).parent().append('<span class="error">You forgot to enter your '+labelText+'.</span>');
                    $(this).addClass('inputError');
                    hasError = true;
                } else if($(this).hasClass('email')) {
                    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    if(!emailReg.test($.trim($(this).val()))) {
                        var labelText = $(this).prev('label').text();
                        $(this).parent().append('<span class="error">Sorry! You\'ve entered an invalid '+labelText+'.</span>');
                        $(this).addClass('inputError');
                        hasError = true;
                    }
                }
            });
            if(!hasError) {
                var formInput = $(this).serialize();
                $.post($(this).attr('action'),formInput, function(data){
                    $('form#contactForm').slideUp("fast", function() {
                        $(this).before('<p class="tick"><strong>Thanks!</strong> Your email has been delivered!</p>');
                    });
                });
            }

            return false;
        });
    });
    //-->!]]>
</script>

</body>
</html>
