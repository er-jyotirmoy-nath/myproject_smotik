<!DOCTYPE html>
<html ng-app="smotikapp">
    <head>
        <title>SMOTIK Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- styles -->
        <link href="css/styles.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="header" >
            <div class="container">
                <div class="row" >
                    <div class="col-md-5">
                        <!-- Logo -->
                        <div class="logo">
                            <h1>
                                <a href="index.html">SMOTIK Admin Panel</a>
                            </h1>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">

                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="navbar navbar-inverse" role="banner" ng-controller="indexCtrl">
                            <nav
                                class="collapse navbar-collapse bs-navbar-collapse navbar-right"
                                role="navigation">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown"><a data-target="#" class="dropdown-toggle"
                                                            data-toggle="dropdown">My Account <b class="caret"></b></a>
                                        <ul class="dropdown-menu animated fadeInUp">

                                            <li><a href=""  ng-click="logout()">Logout</a></li>
                                        </ul></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="row">
                <div class="col-md-2">
                    <navigation-bar></navigation-bar>
                </div>
                <div class="col-md-10">
                    <ui-view></ui-view>
                </div>
            </div>
        </div>


        <footer>
            <div class="container">

                <div class="copy text-center">
                    Copyright 2014 <a href='#'>Website</a>
                </div>

            </div>
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>
        <script src="js/angular.js"></script>
        <script src="js/angular/tinymce.js"></script>
        <script src="js/angular-ui-router.min.js"></script>
        
        <script src="js/angular-sanitize.js"></script>
        <script src="app.js"></script>
        <script src="controller/news.js"></script>
        <script src="controller/blogs.js"></script>
        <script src="controller/clients.js"></script>
        <script src="controller/community.js"></script>
        <script src="controller/testimonials.js"></script>
        <script src="controller/products.js"></script>
        <script src="controller/banners.js"></script>
        <script type="text/javascript" src="controller/contact.js"></script>
        <script src="controller/aboutus.js"></script>
        <script src="controller/solutions.js"></script>
      <!-- <script src="js/login_script.js"></script> -->
        <script src="directives/mainDirective.js"></script>
        
        <script src="services/logincheck.js"></script>
        <script src="js/custom.js"></script>
        
    </body>
</html>
