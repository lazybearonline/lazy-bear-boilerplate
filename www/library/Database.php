<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Database {

	private $host;
	private $db;
	private $user;
	private $password;

	public function connect() {
		try {
			return new PDO("mysql:host=$host;dbname=$db", $user, $password);
		}
		catch(PDOException $e) {
			return $e->getMessage();
		}
	}

}