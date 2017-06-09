<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SMOTIK - Smart Life Simplified </title>
        <link href="img/favicon.png" type="image/x-icon" rel="icon"/>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
             <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <!-- Navigation -->
        <?php require_once 'includes/navigation_web.php'; ?>


        <!-- Page Content -->
        <div class="container inner-height">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Customer Service</h1>
                </div>
                <div class="col-md-6"><img class="img-responsive" src="img/happy-customer.jpg" alt=""></div>
                <div class="col-md-6 abt-txt">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

                </div>
            </div>

        </div>

        <hr />

        <div class="container">
            <h3 class="hdgg">Happy SMOTIK Communities</h3>
            <div class="col-md-12 abt-txtt">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>

            <div class="row container-padd">
                <div class="col-sm-3 col-xs-6"><img src="img/img2.jpg" class="img-thumbnail" alt=""/></div>
                <div class="col-sm-3 col-xs-6"><img src="img/img2.jpg" class="img-thumbnail" alt=""/></div>
                <div class="col-sm-3 col-xs-6"><img src="img/img2.jpg" class="img-thumbnail" alt=""/></div>
                <div class="col-sm-3 col-xs-6"><img src="img/img2.jpg" class="img-thumbnail" alt=""/></div>
            </div>
        </div>

        <!-- Footer -->

       

        <?php require_once 'footer_module.php';?>
       

        <!-- BEGIN # MODAL LOGIN -->
      <?php include_once 'login_modal.html'; ?>
       

        <!-- /.container -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/login.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })
        </script>

    </body>
</html>