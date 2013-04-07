<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// $config = parse_ini_file('config/application.ini');

if (defined('ENVIRONMENT')) {
	switch (ENVIRONMENT) {
		case 'development':
			error_reporting(-1);
			break;
		case 'testing':
		case 'production':
			error_reporting(0);
			break;
		default:
			die("The application environment must be set to 'development', 'testing' or 'production'");
	}
}

function __autoload($class) { include $class . EXT; }

require_once 'layout' . EXT;