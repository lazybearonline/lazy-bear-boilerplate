<?php

$_MODULE = get_module($_SERVER['REQUEST_URI']);
$_CONTENT = load_content($_SERVER['REQUEST_URI']);

function load_content($uri = null) {

	if ($uri === null) {
		$uri = $_SERVER['REQUEST_URI'];
	}

	$params = array();
	$page_uri = $uri;

	if (strstr($uri, "?")) {
		
		$uri_params = explode("?", $uri);
		$page_uri = $uri_params[0];
		array_shift($uri_params);
		
		$uri_params = explode("&", $uri_params[0]);
		
		foreach ($uri_params as $value) {
			$temp_params = explode("=", $value);
			$params[$temp_params[0]] = $temp_params[1];
		}

	}

	if (($page_uri == "/") || ($page_uri == "/index.php")) {
		
		$page = 'pages/home.php';
	
	} else {
		$page = 'pages/' . substr($page_uri, 1) . ".php";
	}

	foreach ($params as $key => $value) {
		$_GET[$key] = $value;
	}

	if (!file_exists($page)) {

		// Check database ids - if found redirect to url else 404...

		$_STH = $_DBH->query('SELECT * FROM `url`');
		$_STH->setFetchMode(PDO::FETCH_OBJ);

		var_dump($_STH->rowCount());
		die;

		$_MODULE = 'not-found';
		return "404.html";
	}

	return $page;

}

function get_module($uri = null) {

	if ($uri === null) {
		$uri = $_SERVER['REQUEST_URI'];
	}

	$uri_array = explode("/", $uri);
	$page = $uri_array[1];

	if (strstr($page, "?")) {

		$request_array = explode("?", $page);
		$page = $request_array[0];

	}

	$module = ($page === "") ? "home" : $page;
	
	return $module;

}

function get_page_title($uri = null) {

	if ($uri === null) {
		$uri = $_SERVER['REQUEST_URI'];
	}

	$uri_array = explode("/", $uri);
	$page = $uri_array[count($uri_array) - 1];
	$page = str_replace("-", " ", $page);
	$page = ($page === "") ? "home" : $page;
	$page = " - " . ucfirst($page);

	return $page;

}