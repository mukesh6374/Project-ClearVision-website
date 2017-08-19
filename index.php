<!DOCTYPE html>
<html>
<head>
	<title>Day3</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<?php include'modal.php'; ?>
	<?php include'login.php' ?>
<?php include'register.php' ?>
</head>
<body>
	<div id="wrapper">
		<nav class="navbar ccblue" style="margin-bottom: 0px;">
			<div class="navbar-header">
				<div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span> 
			      </button>
			      <a class="navbar-brand" href="#"><img src="images/logo.png" class="img-responsive" style="height: 30px; width:250px;"></a>
			    </div>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
						<li><i class="icon-home icon-large"></i>&nbsp;<main>FashionWorld</main><span>show world</span>
						<!-- <div class="col-lg-12"> 
							<div class="col-lg-6"><img src="images/1.jpg"></div>	
							<div class="col-lg-6"><img src="images/1.jpg"></div>						
						</div> --></li>
						<li><i class="icon-user icon-large"></i>&nbsp;<main>Electronics</main><span>world in hand</span></li>
						<li><i class="icon-gear icon-large"></i>&nbsp;<main>Entertainment</main><span>Too much fun</span></li>
						
						<li><i class="icon-tint icon-large"></i>&nbsp;<main>Contact</main><span>know us</span></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
						<li><a href="#modal" data-toggle="modal"><i class="glyphicon glyphicon-user"></i>&nbsp;<main>SignUp</main><span>not have account ?</span></a></li>
						<li><a href="#Modal" data-toggle="modal"><i class="glyphicon glyphicon-log-in"></i>&nbsp;<main>Log-In</main><span>already have account ?</span></li>
						
			</ul>
    </div>
		
			
		</nav>
		<?php include'slider.php' ?>
		<br>
			<div id="discount" class="col-lg-12" sty>
				<div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<img src="images/fashiondisc.jpg" class="img-responsive">
							
						</div>
					</div>
					
				</div>
				<div class="col-lg-9">
					<div class="panel panel-default">
						<div class="panel-body">
							<?php include'fashiondeal.php' ?>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div id="discount" class="col-lg-12" sty>
				<div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<img src="images/electrodisc.jpg" class="img-responsive" style="height: 268px;">
						</div>
					</div>
					
				</div>
				<div class="col-lg-9">
					<div class="panel panel-default">
						<div class="panel-body">
							<?php include'electrodeal.php' ?>
						</div>
					</div>
				</div>
			</div>
			<br>
			<!-- <div id="discount" class="col-lg-12" sty>
				<div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<img src="images/disc1.jpg" class="img-responsive">
						</div>
					</div>
					
				</div>
				<div class="col-lg-9">
					<div class="panel panel-default">
						<div class="panel-body">
							<?php //include'entertaindeal.php' ?>
						</div>
					</div>
				</div>
			</div> -->
			
			<?php include'footer.php' ?>
	</div>

<script type="text/javascript" src="js/myscript.js"></script>

</body>
</html>