<?php
class Connection {
	private $dbhost = 'localhost';
	private $dbname = 'hrmdb';
	private $user = 'root';
	private $pswd = '';

	public function connect() {
		try {
			$conn = new PDO("mysql:host=$this->dbhost; dbname=$this->dbname", $this->user, $this->pswd);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conn;
		}
		catch(PDOException $e) {
			return false;
		}
	}
}