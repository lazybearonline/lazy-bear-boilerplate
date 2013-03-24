<?php

define('ENVIRONMENT', 'development');

if (defined('ENVIRONMENT'))
{
	switch (ENVIRONMENT)
	{
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

define('PUBLICPATH', realpath(dirname(__FILE__)));

define('BASEPATH', realpath(PUBLICPATH . '/..'));

define('LIBRARY', BASEPATH . '/library');

define('APPLICATION', BASEPATH . '/application');

define('EXT', '.php');

set_include_path(implode(PATH_SEPARATOR, array(BASEPATH, PUBLICPATH, LIBRARY, APPLICATION, get_include_path())));

include 'bootstrap' . EXT;