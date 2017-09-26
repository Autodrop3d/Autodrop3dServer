<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Autodrop3D: Autonomous 3D Printing</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('css/Lato.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/Catamaran.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/Muli.min.css')}}" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendor/device-mockups/device-mockups.min.css">

    <!-- Theme CSS -->
    <link href="css/new-age.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src={{asset('js/html5shiv.js')}}></script>
    <script src={{asset('js/respond.js')}}></script>
    <![endif]-->

</head>


<body id="page-top">

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-18917320-7"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments)};
    gtag('js', new Date());

    gtag('config', 'UA-18917320-7');
</script>



<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top"><!--INSERT TEXT FOR TOP CORNER HERE.--></a>
            <a class="navbar-brand page-scroll" href="#page-top">Autodrop3d</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#features">Features</a>
                </li>
                <li>
                    <a class="page-scroll" href="#theCode">Source Code</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="header-content">
                    <div class="header-content-inner">
                        <p>Hey! What's the hizzaps‽<img class="img img-responsive col-xs-12 col-sm-11" src="/img/logo-strip.png"></p>
                        <h1 class="col-xs-12">An open-source platform allowing continous 3D printing with zero human interaction.</h1>
                        <a href="/auto3dprintqueue" class="btn btn-outline btn-xl page-scroll"><img src="/img/kickstarter.png"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">

<p>As seen on</p>
                <div class="row">
                    <div class="col-md-3">
                        <div class="feature-item">
                            <a href="https://hackaday.com/2017/06/24/hackaday-prize-entry-a-3d-printer-management-system/"><img  SRC="img/Hackaday_Logo.svg" style="  width: 100%;height: auto;"></img></a>
                            </div>
                    </div>
                    <div class="col-md-3">
                        <div class="feature-item">
                            <a href="https://3dprinting.com/news/prototype-ejection-system-allows-for-continuous-3d-printing/" ><img  SRC="img/3dprinting.com.png" style="  width: 100%;height: auto;"></img></a>

                        </div>
                    </div>

                </div>
        </div>
</header>

<section id="email" class="download bg-primary text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="section-heading">Discover what all the buzz is about!</h2>
                <p>Sign up for email updates about Autodrop3d</p>
                <form id="contactForm">
                    <div class="form-group">
                        <input id="emailAddress" name = "emailAddress" type="text" class="form-control" placeholder="Email Address">
                    </div>
                    <button type="button" class = 'btn-w btn-outline-w btn-sm email' onclick="emailSubmit()"> <i class="fa fa-envelope-o"></i> Sign Up</button>
                    <input type="submit" style="display: none"/>
                    <div id="contactFeedback"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="features" class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h2>Look at our amazing features!</h2>
                    <p class="text-muted">Perfect for schools, businesses, makerspaces or personal use</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="device-container">
                    <div class="device-mockup iphone6_plus portrait white">
                        <div class="device">
                            <div class="screen">
                                <img src="img/phone-screen.png" class="img-responsive" alt=""> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-item">
                                <img  SRC="img/CAD.png" style="  width: 100%;height: auto;"></img>
                                <h3>Browser Based CAD</h3>
                                <p class="text-muted">We integrate jSketcher a javascript-based parametric 3D modeler. No need to purchase or license expensive CAD software.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <img  SRC="img/queue.png" style="  width: 100%;height: auto;"></img>
                                <h3>Multi User Print Queue</h3>
                                <p class="text-muted">Simply upload your files and receive email notification when they are printed.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="fa fa-4x fa-arrow-circle-down"></i>
                                <h3>Automatic print ejection hardware</h3>
                                <p class="text-muted">Automatic print removal so that your printer can run continuously with out human interaction.
                                    Your parts simply fall in a bin when they are complete</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="icon-lock-open text-primary"></i>
                                <h3>Open Source Awesomeness</h3>
                                <p class="text-muted">It's MIT licenced. You can roll your own solutions, incorporate it into your own project, or use it as is. This cloud is your cloud. </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="theCode" class="container theCode">
    <div class="container">
        <div class="col-lg-12 text-center">
            <div class="section-heading">
                <h2>Dig into the details!</h2>
                <p class="text-muted">Check out our source code and hardware documentation</p>
            </div>
        </div>

        <div class="col-md-8">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-item">
                            <p class="text-muted">Autodrop3d Server</p>
                            <a href="https://github.com/Autodrop3d/autodrop3dServer" class="btn btn-outline btn-xl">Get It On GitHub</a>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <p class="text-muted">Autodrop3d Client for Raspberry Pi</p>
                            <a href="https://github.com/Autodrop3d/autodrop3dClient" class="btn btn-outline btn-xl">Get It On GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-item">
                            <p></p><p></p>
                            <p class="text-muted">Hardware Design Documentation</p>
                            <a href="/buildInstructions" class="btn btn-outline btn-xl page-scroll">Visit instructions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="device-container">
                <div class="device-mockup -apple portrait white">
                    <div class="device">
                        <div class="screen">
                            <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                            <img src="img/demo-screen-2.png" class="img-responsive" alt=""> </div>
                        <div class="button">
                            <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="cta-content">
        <div class="container">
            <h2>Stop waiting.<br>Start building.</h2>
            <p style="color:white;">From downtown New London, Connecticut to the shores of Waikiki. From the Golden Gate Bridge to the European countryside. If you have internet access, you can design and queue your designs to be ready when you return.</p>
            <a href="#contact" class="btn-w btn-outline-w btn-xl page-scroll">Let's Get Started!</a>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<section id="contact" class="contact bg-primary">
    <div class="container">
        <h2>We <i class="fa fa-heart"></i> new friends!</h2>
        <ul class="list-inline list-social">
            {{--<li class="social-twitter">--}}
            {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
            {{--</li>--}}
            <li class="social-facebook">
                <a href="https://www.facebook.com/autodrop3d/"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="social-google-plus">
            <a href="https://plus.google.com/communities/106790991570200175366"><i class="fa fa-google-plus"></i></a>
            </li>
        </ul>
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; 2017 Autodrop3d</p>
        {{--<ul class="list-inline">--}}
        {{--<li>--}}
        {{--<a href="#">Privacy</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#">Terms</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="#">FAQ</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
    </div>
</footer>

<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Theme JavaScript -->
<script src="js/new-age.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    function emailSubmit() {
        $.ajax({method: 'post', url: "{!! url('contactAjax') !!}", dataType: 'json',data:
            {emailAddress: $('#emailAddress').val()
            }}).error(provideFeedback).success(provideFeedback);
        return false;
    }

    function provideFeedback(data) {
        var feedback = $('#contactFeedback');
        feedback.html(data["responseJSON"]["emailAddress"]);
        return false;
    }

    $('#contactForm').submit(function () {
        emailSubmit();
        return false;
    });
</script>

</body>

</html>
