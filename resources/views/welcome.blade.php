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
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendor/device-mockups/device-mockups.min.css">

    <!-- Theme CSS -->
    <link href="css/new-age.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top"><!--INSERT TEXT FOR TOP CORNER HERE.--></a>
            <!--<a class="navbar-brand page-scroll" href="#page-top">Autodrop3d</a>-->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="/auto3dprintqueue">The Queue</a>
                </li>
                <li>
                    <a class="page-scroll" href="/cadmodel">Web-based CAD</a>
                </li>
                <li>
                    <a class="page-scroll" href="https://github.com/autodrop3d">The Code</a>
                </li>
                <li>
                    <a class="page-scroll" href="#download">Download</a>
                </li>
                <li>
                    <a class="page-scroll" href="#features">Features</a>
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
                        <p><img class="img img-responsive col-xs-12 col-sm-11" src="/img/logo-strip.png"></p>
                        <h1 class="col-xs-12">An open-source platform allowing continous 3D printing with zero human interaction.</h1>
                        <a href="#download" class="btn btn-outline btn-xl page-scroll">Check it out!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="download" class="download bg-primary text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="section-heading">Discover what all the buzz is about!</h2>
                <p>Our app is available on any mobile device! Download now to get started!</p>
                <div class="badges">
                    <a class="badge-link" href="#"><img src="img/google-play-badge.svg" alt=""></a>
                    <a class="badge-link" href="#"><img src="img/app-store-badge.svg" alt=""></a>
                </div>
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
                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                <img src="img/phone-screen.png" class="img-responsive" alt=""> </div>
                            <div class="button">
                                <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                            </div>
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
                                <i class="fa fa-3x fa-windows"></i>
                                <i class="fa fa-3x fa-apple"></i>
                                <i class="fa fa-3x fa-linux"></i>
                                <h3>Runs in the Browser</h3>
                                <p class="text-muted">Cross-platform Compatibility</p>
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
            <li class="social-twitter">
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="social-facebook">
                <a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="social-google-plus">
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </li>
        </ul>
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; 2017 Autodrop3d</p>
        <ul class="list-inline">
            <li>
                <a href="#">Privacy</a>
            </li>
            <li>
                <a href="#">Terms</a>
            </li>
            <li>
                <a href="#">FAQ</a>
            </li>
        </ul>
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

</body>

</html>
