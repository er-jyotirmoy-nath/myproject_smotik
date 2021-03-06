<?php require_once 'model/main.php'; ?>
<!DOCTYPE html>
<html lang="en" ng-app="smotik_app">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SMOTIK - Smart Life Simplified</title>
        <link href="img/favicon.png" type="image/x-icon" rel="icon" />

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"
              type="text/css">
        <link href="css/agency.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
             <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body ng-app="smotikapp">
        <!-- Navigation -->
        <?php require_once 'includes/navigation_web.php'; ?>

        <!-- Header Carousel -->
        <?php require_once 'banner_module.php'; ?>

        <!-- Page Content -->
        <div class="container">
        <?php require_once 'model/aboutus_model.php'; 
                require_once 'view/pages/aboutus_page.php';
        ?>
        </div>
        <?php require_once 'testimonial_module.php'; ?>

        <!-- Clients Section -->
        <?php require_once 'clients_module.php'; ?>

        <div class="container-grey">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 class="page-header bhdg">Latest News</h2>

                        <div class="latest_news_wrapper">
                            <?php $new_web_load->getNews(); ?>

                            <a href="#" class="more_news">View More News <i
                                    class="fa fa-caret-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <h2 class="page-header bhdg">Blog</h2>

                        <div class="latest_blog_wrapper">

                           
                            <?php $new_web_load->getBlogs(); ?>
                           

                            <a href="#" class="more_news">View More Blog <i
                                    class="fa fa-caret-right" aria-hidden="true"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
       <?php require_once 'contactus_module.php'; ?>

        <div class="container-wrap">
            <div id="googleMap" class="map-bddr"></div>
            <script src="http://maps.googleapis.com/maps/api/js"></script>
            <script>
                function initialize() {
                    var map_canvas = document.getElementById('googleMap');
                    var map_options = {
                        center: new google.maps.LatLng(28.555011, 77.264658),
                        zoom: 15,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                //mapTypeId: google.maps.MapTypeId.HYBRID
                    };
                    var mapPin = "";
                    var map = new google.maps.Map(map_canvas, map_options)
                    var Marker = new google.maps.Marker({
                        map: map,
                        position: map.getCenter()
                    });
                }
                google.maps.event.addDomListener(window, 'load', initialize);
            </script>
        </div>

        <!-- Footer -->

       
        
          <?php require_once 'footer_module.php';?>
       

        <!-- BEGIN # MODAL LOGIN -->
      <?php include_once 'login_modal.html'; ?>

        <!-- /.container -->

        <!-- jQuery -->
       

        <!-- Script to Activate the Carousel -->
        <script>
                    $('.carousel').carousel({
                        interval: 5000
                                //changes the speed
                    })
        </script>

    </body>
</html>
