<?php
class User {
	private $database;
	public $id, $uname, $pswd, $usergroup, $fullname, $role, $is_active;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}

	// Create record in database table
	public function createUser() {
		$statement = $this->database->prepare("INSERT INTO users (uname, pswd, usergroup, fullname, role, is_active) VALUES (?, ?, ?, ?, ?, ?)");
		// Bind all values to the placeholders
        $statement->bindParam(1, $this->uname);
		$statement->bindParam(2, $this->pswd);
		$statement->bindParam(3, $this->usergroup);
		$statement->bindParam(4, $this->fullname);
		$statement->bindParam(5, $this->role);
		$statement->bindParam(6, $this->is_active);

		// Execute the query
		$result = $statement->execute();

		return $result ? true : false;
	}

	// Read row(s) from the database table
	public function getUser() {
		$statement = $this->database->prepare("SELECT * FROM users");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function countAll() {
		$statement = $this->database->prepare("SELECT COUNT(*) AS count FROM users");
		$statement->execute();
		$result = $statement->fetch();

		return !empty($result['count']) ? $result['count'] : false;
	}

	public function getName($id) {
		$statement = $this->database->prepare("SELECT fullname FROM users WHERE id = :profile");
		$statement->execute(array("profile"=>$id));
		$result = $statement->fetch();

		return $result ? $result['fullname'] : '';
	}

	public function login($uname, $pswd) {
		$statement = $this->database->prepare("SELECT * FROM users WHERE uname = :username AND pswd = :password");
		$statement->execute(array("username"=>$uname, "password"=>$pswd));

		$result = $statement->fetch();

		// Create SESSION variables for logged in user
		if ($result) {
			$_SESSION['us3rid'] = $result['id'];
			$_SESSION['us3rgr0up'] = $result['usergroup'];
			$_SESSION['profile'] = $result['fullname'];
			$_SESSION['user'] = $result['uname'];
            $_SESSION['loggedin_time'] = $result['loggedin_time'];
			$_SESSION['1s@dmin'] = ($result['usergroup'] == 118) ? true : false;
		}

		return $result ? true : false;
	}

	public function logout() {
		if (isset($_SESSION['us3rid'])){
			unset($_SESSION['us3rid']);
			session_destroy();

			return true;
		}
		return false;
	}
}
