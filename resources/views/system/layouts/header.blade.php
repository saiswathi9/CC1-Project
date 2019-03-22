<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CyNeuro</title>
    
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('jscss/bootstrap-4.0.0-beta-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- w3css core CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <!-- Custom fonts for this template -->
    <link href="{{ asset('jscss/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Google Open Sans font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">




    <!-- Custom styles for this template -->
    <link href="{{ asset('jscss/custom/theme/css/agency.css') }}" rel="stylesheet">
    <link href="{{ asset('jscss/custom/theme/css/addition.css') }}" rel="stylesheet">
    <link href="{{ asset('jscss/custom/bootstrap-addition/css/base.css') }}" rel="stylesheet">



    @yield('css')

</head>

<body class="bg-light">
    <!-- Header -->
    <!-- <header class="masthead"> -->
    <header>

            <!-- {{--<div class="intro-text">--}}
                {{----}}
            {{--</div>--}}
        <br> -->
            <!-- <div class="col-md-12 ">
                <img id="logo-main" src="{{ asset("jscss/custom/img/LOGO-400.png") }}" width="225" alt="Logo Thing main logo">

                
            </div> -->
        <!-- Navigation -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #222222;" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{ route('system.home') }}">CyNeuro</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('system.about.publications') }}">Publications</a>
                                <a class="dropdown-item" href="{{ route('system.about.courses') }}">Courses</a>
                                <a class="dropdown-item" href="{{ route('system.about.participants') }}">Participants</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Projects
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('system.analytics.workflow_templates') }}">Workflows</a>
                                <a class="dropdown-item" href="{{ route('system.analytics.datasets') }}">Datasets</a>
                                <a class="dropdown-item" href="{{ route('system.analytics.training_content') }}">Training Content</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Events
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('system.event.mu_symposiums') }}">MU Symposiums</a>
                                <a class="dropdown-item" href="{{ route('system.event.workshops_page') }}">National Workshops</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- <div class="py-5" ng-app="system-app"> -->
    <div class="py-5" ng-app="system-app">

        @yield('content')

    </div>


    <footer>
        <div class="container">
            <div class="row justify-content-center">
            <div class="media">
              <div class="media-left media-middle">
                <img class="nsf-logo" src="{{ asset('jscss/custom/img/nsf_logo.gif') }}" class="media-object">
              </div>
              <div class="media-body">
                <span class="text-muted pull-left align-middle">This project is supported partly by the <a target="_blank" href="https://www.nsf.gov/">National Science Foundation</a> under the award number <a target="_blank" href="https://nsf.gov/awardsearch/showAward?AWD_ID=1730655">OAC-1730655</a></span>
                <p></p>
              </div>
            </div>
        </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="{{ asset('jscss/jquery/jquery.min.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('jscss/popper/popper.min.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('jscss/bootstrap-4.0.0-beta-dist/js/bootstrap.min.js') }}" type="text/javascript" ></script>

    <!-- Angular JS -->
    <script src="{{ asset('jscss/angular-1.6.5/angular.js') }}" type="text/javascript" ></script>

    <!-- Custom theme JS -->
    <script src="{{ asset('jscss/custom/theme/js/agency.js') }}" type="text/javascript" ></script>

    <!-- Custom JS -->
    <script src="{{ asset('jscss/custom/angular/system-app.js') }}" type="text/javascript" ></script>
    @yield('javascript')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125778857-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-125778857-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
    <script src="{{ asset('jscss/custom/theme/js/script.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('jscss/custom/theme/js/neurondetails.js') }}" type="text/javascript" ></script>

</body>

</html>