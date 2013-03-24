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

define('BASEPATH', realpath(dirname(__FILE__)));
define('EXT', '.php');

set_include_path(implode(PATH_SEPARATOR, array(BASEPATH, get_include_path())));

include '/bootstrap' . EXT;