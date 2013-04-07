<?php

// Set ENVIRONMENT that your application is running

// define('ENVIRONMENT', 'development');
// define('ENVIRONMENT', 'testing');
// define('ENVIRONMENT', 'production');

define('ENVIRONMENT', 'development');

// Define include paths for php

define('PUBLICPATH', realpath(dirname(__FILE__)));
define('BASEPATH', realpath(PUBLICPATH . '/..'));
define('LIBRARY', BASEPATH . '/library');
define('APPLICATION', BASEPATH . '/application');
define('EXT', '.php');

set_include_path(implode(PATH_SEPARATOR, array(BASEPATH, PUBLICPATH, LIBRARY, APPLICATION, get_include_path())));

include 'bootstrap' . EXT;