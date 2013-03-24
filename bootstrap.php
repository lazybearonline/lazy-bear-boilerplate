<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// $config = parse_ini_file('application.ini');

function __autoload($class) {
    include $class . EXT;
}

require_once 'layout' . EXT;