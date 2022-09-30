<?php

namespace SysFinalProject\models;

class EquipmentModel extends \SysFinalProject\core\Model {
	public $assetTag;
	public $model;
	public $sinNumber;
	public $productNumber;
	public $dateOfInventory;
	public $location;
	public $description;
	public $deskNumber;
	public $employeeId;

	public function __construct() {
		parent::__construct();
	}

	public function getAll() {
		$SQL = "SELECT * FROM equipment";
		$statement = self::$_connection->query($SQL);
		$statement->setFetchMode(\PDO::FETCH_CLASS, 'SysFinalProject\\models\\EquipmentModel');
		return $statement->fetchAll();
	}

	public function get($assetTag) {
		$SQL = "SELECT * FROM equipment WHERE assetTag = :assetTag";
		$statement = self::$_connection->prepare($SQL);
		$statement->execute(['assetTag'=>$assetTag]);
		$statement->setFetchMode(\PDO::FETCH_CLASS, 'SysFinalProject\\models\\EquipmentModel');
		return $statement->fetch();
	}

	public function getByAssetTag($assetTag){
		$SQL = 'SELECT * FROM equipment WHERE assetTag LIKE :assetTag';
		$statement = self::$_connection->prepare($SQL);
		$statement->execute(['assetTag'=>"%$assetTag%"]);
		$statement->setFetchMode(\PDO::FETCH_CLASS, 'SysFinalProject\\models\\EquipmentModel');
		return $statement->fetchAll();
	}

	public function getByModel($model){
		$SQL = "SELECT * FROM equipment WHERE model LIKE :model";
		$statement = self::$_connection->prepare($SQL);
		$statement->execute(['model'=>"%$model%"]);
		$statement->setFetchMode(\PDO::FETCH_CLASS, 'SysFinalProject\\models\\EquipmentModel');
		return $statement->fetchAll();
	}

	public function getBySinNumber($sinNumber){
		$SQL = "SELECT * FROM equipment WHERE sinNumber LIKE :sinNumber";
		$statement = self::$_connection->prepare($SQL);
		$statement->execute(['sinNumber'=>"%$sinNumber%"]);
		$statement->setFetchMode(\PDO::FETCH_CLASS, 'SysFinalProject\\models\\EquipmentModel');
		return $statement->fetchAll();
	}

	public function getByProductNumber($productNumber){
		$SQL = "SELECT * FROM equipment WHERE productNumber LIKE :productNumber";
		$statement = self::$_connection->prepare($SQL);
		$statement->execute(['productNumber'=>"%$productNumber%"]);
		$statement->setFetchMode(\PDO::FETCH_CLASS, 'SysFinalProject\\models\\EquipmentModel');
		return $statement->fetchAll();
	}

	public function getByDateOfInventory($date){
		$SQL = "SELECT * FROM equipment WHERE dateOfInventory LIKE :dateOfInventory";
		$statement = self::$_connection->prepare($SQL);
		$statement->execute(['dateOfInventory'=>"%$date%"]);
		$statement->setFetchMode(\PDO::FETCH_CLASS, 'SysFinalProject\\models\\EquipmentModel');
		return $statement->fetchAll();
	}

	public function getByLocation($location){
		$SQL = "SELECT * FROM equipment WHERE location LIKE :location";
		$statement = self::$_connection->prepare($SQL);
		$statement->execute(['location'=>"%$location%"]);
		$statement->setFetchMode(\PDO::FETCH_CLASS, 'SysFinalProject\\models\\EquipmentModel');
		return $statement->fetchAll();
	}

	public function getByDescription($description){
		$SQL = "SELECT * FROM equipment WHERE description LIKE :description";
		$statement = self::$_connection->prepare($SQL);
		$statement->execute(['description'=>"%$description%"]);
		$statement->setFetchMode(\PDO::FETCH_CLASS, 'SysFinalProject\\models\\EquipmentModel');
		return $statement->fetchAll();
	}

	public function insert() {
		$SQL = "INSERT INTO equipment(assetTag, model, sinNumber, productNumber, dateOfInventory, location, description, deskNumber, employeeId) VALUES (:assetTag, :model, :sinNumber, :productNumber, :dateOfInventory, :location, :description, :deskNumber, :employeeId)";
		$statement = self::$_connection->prepare($SQL);
		$statement->execute(['assetTag'=>$this->assetTag, 'model'=>$this->model, 'sinNumber'=>$this->sinNumber, 'productNumber'=>$this->productNumber, 'dateOfInventory'=>$this->dateOfInventory, 'location'=>$this->location, 'description'=>$this->description, 'deskNumber'=>$this->deskNumber, 'employeeId'=>$this->employeeId]);
	}

	public function delete($assetTag) {
		$SQL = "DELETE FROM equipment WHERE assetTag = :assetTag";
		$statement = self::$_connection->prepare($SQL);
		$statement->execute(['assetTag'=>$assetTag]);
	}
}