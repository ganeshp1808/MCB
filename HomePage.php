<!DOCTYPE HTML>
<html>
<head>
	<title>Purrfect Match</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<section id="firstsection">
		<nav id="mainNavbar" class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-demo" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">PURRFECT MATCH</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-demo">
					<ul class="nav navbar-nav">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">SignUp<i class="fa fa-user-plus"></i></a></li>
						<li><a href="#">Login<i class="fa fa-user"></i></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div id="clickit" class="content animated zoomIn">
						<h1 class="animated bigbell tada infinite">Purrfect Match</h1>
						<h3 class="animated bigbell tada infinite">Apply for an 
						internship or join a mission to earn cash, rewards and 
						certificates.</h3>
						<hr>
						<button  class="btn btn-default btn-lg ">
						<i class="fa fa-paw fa-fw"></i> Get Started!</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="secondsection" class="container-fluid py-5">
		
		<div class="container">
			<div class="col-md-4">
				<img src="img/image2.png" alt="">
			</div>
			<div class="col-md-8">
				<h1>Find the best internship opportunities throughout 
				the year</h1>
				<hr />
			    <p>Are you ready to start your internship program, but uncertain
				how to write an effective intern job description? Learn the basics
						and view high-quality sample intern job descriptions here. These 
						are meant to provide you with ideas for your internship listings. 
						You are welcome to post any type of internship on this website; 
						these are just a few examples to get you started.</p>	
			</div>
		</div>
		
	</section>
	<hr />
	<section id="thirdsection">
		<div class="container">
				<blockquote id="quote" class="blockquote">
					<p class="mb-0">First have a Cup of tea before going for a big party.</p>
					<footer class="blockquote-footer text-right"><cite title="Source Title">An Intern</cite></footer>
				</blockquote>
		</div>
	</section>
	<hr />
	<section id="fourthsection">
		<div class="container">
			<div class="col-md-8">
				<h1>Personalized Learning Journey's</h1>
				<hr />
			    <p>You may visit Internship Stories section to find students who may 
				have done similar internship earlier and connect with them and get your
				perfect match you want and learn a lot in the advancing sector of that 
				particular field.</p>	
			</div>
			<div class="col-md-4">
				<img src="img/image3.png" alt="">
			</div>
			
		</div>
	</section>
	<section id="fifthsection">
	<img src="img/image4.png" alt="">
		<div class="container">
			<p>The best opportunities are on Purrfect Match.So What are you looking for ?</p>
		</div>
		<button  class="btn btn-default btn-lg ">
			<i class="fa fa-paw fa-fw"></i> Get Started!
		</button>
	</section>
	<section id="sixthsection" class="container-fluid text-center">
		<h2>Subscribe to Our Websites to give latest Update about Internships.</h2><hr />
		<?php
		//Associative Array Database connection.
		$db=array(
		'hostname'=>'localhost',
		'username'=>'root',
		'password'=>'',
		'database'=>'internship',
		);

		$dbSucces=false;
		$databaseConnected = mysql_connect($db['hostname'],$db['username'],$db['password']);
		if($databaseConnected)
		{
			
			$databaseSelected=mysql_select_db($db['database'],$databaseConnected);
			if($databaseSelected)
			{
				$dbSucces=True;
			}
		}
		if($dbSucces)
		{
			echo'<form action="subscribe.php" method="POST">
					Enter Phone Number:<input type="number" value="" name="FNAME" id="ace-NAME" placeholder="PhoneNumber" required><br /><br /><br />
					<input type="submit" value="Subscribe" name="subscribe" id="ac-embedded-subscribe" class="btn btn-success">
				</form>';
		}
		?>
	</section>
	<marquee id="make" behavior="scroll" direction="left">
	     THANKS FOR VISITING OUR WEBSITE. 
    </marquee>
</body>
</html>