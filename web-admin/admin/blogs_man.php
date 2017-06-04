<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap Admin Theme v3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- jQuery UI -->
        <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- styles -->
        <link href="css/styles.css" rel="stylesheet">
        <style>
            table {
                display: table;
                border-collapse: separate;
                border-spacing: 2px;
                border-color: grey;
            }
        </style>
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
                    <div class="col-md-5">
                        <!-- Logo -->
                        <div class="logo">
                            <h1><a href="index.html">Smotik Admin Panel</a></h1>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-lg-12">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="navbar navbar-inverse" role="banner">
                            <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
                                        <ul class="dropdown-menu animated fadeInUp">

                                            <li><a href="login.html">Logout</a></li>
                                        </ul>
                                    </li>
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
                    <?php include_once('sidebar.php'); ?>
                </div>
                <div class="col-md-10">


                    <div class="content-box-large">
                        <div class="panel-heading">
                            <div class="panel-title">Blog Add</div>

                            <div class="panel-options">

                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" id="blog_frm" method="post">
                                <label>Blog Title:</label>
                                <input type="text" class="form-control" id="blog_title" required="required" name="blog_title">
                                <br>

                                <label >Blog Image</label>

                                <input type="file" class="btn btn-default" id="blog_image" required="required" name="blog_image">
                                <br>
                                <div class="checkbox">
                                    <label> <input type="checkbox" name="blogs_vis" checked id="blogs_vis" value="1"> Visible
                                    </label>
                                </div>
                                <br>
                                <textarea id="tinymce_full" name="content_blog"></textarea>
                                <br>

                                <input type="hidden" name="ent_type" id="ent_type" value="save" />
                                <button type="submit" class="btn btn-primary" id="save_btn" >Save</button>

                                <span id="text-success" id="blogs_res"></span>
                            </form>
                        </div>
                    </div>









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

        <link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link> 

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- jQuery UI -->
        <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
        <script src="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

        <script src="vendors/ckeditor/ckeditor.js"></script>
        <script src="vendors/ckeditor/adapters/jquery.js"></script>

        <script type="text/javascript" src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>

        <script src="js/custom.js"></script>
        <script src="js/editors.js"></script>

        <!-- Custom Scripts -->
        <script src="js/blogs.js"></script>
        <script>
            $(document).ready(function () {

                var link = window.location.href;
                var param = link.split('?');
                var urlparam = param[1];
                urlparam = urlparam.split('=');
                urlparam = urlparam[1];
                if (urlparam !== "undefined") {
                    $.get("blogs_man_class.php", {get_content: "get",id:urlparam}).done(function (response) {
                        console.log(response);
                        var data = JSON.parse(response);
                        console.log(data);
                        $('#blog_title').val(data.subtitle);
                        $("#tinymce_full").html(data.content);
                    });
                }
            });
        </script>
    </body>
</html>