<?php
	//memulai session
	session_start();
	//cek adanya session
	if(ISSET ($_SESSION["username"])){
	}else header("location:login.php");
?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<body>
	<div class="navbar navbar fixed-top">
		<div class="navbar-inner">
			<div class="row">
				<div class="span2">
					<a class="brand" href="#">&nbsp; &nbsp E-Learning</a>
				</div>
				<div class="nav-collapse">
					<ul class="nav">
					<li class="divider"></li>
					<li class="dropdown offset7">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php echo "Anda login sebagai "; echo $_SESSION["username"];?>
						<b class="caret"></b></a>
					</li>
					<li><a href="logout.php"><i class="icon-off"></i>&nbsp; &nbsp; &nbsp; Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<div class="container">
		<center><h1>Selamat Datang di ELISA Universitas Gadjah Mada</h1></center>
	</div>
</body>