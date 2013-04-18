<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		$router = new Router($_SERVER['REQUEST_URI']); ?>

<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Lazy Bear">
		
		<title>Lazy Bear Boilerplate<?php print (isset($router->title)) ? ' - ' . $router->title : '' ; ?></title>

		<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href="/vendor/bootstrap/css/bootstrap.min.css?v=2.3.1" rel="stylesheet" media="screen">
		<link href="/vendor/bootstrap/css/bootstrap-responsive.min.css?v=2.3.1" rel="stylesheet" media="screen">
		<link href="/assets/css/application.css" rel="stylesheet" media="screen">

	</head>

	<body class="<?php print $router->module; ?>">

		<?php include 'snippets/header.php'; ?>
		<?php require_once $router->page; ?>
		<?php include 'snippets/footer.php'; ?>

		<script src="/vendor/jquery/jquery.min.js?v=1.9.1"></script>
		<script src="/vendor/bootstrap/js/bootstrap.min.js?v=2.3.1"></script>
		<script src="/assets/js/application.js"></script>

	</body>
</html>
