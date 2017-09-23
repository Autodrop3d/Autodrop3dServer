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
    <link href="{{url('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('css/Lato.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/Catamaran.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/Muli.min.css')}}" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{url("vendor/font-awesome/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{url("vendor/simple-line-icons/css/simple-line-icons.css")}}">
    <link rel="stylesheet" href="{{url("vendor/device-mockups/device-mockups.min.css")}}">

    <!-- Theme CSS -->
    <link href="{{url("css/new-age.min.css")}}" rel="stylesheet">

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
            <a class="navbar-brand page-scroll" href="{{url('/')}}">Autodrop3d</a>
        </div>
    </div>
</nav>

<header class="error">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="header-content" style="text-align: center">
                    <div class="header-content-inner" style="text-align: center; width: 100%">
                        <h1 style="font-size: 800%">500</h1>
                        <h1 class="col-xs-12" style="font-weight: bold">
                            And where do you think you're going?
                        </h1><h2>
                            <a href="{{url('/')}}">Bring me back home!</a>
                        </h2>
                        {{--<a href="#download" class="btn btn-outline btn-xl page-scroll">Check it out!</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

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
<script src="{{url("vendor/jquery/jquery.min.js")}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{url("vendor/bootstrap/js/bootstrap.min.js")}}"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Theme JavaScript -->
<script src="{{url("js/new-age.min.js")}}"></script>

</body>

</html>
