<?php

namespace SysFinalProject\models;

class EmployeeModel extends \SysFinalProject\core\Model {
    public $employeeId;
    public $firstName;
    public $lastName;
    public $email;
    public $passwordHash;
    public $phoneNumber;

    public function __construct() {
        parent::__construct();
    }

    public function getAll() {
        $sql = "SELECT * FROM employee";
        $stmt = self::$_connection->query($sql);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'SysFinalProject\\models\\EmployeeModel');
        return $stmt->fetchAll();
    }

    public function get($employeeId) {
        $sql = "SELECT * FROM employee WHERE employeeId = :employeeId";
        $stmt = self::$_connection->prepare($sql);
        $stmt->bindParam(':employeeId', $employeeId, \PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'SysFinalProject\\models\\EmployeeModel');
        return $stmt->fetch();
    }

    public function insert() {
        $sql = "INSERT INTO employee (firstName, lastName, email, passwordHash, phoneNumber) VALUES (:firstName, :lastName, :email, :passwordHash, :phoneNumber)";
        $stmt = self::$_connection->prepare($sql);
        $stmt->bindParam(':firstName', $this->firstName, \PDO::PARAM_STR);
        $stmt->bindParam(':lastName', $this->lastName, \PDO::PARAM_STR);
        $stmt->bindParam(':email', $this->email, \PDO::PARAM_STR);
        $stmt->bindParam(':passwordHash', $this->passwordHash, \PDO::PARAM_STR);
        $stmt->bindParam(':phoneNumber', $this->phoneNumber, \PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function update() {
        $sql = "UPDATE employee SET firstName = :firstName, lastName = :lastName, email = :email, phoneNumber = :phoneNumber WHERE employeeId = :employeeId";
        $stmt = self::$_connection->prepare($sql);
        $stmt->bindParam(':firstName', $this->firstName, \PDO::PARAM_STR);
        $stmt->bindParam(':lastName', $this->lastName, \PDO::PARAM_STR);
        $stmt->bindParam(':email', $this->email, \PDO::PARAM_STR);
        $stmt->bindParam(':phoneNumber', $this->phoneNumber, \PDO::PARAM_STR);
        $stmt->bindParam(':employeeId', $this->employeeId, \PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function delete() {
        $sql = "DELETE FROM employee WHERE employeeId = :employeeId";
        $stmt = self::$_connection->prepare($sql);
        return $stmt->execute();
    }
}