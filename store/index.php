<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--custom CSS files -->
    <link href="css/customnav.css" rel="stylesheet">
    <link href="css/slider.css" rel="stylesheet">
	<link href="css/contactform.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

    <title>My Store</title>
  </head>

  <body>
    <nav class="navbar navbar-default navbar-expand-xl navbar-light">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="#"><i class="fa fa-cube"></i>Brand<b>Name</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav">
			<li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="#" class="nav-link">About</a></li>
			<li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Services <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="#" class="dropdown-item">Web Design</a></li>
					<li><a href="#" class="dropdown-item">Web Development</a></li>
					<li><a href="#" class="dropdown-item">Graphic Design</a></li>
					<li><a href="#" class="dropdown-item">Digital Marketing</a></li>
				</ul>
			</li>
			<li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
			<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
		</ul>
		<form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Search by Name">
				<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
			</div>
		</form>
		<ul class="nav navbar-nav navbar-right ml-auto">
			<li class="nav-item"><a href="#" class="nav-link notifications"><i class="fa fa-bell-o"></i><span class="badge">1</span></a></li>
			<li class="nav-item"><a href="#" class="nav-link messages"><i class="fa fa-envelope-o"></i><span class="badge">10</span></a></li>
			<li class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="https://www.tutorialrepublic.com/examples/images/avatar/2.jpg" class="avatar" alt="Avatar"> Paula Wilson <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a></li>
					<li><a href="register.php" class="dropdown-item"><i class="fa fa-calendar-o"></i> Register</a></li>
					<li><a href="login.php" class="dropdown-item"><i class="fa fa-sliders"></i> Login</a></li>
					<li class="divider dropdown-divider"></li>
					<li><a href="logout.php" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item carousel-item active">
						<img src="img/laptop.jpg" alt="">
						<div class="carousel-caption">
							<h3>Amazing Digital Experience</h3>
							<p>Pulvinar leo id risus pellentesque vestibulum. Sed diam libero, sodales eget sapien bibendum.</p>
						</div>
					</div>	
					<div class="item carousel-item">
						<img src="https://cdn.pixabay.com/photo/2014/12/27/15/40/office-581131_960_720.jpg" alt="">
						<div class="carousel-caption">
							<h3>Live Monitoring Tools</h3>							
							<p>Nullam hendrerit justo non leo aliquet imperdiet. Etiam sagittis lectus condime dapibus vitae.</p>
						</div>
					</div>
					<div class="item carousel-item">
						<img src="https://cdn.pixabay.com/photo/2017/07/31/11/44/laptop-2557572_960_720.jpg" alt="">
						<div class="carousel-caption">
							<h3>Attractive Pricing</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pellentesque tempor quis.</p>
						</div>
					</div>
					<div class="item carousel-item">
						<img src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849825_960_720.jpg" alt="">
						<div class="carousel-caption">
							<h3>Award Winning Support</h3>
							<p>Nullam hendrerit justo non leo aliquet imperdiet. Etiam in sagittis lectus ultrices placerat.</p>
						</div>
					</div>
				</div>
				<!-- End Carousel Inner -->
				<ul class="nav nav-pills nav-justified">
					<li data-target="#myCarousel" data-slide-to="0" class="nav-item active"><a href="#" class="nav-link"><strong>About</strong>Lorem ipsum dolor sit amet</a></li>
					<li data-target="#myCarousel" data-slide-to="1" class="nav-item"><a href="#" class="nav-link"><strong>Features</strong> Nesciunt stumpown odio aliqua</a></li>
					<li data-target="#myCarousel" data-slide-to="2" class="nav-item"><a href="#" class="nav-link"><strong>Pricing</strong> Oullam hendrerit justom leow</a></li>
					<li data-target="#myCarousel" data-slide-to="3" class="nav-item"><a href="#" class="nav-link"><strong>Support</strong> Proin suscipit non adipiscing</a></li>
				</ul>
			</div>
		</div>
	</div>

<!-- Content Section -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>PHP CRUD Operations Using PDO Connection</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="pull-right">
						<button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3>Records:</h3>

					<div class="records_content"></div>
				</div>
			</div>
		</div>
<!-- /Content Section -->


		<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
	<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Add New Record</h4>
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="first_name">First Name</label>
						<input type="text" id="first_name" placeholder="First Name" class="form-control"/>
					</div>

					<div class="form-group">
						<label for="last_name">Last Name</label>
						<input type="text" id="last_name" placeholder="Last Name" class="form-control"/>
					</div>

					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="text" id="email" placeholder="Email Address" class="form-control"/>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
				</div>
			</div>
		</div>
	</div>
<!-- // Modal -->
		<!-- Modal - Update User details -->
		<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Update</h4>
					</div>
					<div class="modal-body">

						<div class="form-group">
							<label for="update_first_name">First Name</label>
							<input type="text" id="update_first_name" placeholder="First Name" class="form-control"/>
						</div>

						<div class="form-group">
							<label for="update_last_name">Last Name</label>
							<input type="text" id="update_last_name" placeholder="Last Name" class="form-control"/>
						</div>

						<div class="form-group">
							<label for="update_email">Email Address</label>
							<input type="text" id="update_email" placeholder="Email Address" class="form-control"/>
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
						<input type="hidden" id="hidden_user_id">
					</div>
				</div>
			</div>
		</div>
<!-- // Modal -->
	
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
	<script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>

  </body>
</html>