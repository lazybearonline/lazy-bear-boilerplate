<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		$router = new Router($_SERVER['REQUEST_URI']); ?>

<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Smpl.tv <?php print $router->page_title; ?></title>

		<link href='http://fonts.googleapis.com/css?family=Roboto:100,400,300' rel='stylesheet' type='text/css'>
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
		<link href="/assets/css/application.css" rel="stylesheet" media="screen">

	</head>

	<body class="<?php print $router->module; ?>">

		<div class="container">
			<div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="/">Smpl.tv</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li <?php if ($router->module === "home") { print 'class="active"'; } ?>><a href="/home">Home</a></li>
							<li <?php if ($router->module === "about") { print 'class="active"'; } ?>><a href="/about">About</a></li>
							<li <?php if ($router->module === "contact") { print 'class="active"'; } ?>><a href="/contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<?php require_once APPLICATION . $router->route; ?>

		<div class="container"></div>

		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="/assets/js/bootstrap.min.js"></script>
		<script src="/assets/js/application.js"></script>

	</body>
</html>