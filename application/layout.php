<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		$router = new Router($_SERVER['REQUEST_URI']); ?>

<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Lazy Bear Boilerplate<?php print (isset($router->title)) ? ' - ' . $router->title : '' ; ?></title>

		<link href='http://fonts.googleapis.com/css?family=Roboto:100,400,300' rel='stylesheet' type='text/css'>
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="/assets/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
		<link href="/assets/css/application.css" rel="stylesheet" media="screen">

		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="/assets/js/bootstrap.min.js"></script>
		<script src="/assets/js/application.js"></script>

	</head>

	<body class="<?php print $router->module; ?>">

		<div class="header">
			<div class="container">

				<h1>Lazy Bear Boilerplate</h1>

				<ul class="nav nav-pills pull-right">
					<li <?php if ($router->module === "home") { print 'class="active"'; } ?>><a href="/home">Home</a></li>
					<li <?php if ($router->module === "about") { print 'class="active"'; } ?>><a href="/about">About</a></li>
					<li <?php if ($router->module === "contact") { print 'class="active"'; } ?>><a href="/contact">Contact</a></li>
				</ul>
			</div>
		</div>

		<?php require_once $router->page; ?>

		<div class="footer">
			<div class="container">
				<div class="pull-left">Lazy Bear Creations 2013</div>
				<div class="pull-right">Version 2.0.2</div>
			</div>
		</div>

	</body>
</html>
