<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $router = new Router(); ?>

<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Lazy Bear">
		
		<title>Lazy Bear Boilerplate<?php print (isset($router->title)) ? ' - ' . $router->title : '' ; ?></title>

		<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href="/vendor/bootstrap/css/bootstrap.min.css?v=3.0.1" rel="stylesheet" media="screen">
		<link href="/vendor/font-awesome/css/font-awesome.min.css?v=4.0.1" rel="stylesheet" media="screen">
		<link href="/assets/css/application.css" rel="stylesheet" media="screen">

	</head>

	<body class="<?php print $router->module; ?>">

		<?php include 'snippets/header.php'; ?>
		<?php require_once $router->page; ?>
		<?php include 'snippets/footer.php'; ?>

		<script src="/vendor/jquery/jquery.min.js?v=1.10.2"></script>
		<script src="/vendor/bootstrap/js/bootstrap.min.js?v=3.0.1"></script>
		<script src="/vendor/font-awesome/js/font-awesome.min.js?v=4.0.1"></script>
		<script src="/assets/js/application.js"></script>

	</body>
</html>
