<?php

namespace SysFinalProject\models;

class MemberModel extends \SysFinalProject\core\Model {
	public $type;
	public $firstName;
	public $lastName;
	public $email;
	public $password;
	public $passwordHash;
	public $phoneNumber;

	public function __construct() {
		parent::__construct();
	}

	public function getAll() {
		$SQL = "SELECT * FROM member";
		$statement = self::$_connection->query($SQL);
		$statement->setFetchMode(\PDO::FETCH_CLASS, 'SysFinalProject\\models\\MemberModel');
		return $statement->fetchAll();
	}

	public function get($email) {
		$SQL = "SELECT * FROM member WHERE email = :email";
		$statement = self::$_connection->prepare($SQL);
		$statement->execute(['email'=>$email]);
		$statement->setFetchMode(\PDO::FETCH_CLASS, 'SysFinalProject\\models\\MemberModel');
		return $statement->fetch();
	}

	public function insert() {
 		$this->passwordHash = password_hash($this->password, PASSWORD_DEFAULT);

		$SQL = "INSERT INTO member(type, firstName, lastName, email, passwordHash, phoneNumber) VALUES (:type, :firstName, :lastName, :email, :passwordHash, :phoneNumber)";
		$statement = self::$_connection->prepare($SQL);
		$statement->execute(['type'=>$this->type, 'firstname'=>$this->firstName, 'lastname'=>$this->lastName, 'email'=>$this->email, 'passwordHash'=>$this->passwordHash, 'phoneNumber'=>$this->phoneNumber]);
	}

	public function delete($employeeId) {
		$SQL = "DELETE FROM member WHERE employeeId = :employeeId";
		$statement = self::$_connection->prepare($SQL);
		$statement->execute(['employeeId' => $employeeId]);
	}

	public function updatePassword() {
		$this->passwordHash = password_hash($this->password, PASSWORD_DEFAULT);

        $SQL = "UPDATE `member` SET passwordHash = :passwordHash WHERE employeeId = :employeeId";
        $statement = self::$_connection->prepare($SQL);
        $statement->execute(['passwordHash'=>$this->passwordHash, 'employeeId'=>$this->employeeId]);
	}
}