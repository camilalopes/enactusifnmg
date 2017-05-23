<!doctype html>
	<?php 
		require_once "../bd/bdconfig.php";
	 ?>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<title>Administrativo</title> 
	<meta property="og:title" content="">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" rel="stylesheet">
	
	<!-- <link rel="stylesheet" type="text/css" href="../css/style.css">
		 <link rel="prefetch" href="../images/zoom.png">
		 <link rel="stylesheet" href="../fancybox/jquery.fancybox-v=2.1.5.css" type="text/css" media="screen">
	-->
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		
</head>

<body>

	<div class="container">
		<div class="tabbable tabs-left">
		  <ul class="nav nav-tabs">
			<li class="active"><a href="#tab1" data-toggle="tab">Portfólio</a></li>
			<li><a href="#tab2" data-toggle="tab">Seção 2</a></li>
		  </ul>
		  <div class="tab-content">
			<div class="tab-pane active" id="tab1">
				<?php require_once "portfolio.php"; ?>
			</div>
			<div class="tab-pane" id="tab2">
			  <p>Olá, estou na seção 2</p>
			</div>
		  </div>
		</div>
	</div>

	<!-- SCRIPTS -->
	<script src="../js/html5shiv.js"></script>
	<script src="../js/jquery-1.10.2.min.js"></script>
	<script src="../js/jquery-migrate-1.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.easing.1.3.js"></script>
	<script type="../text/javascript" src="fancybox/jquery.fancybox.pack-v=2.1.5.js"></script>
	<script src="../js/script.js"></script>
	

</body>

</html>