<?php 

namespace SysFinalProject\controllers;

#[\SysFinalProject\filters\MemberLogin]
class EquipmentController extends \SysFinalProject\core\Controller {

	public function insert() {
		if (isset($_POST['insertB'])) {
            $equipment = new \SysFinalProject\models\EquipmentModel();

            if (strlen($_POST["assetTag"]) != 11) {
	       		$this->view('TeamInsertEquipmentView', 'Invalid Asset Tag');
           		return;
	       	}

	       	if (!ctype_alnum($_POST["assetTag"][0]) || !ctype_alnum($_POST["assetTag"][1]) 
	       			|| !ctype_alnum($_POST["assetTag"][2]) || !ctype_alnum($_POST["assetTag"][4]) 
	       			|| !ctype_alnum($_POST["assetTag"][5]) || !ctype_alnum($_POST["assetTag"][6])
	       		 	|| !ctype_alnum($_POST["assetTag"][8]) || !ctype_alnum($_POST["assetTag"][9]) 
	       		 	|| !ctype_alnum($_POST["assetTag"][10])) {
	       		$this->view('TeamInsertEquipmentView', 'Invalid Asset Tag');
           		return;
	       	}

	       	if ($_POST["assetTag"][3] != '-' || $_POST["assetTag"][7] != '-') {
	       		$this->view('TeamInsertEquipmentView', 'Invalid Asset Tag');
           		return;
	       	}

           	if (!ctype_alnum($_POST['sinNumber'])) {
           		$this->view('TeamInsertEquipmentView', 'Invalid SIN Number');
           		return;
           	}

           	if (!ctype_alnum($_POST['productNumber'])) {
           		$this->view('TeamInsertEquipmentView', 'Invalid Product Number');
           		return;
           	}

            $equipment->assetTag = $_POST['assetTag'];
            $equipment->productNumber = $_POST['productNumber'];
            $equipment->description = $_POST['description'];
            $equipment->model = $_POST['model'];
            $equipment->dateOfInventory = $_POST['dateOfInventory'];
            $equipment->sinNumber = $_POST['sinNumber'];
            $equipment->location = $_POST['location'];
            $equipment->deskNumber = "";
            $equipment->employeeId = null;

            $equipment->insert();
            header('location:/MemberController/index');
        } else 
            $this->view('TeamInsertEquipmentView');
	}

	public function modify() {
		// Delete option
		if (isset($_POST['deleteB'])) {
			$equipment = new \SysFinalProject\models\EquipmentModel();
	        
			$assetTag = $_POST['assetTag'];

			// Make sure asset tag is valid
			$equipment = $equipment->get($assetTag);
			if (!is_object($equipment)) {
				$this->view('TeamUpdateEquipmentView', 'Asset tag does not exist');
				return;
			}

	        $equipment->delete($assetTag);
	        header('location:/MemberController/index');
		} else 
			$this->view('TeamUpdateEquipmentView');
	}
}