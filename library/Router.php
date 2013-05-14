<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Router {

	public $uri;
	public $params = array();
	public $route;
	public $page;
	public $module;
	public $title;

	public function Router() {

		$this->route = $_SERVER['REQUEST_URI'];

		$this->parse_route();
		$this->get_page();

	}

	public function parse_route() {

		$route = $this->route;

		if (strstr($route, "?")) {
			
			$params_string = explode("?", $route);
			
			$this->route = $params_string[0];
			$params_string = $params_string[1];
			
			$params_array = explode("&", $params_string);
			
			foreach ($params_array as $param_pair) {

				$temp_param = explode("=", $param_pair);
				$this->params[$temp_param[0]] = $temp_param[1];
				$_GET[$temp_param[0]] = $temp_param[1];
				unset($temp_param);

			}

		}

		return $this->route;

	}

	public function get_page() {

		$this->route = substr($this->route, 1);

		if (($this->route == "") || ($this->route == "index.php")) {
			
			$this->module = 'home';
			$this->page = 'pages/home' . EXT;
		
		} else {

			$route_array = explode(DIRECTORY_SEPARATOR, $this->route);

			$this->module = $route_array[0];
			$this->page = 'pages/' . $this->route . EXT;

		}

		$this->title = ucfirst($this->module);

		if (!$this->filexists($this->page)) {

			$this->module = 'not-found';
			$this->page = 'pages/404' . EXT;

		}

		return $this->page;

	}

	private function filexists($page) {

		if (file_exists($page))
			return true;

		$include_paths = explode(PATH_SEPARATOR, get_include_path());

		foreach ($include_paths as $path) {
			if (file_exists($path . DIRECTORY_SEPARATOR . $page))
				return true;
		}

		return false;

	}

}