<?php

namespace SysFinalProject\models;

class FormModel extends \SysFinalProject\core\Model {
	public $formId;
    public $formType;
    public $date;
    public $description;
    public $employeeName;
    public $assetTag;

	public function __construct() {
		parent::__construct();
	}

	public function getAll() {
        $sql = "SELECT * FROM form";
        $stmt = self::$_connection->query($sql);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'SysFinalProject\\models\\FormModel');
        return $stmt->fetchAll();
    }

    public function get($formId) {
        $sql = "SELECT * FROM form WHERE formId = :id";
        $stmt = self::$_connection->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'SysFinalProject\\models\\FormModel');
        return $stmt->fetch();
    }

    public function insert() {
        $sql = "INSERT INTO form (formType, date, description, employeeName, assetTag) VALUES (:formType, :date, :description, :employeeName, :assetTag)";
        $stmt = self::$_connection->prepare($sql);
        return $stmt->execute([
            'formType' => $this->formType,
            'date' => $this->date,
            'description' => $this->description,
            'employeeName' => $this->employeeName,
            'assetTag' => $this->assetTag
        ]);
    }

    public function update() {
        $sql = "UPDATE form SET formType = :formType, date = :date, description = :description, employeeName = :employeeName, assetTag = :assetTag WHERE formId = :formId";
        $stmt = self::$_connection->prepare($sql);
        return $stmt->execute([
            'formType' => $this->formType,
            'date' => $this->date,
            'description' => $this->description,
            'employeeName' => $this->employeeName,
            'assetTag' => $this->assetTag,
            'formId' => $this->formId
        ]);
    }

    public function delete() {
        $sql = "DELETE FROM form WHERE formId = :formId";
        $stmt = self::$_connection->prepare($sql);
        return $stmt->execute([
            'formId' => $this->formId
        ]);
    }
}