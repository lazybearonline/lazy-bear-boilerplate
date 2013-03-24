<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Router {

	public $uri;
	public $params = array();
	public $route;
	public $module;
	public $title;

	public function __construct($uri) {
		$this->route($uri);
	}

	public function route($uri) {

		$this->uri = $uri;

		if (strstr($uri, "?")) {
			
			$params_string = explode("?", $uri);
			$this->uri = $params_string[0];
			$params_string = $params_string[1];
			
			$params_array = explode("&", $params_string);
			
			foreach ($params_array as $param_pair) {

				$temp_param = explode("=", $param_pair);
				$this->params[$temp_param[0]] = $temp_param[1];
				unset($temp_param);

			}

		}

		if (($this->uri == "/") || ($this->uri == "/index.php")) {
			
			$this->module = 'home';
			$this->route = '/pages/home' . EXT;
		
		} else {

			$this->module = substr($this->uri, 1);
			$this->route = 'pages/' . substr($this->uri, 1) . EXT;

		}

		$this->title = ucfirst($this->module);

		foreach ($this->params as $key => $value) {

			$_GET[$key] = $value;

		}

		var_dump(file_exists($this->route));
		print '<br>';
		var_dump($this->route);

		if (!file_exists($this->route)) {

			$this->module = 'not-found';
			$this->route = PUBLICPATH . '/404.html';

		}

		// var_dump($this->module);

		return $this->route;

	}

}