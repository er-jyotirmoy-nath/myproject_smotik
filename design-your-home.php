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
        <div class="inner-hghts">
            <img class="img-responsive img-fl" src="img/design-center.png" alt="">
        </div>

        <div class="container srv">
            <div class="row mbp">
                <h2 class="page-header chdg">Design Center </h2>

                <div class="row row-pdt">General Information </div>

                <div class="row row-pd">
                    <div class="col-md-2 pdt">Project Name *</div>
                    <div class="col-md-2"><input class="form-control" id="project-name" name="project-name" placeholder="Project Name" type="text" required></div>
                    <div class="col-md-2 pdt">Project Type *</div>
                    <div class="col-md-2"><input class="form-control" id="project-type" name="project-type" placeholder="Project Type" type="text" required></div>
                    <div class="col-md-2 pdt"><input name="PType" value="New Construction" type="radio"> New Construction</div>
                    <div class="col-md-2 pdt"><input name="PType" value="New Construction" type="radio"> Existing Structure </div>
                </div>

                <div class="row row-pdt">Project Parameters </div>

                <div class="row row-pd">
                    <div class="col-md-2 pdt">Square Feet *</div>
                    <div class="col-md-2"><input class="form-control" id="square-feet" name="square-feet" placeholder="Square Feet" type="text" required></div>
                    <div class="col-md-2 pdt">Floors *</div>
                    <div class="col-md-2"><input class="form-control" id="floors" name="floors" placeholder="Floors" type="text" required></div>
                </div>

                <div class="row row-pdt">Contact Information </div>

                <div class="row row-pd">
                    <div class="col-md-2 pdt">Name *</div>
                    <div class="col-md-2"><input class="form-control" id="name" name="name" placeholder="Name" type="text" required></div>
                    <div class="col-md-2 pdt">Address *</div>
                    <div class="col-md-2"><input class="form-control" id="address" name="address" placeholder="Address" type="text" required></div>
                    <div class="col-md-2 pdt">City *</div>
                    <div class="col-md-2"><input class="form-control" id="city" name="city" placeholder="City" type="text" required></div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-2 pdt">State</div>
                    <div class="col-md-2"><input class="form-control" id="state" name="state" placeholder="State" type="text" required></div>
                    <div class="col-md-2 pdt">Postal code</div>
                    <div class="col-md-2"><input class="form-control" id="postal-code" name="postal-code" placeholder="Postal code" type="text" required></div>
                    <div class="col-md-2 pdt">Mobile *</div>
                    <div class="col-md-2"><input class="form-control" id="mobile" name="mobile" placeholder="Mobile" type="text" required></div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-2 pdt">Phone</div>
                    <div class="col-md-2"><input class="form-control" id="phone" name="phone" placeholder="Phone" type="text" required></div>
                    <div class="col-md-2 pdt">Email *</div>
                    <div class="col-md-2"><input class="form-control" id="email" name="email" placeholder="Email" type="text" required></div>
                    <div class="col-md-2 pdt">Website</div>
                    <div class="col-md-2"><input class="form-control" id="website" name="website" placeholder="Website" type="text" required></div>
                </div>

                <div class="row row-pdd hidden-xs">
                    <div class="col-md-4"><strong>Features of Interest</strong></div>
                    <div class="col-md-2"><strong>Interested</strong></div>
                    <div class="col-md-2"><strong>Not Interested</strong></div>
                    <div class="col-md-4"><strong>Additional Information</strong> </div>
                </div>

                <div class="row row-pdd">
                    <div class="col-md-12"><strong>Security</strong></div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Burglar Alarm System</div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" name="Security" type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" name="Security" type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="security_info" name="security_info" placeholder="" type="text" required> </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Surveillance Camera System</div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" name="Camera" type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" name="Camera" type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="camera_info" name="camera_info" placeholder="" type="text" required> </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Video Door Phone</div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" name="VDP" type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" name="VDP" type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="vdp_info" name="vdp_info" placeholder="" type="text" required> </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Access Control System</div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" name="Access" type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" name="Access" type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="access_info" name="access_info" placeholder="" type="text" required> </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> <strong>Lighting Automation</strong></div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" name="LightWire" type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" name="LightWire" type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="lightwire_info" name="lightwire_info" placeholder="" type="text" required> </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> <strong>Curtain Control</strong></div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" name="curtain" type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" name="curtain" type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="curtain_info" name="curtain_info" placeholder="" type="text" required> </div>
                </div>

                <div class="row row-pdd">
                    <div class="col-md-12"><strong>Media / Entertainment</strong></div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Multi-Room, Multi-Source Audio</div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" name="Audio" type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" name="Audio" type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="audio_info" name="audio_info" placeholder="" type="text" required> </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Dedicated Home Theater / Media Room</div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" name="Theater" type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" name="Theater" type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="theater_info" name="theater_info" placeholder="" type="text" required> </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Video Distribution </div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" name="video" type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" name="video" type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="video_info" name="video_info" placeholder="" type="text" required> </div>
                </div>

                <div class="row row-pdd">
                    <div class="col-md-12"><strong>Structured Cabling </strong></div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Voice (Telephony), EPABX</div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" name="Voice" type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" name="Voice" type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="voice_info" name="voice_info" placeholder="" type="text" required> </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Data (Computer Networking)</div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" name="Data" type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" name="Data" type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="data_info" name="data_info" placeholder="" type="text" required> </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Video (TV, Internal Video) </div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" name="Videotv" type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" name="Videotv" type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="videotv_info" name="videotv_info" placeholder="" type="text" required> </div>
                </div>

                <div class="row row-pdd">
                    <div class="col-md-12"><strong>Technology-Enabled Services </strong></div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Elderly Monitoring</div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" name="HomeAuto" type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" name="HomeAuto" type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="homeauto_info" name="homeauto_info" placeholder="" type="text" required> </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Children Monitoring </div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" name="HomeAuto2" type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" name="HomeAuto2" type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="homeauto2_info" name="homeauto2_info" placeholder="" type="text" required> </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> People with Disabilities </div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" name="HomeAuto3" type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" name="HomeAuto3" type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="homeauto3_info" name="homeauto3_info" placeholder="" type="text" required> </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Asset Monitoring </div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" name="Media" type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" name="Media" type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div> <input class="form-control" id="media_info" name="media_info" placeholder="" type="text" required> </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-4"><div class="mob-ds">Features of Interest :</div> Event Choreography </div>
                    <div class="col-md-2"><div class="mob-ds">Interested :</div> <input value="Interested" name="Event_Chr" type="radio"></div>
                    <div class="col-md-2"><div class="mob-ds">Not Interested :</div> <input value="Not Interested" name="Event_Chr" type="radio"></div>
                    <div class="col-md-4"><div class="mob-ds">Additional Information :</div><input class="form-control" id="event_chr_info" name="event_chr_info" placeholder="" type="text" required> </div>
                </div>

                <div class="row row-pd">
                    <div class="col-md-12">Please upload floor plans for your project. If you have to upload more than one file, kindly zip and send. If CAD files are not available, rough sketches drawn approximately to scale can be scanned as images and uploaded. Please email <a href="mailto:info@radianceautomation">info@radianceautomation</a>.in other relevant information and any additional drawings. </div>
                </div>

                <div class="row row-pdt">Key Objectives / Comments: </div>

                <textarea class="form-control" id="comments" name="comments" placeholder="Your Comments" rows="4"></textarea><br>

                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default btn-primary pull-left" type="submit">Submit</button>
                    </div>
                </div>

            </div>
        </div>

        <p>&nbsp;</p>

        <!-- Footer -->

        <?php require_once 'footer_module.php';?>
       

        <!-- BEGIN # MODAL LOGIN -->
      <?php include_once 'login_modal.html'; ?>

        <!-- BEGIN # MODAL LOGIN -->
       

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