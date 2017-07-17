<div ng-controller="footerCtrl">
<div class="container-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h2 class="fhdg"> Useful Links</h2>
                <div class="fmenu">
                    <ul>
                        <li>
                            <a href="index.html"> Home</a>
                        </li>
                        <li>
                            <a href="about.html"> About US</a>
                        </li>
                        
                        <li>
                            <a href="design-your-home.html"> Design Your Home</a>
                        </li>
                        <li>
                            <a href="demo/index.html"> Digital Home Demo</a>
                        </li>
                        <li>
                            <a href="customer-service.html"> Customer Service</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <h2 class="fhdg">
                    About Us
                </h2>
                <div class="divider">
                </div>
                <p ng-bind-html="about_message">
                    
                </p>
            </div>
            <div class="col-sm-3">
                <h2 class="fhdg">
                    Get in touch
                </h2>
                <p>
                    <strong>
                        Address :
                    </strong>
                    {{conaddress}}
                </p>
                <p>
                    <strong>
                        Phone No. :
                    </strong>
                    {{comnumber}}
                </p>
                <p>
                    <strong>
                        Email ID :
                    </strong>
                    {{conemail}}
                </p>
                <p>
                    <strong>
                        Website :
                    </strong>
                    {{conwebsite}}
                </p>
            </div>
            <div class="col-sm-3">
                <h2 class="fhdg">
                    Connect with Us
                </h2>
                <p>
                    Join us on our social media links.
                </p>
                <div class="footer_mn">
                    <ul class="icon_footer">
                        <li>
                            <a data-placement="bottom" data-toggle="tooltip" ng-href="{{confacebook}}"  title="Facebook">
                                <i class="fa fa-facebook">
                                </i>
                            </a>
                        </li>
                        <li>
                            <a data-placement="bottom" data-toggle="tooltip" ng-href="{{contweeter}}" title="Twitter">
                                <i class="fa fa-twitter">
                                </i>
                            </a>
                        </li>
                        <li>
                            <a data-placement="bottom" data-toggle="tooltip" ng-href="{{congogleplus}}" title="Google Plus">
                                <i class="fa fa-google-plus">
                                </i>
                            </a>
                        </li>
                        <li class="last">
                            <a data-placement="bottom" data-toggle="tooltip" ng-href="{{conlinkedin}}" title="linkedin">
                                <i class="fa fa-linkedin">
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <footer>
        <div class="col-md-6 text-left">
            Copyright © 2017 - SMOTIK, Design & Developed by
            <strong>
                ShopMate.com
            </strong>
        </div>
        <div class="col-md-6">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Career
                        </a>
                    </li>
                    <li>
                        <a class="last" href="#">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
</div>
<script src="js/jquery.js">
</script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js">
</script>
<script src="js/login.js">
</script>
<script src="js/angular.js">
</script>
<script src="js/angular-modal-service.min.js" type="text/javascript">
</script>
<script src="js/ui-bootstrap-tpls-2.5.0.min.js">
</script>
<script src="js/angular-sanitize.js">
</script>
<script src="app.js">
</script>
<script type="text/javascript" src="controller/footer_js.js"></script>
<script type="text/javascript" src="controller/solution_module_js.js"></script>
<script type="text/javascript" src="controller/designhome_js.js"></script>
<script type="text/javascript" src="controller/websitecontact_js.js"></script>