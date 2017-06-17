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
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <?php include_once 'header_man.php'; ?>
	        </div>
	     </div>
	</div>
  <div class="page-content">
    <div class="row">
    <div class="col-md-2">
      <?php include_once('sidebar.php'); ?>
    </div>
    <div class="col-md-10">
  <ng-view></ng-view>
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
    <script src="js/angular-route.js"></script>
    <script src="js/angular-sanitize.js"></script>
    <script src="app.js"></script>
    <script src="js/news.js"></script>
    <!-- <script src="js/login_script.js"></script> -->

    <script src="js/custom.js"></script>

  </body>
</html>
