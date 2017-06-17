<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="header-wrapper">
			<div class="container">
				<div class="col-md-6 text-left">
					<strong>Address :</strong> Lorem ipsum dolor sit amet, consectetur
					adipiscing elit.
				</div>
				<div class="col-md-6">
					<div class="collapse navbar-collapse hdr-menu" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Career</a></li>
							<li><a href="#">Contact us</a></li>
							<li class="head-login"><a href="#" data-toggle="modal"
								data-target="#login-modal"><i class="fa fa-user"
									aria-hidden="true"></i> Login</a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>

		<div class="container">

			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><img
					src="img/logo.png" alt="" /></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse nvtp"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Home</a></li>
					<li><a href="smotik.php?page=aboutus">About US</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown">Our Solutions <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="smotik.php?page=entrance&query=home">Entrance
									Management</a></li>
							<li><a href="security-management.php">Safety and
									Security Management</a></li>
							<li><a href="smart-home-management.php">Smart home
									Management</a></li>
							<li><a href="music-zoning.php">Music Zoning</a></li>
							<li><a href="hospitality-solutions.php">Hospitality
									Solutions</a></li>
							<li><a href="conference-room-automation.php">Conference
									Room Automation Solutions &amp; Systems </a></li>
							<li><a href="smart-solutions.php">Smart Solutions</a></li>
						</ul></li>

					<li><a href="design-your-home.php">Design Your Home</a></li>
					<li><a href="demo/index.php">Digital Home Demo</a></li>
					<li><a href="customer-service.php">Customer Service</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
<script src="https://code.jquery.com/jquery.js"></script>
<script>
    $(document).ready(function() {
	// get current URL path and assign 'active' class
	var element = $('ul.nav a').filter(function () {

            return (this.href == url && (this.href != "http://nsfaaws6.nsf.org/lab_control_v2/main.php" && this.href != "https://wrcnsf.com/lab_control_v2/main.php"));
        }).addClass('active').parent();

        while (true) {
            if (element.is('li')) {
                element = element.parent().addClass('in').parent();
            } else {
                break;

            }
        }


})
</script>
