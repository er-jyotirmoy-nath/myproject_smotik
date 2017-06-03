<!DOCTYPE html>
<html>
    <head>
        <title>Smotik Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- jQuery UI -->
        <link
            href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css"
            rel="stylesheet" media="screen">

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- styles -->
        <link href="css/styles.css" rel="stylesheet">

        <link
            href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
            rel="stylesheet">
        <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css"
              rel="stylesheet">
        <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
        <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

        <link href="css/forms.css" rel="stylesheet">

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



                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-large">
                                <div class="panel-heading">
                                    <div class="panel-title">Add Testimonial</div>

                                    <div class="panel-options">

                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="rootwizard">

                                        <form class="form-horizontal" role="form" name="testimonial_frm" id="testimonial_frm">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Person Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="pname" name="pname"
                                                           placeholder="Name" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Designation</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                           id="pdesignation" name="pdesignation" placeholder="Designation" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Testimonial</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" placeholder="Testimonial"
                                                              rows="3" name="ptestimonial" id="ptestimonial" required></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox" name="tvisible" value="1" checked> Visible
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                                                Submit</button>
                                            <br>
                                            <span id="testi_save" class="text-success"></span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-box-large">
                        <div class="panel-heading">
                            <div class="panel-title">Testimonials</div>
                        </div>
                        <div class="panel-body">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Person</th>
                                        <th>Designation</th>
                                        <th>Testimonial</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody id="testimonial_table">


                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!--  Page content -->
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
        <!-- jQuery UI -->
        <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

        <script src="vendors/select/bootstrap-select.min.js"></script>

        <script src="vendors/tags/js/bootstrap-tags.min.js"></script>

        <script src="vendors/mask/jquery.maskedinput.min.js"></script>

        <script src="vendors/moment/moment.min.js"></script>

        <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

        <!-- bootstrap-datetimepicker -->
        <link href="vendors/bootstrap-datetimepicker/datetimepicker.css"
              rel="stylesheet">
        <script
        src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>


        <link
            href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css"
            rel="stylesheet" />
        <script
        src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

        <script src="js/custom.js"></script>
        <script src="js/forms.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

        <script src="vendors/datatables/dataTables.bootstrap.js"></script>


        <script src="js/tables.js"></script>
        <!-- Custom Script -->
        <script src="js/testimonial.js"></script>
    </body>
</html>