<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// $config = parse_ini_file('application.ini');

function __autoload($class) {
    include $class . '.php';
}

require_once APPLICATION . '/layout.php';