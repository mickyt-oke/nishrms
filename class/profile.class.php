<?php
class Profile {
	private $database;
	public $id, $nisno, $firstname, $middlename, $lastname, $gender, $rank, $email, $phone1, $address, $city, $state, $country, $mission, $phone2, $dofa, $dopa, $posted, $dob, $image, $continent;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}

	// Create record in database table
	public function createProfile() {
		$statement = $this->database->prepare("INSERT INTO tbl_profile (nisno, firstname, middlename, lastname, gender, rank, email, phone1, city, state, country, mission, phone2, dofa, dopa, posted, dob, image, continent) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		// Bind all values to the placeholders
		$statement->bindParam(1, $this->nisno);
		$statement->bindParam(2, $this->firstname);
		$statement->bindParam(3, $this->middlename);
		$statement->bindParam(4, $this->lastname);
		$statement->bindParam(5, $this->gender);
		$statement->bindParam(6, $this->rank);
		$statement->bindParam(7, $this->email);
		$statement->bindParam(8, $this->phone1);
		$statement->bindParam(9, $this->address);
        $statement->bindParam(10, $this->city);
        $statement->bindParam(11, $this->state);
        $statement->bindParam(12, $this->country);
        $statement->bindParam(13, $this->mission);
        $statement->bindParam(14, $this->phone2);
        $statement->bindParam(15, $this->dofa);
        $statement->bindParam(16, $this->dopa);
        $statement->bindParam(17, $this->posted);
        $statement->bindParam(18, $this->dob);
        $statement->bindParam(19, $this->image);
        $statement->bindParam(20, $this->continent);

		// Execute the query
		$result = $statement->execute();

		// Retrieve profileid and return value
		$this->id = $this->database->lastInsertId();

		return $result ? true : false;
	}

	// Read row(s) from the database table
    public function getProfile($id) {
        $statement = $this->database->prepare("SELECT * FROM tbl_profile WHERE id = :id");
        $statement->execute(array("id"=>$id));
        $result = $statement->fetch();

        return $result ? $result : false;
    }

	public function getName($profileid) {
		$statement = $this->database->prepare("SELECT firstname FROM tbl_profile WHERE id = :profileid");
		$statement->execute(array("profileid"=>$profileid));
		$result = $statement->fetch();

		return $result ? $result['fullname'] : '';
	}
    
    public function getNisno($profileid) {
        $statement = $this->database->prepare("SELECT service_no FROM tbl_profile WHERE id = :profileid");
        $statement->execute(array("profileid"=>$profileid));
        $result = $statement->fetch();
        
        return $result ? $result['service_no'] : '';
    }

	// Update row in table

	// Delete record from table
}