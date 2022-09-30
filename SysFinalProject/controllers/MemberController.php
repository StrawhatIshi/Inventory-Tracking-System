<?php 

namespace SysFinalProject\controllers;

class MemberController extends \SysFinalProject\core\Controller {

	public function login() {
		if (isset($_POST['loginB'])) {
            $member = new \SysFinalProject\models\MemberModel();
            $member = $member->get($_POST['username']);

            if ($member != false && password_verify($_POST['password'], $member->passwordHash)) {
                $_SESSION['employeeId'] = $member->employeeId;
                $_SESSION['username'] = $member->email;
				
				header('location:/MemberController/index');
            }
            else {
				// if data is wrong, send error message
                $this->view('LoginView', 'Invalid username / password combination.');
                return;
            }

        } else 
            $this->view('LoginView');
	}

	public function logout() {
		session_destroy();
		header('location:/MemberController/login');
	}

	#[\SysFinalProject\filters\MemberLogin]
	public function index() {
		if(isset($_POST['searchB'])){
			$option = $_POST['searchOptions'];
			$name = $_POST['searchName'];
			if($_POST['searchName'] == ""){
				$message = "The search box can not be empty!";
				header('location:/MemberController/index');
			}
			else{
				header("location:/MemberController/search/$name/$option");
			}
		}
		else{
			$member = new \SysFinalProject\models\MemberModel();
        $member = $member->get($_SESSION['username']);

        $equipment = new \SysFinalProject\models\EquipmentModel();
        $equipment = $equipment->getAll();

        // NOTE: Commented out code would be commented back in if we implemented admin side too
        // if ($member->type == "Regular")
    	$this->view('TeamMemberHomeView', ['member'=>$member, 'equipment'=>$equipment]);
        // else
        // 	$this->view('AdminHomeView', ['member'=>$member, 'equipment'=>$equipment]);
		}
	}

	#[\SysFinalProject\filters\MemberLogin]
	public function changePassword($username) {
		if (isset($_POST['changeB'])) {
			$member = new \SysFinalProject\models\MemberModel();
        	$member = $member->get($username);

        	// Check that new password is not empty
			if ($_POST['oldPassword'] == '' || $_POST['newPassword'] == '' ||  $_POST['newPasswordConfirmation'] == '') {
				$this->view('TeamPasswordChangeView', 'Do not leave fields empty.');
				return;
			}

			// Check that old password is correct
			if (!password_verify($_POST['oldPassword'], $member->passwordHash)) {
				$this->view('TeamPasswordChangeView', 'Your old password is incorrect.');
				return;
			}

			// Check that new passwords match
			if($_POST['newPassword'] != $_POST['newPasswordConfirmation']) {
				$this->view('TeamPasswordChangeView', 'Passwords do not match.');
				return;
			}
            
            // Check that its not same as old password
			if(password_verify($_POST['newPassword'], $member->passwordHash)) {
				$this->view('TeamPasswordChangeView', 'New password cannot be the same as your current password.');
				return;
			}

			// Valid new password
			$foundNumber = preg_match('@[0-9]@', $_POST['newPassword']);
			$foundUppercase = preg_match('@[A-Z]@', $_POST['newPassword']);
			$foundLowercase = preg_match('@[a-z]@', $_POST['newPassword']);
			$hasSpecialChar = preg_match('@[^\w]@', $_POST['newPassword']);

			if (strlen($_POST['newPassword']) < 8) {
				$this->view('TeamPasswordChangeView', 'New password must be at least 8 characters long.');
				return;
			}

			if (!$foundNumber) {
				$this->view('TeamPasswordChangeView', 'New password must have a number.');
				return;
			}

			if (!$foundUppercase) {
				$this->view('TeamPasswordChangeView', 'New password must have an uppercase character.');
				return;
			}

			if (!$foundLowercase) {
				$this->view('TeamPasswordChangeView', 'New password must have a lowercase character.');
				return;
			}

			if (!$hasSpecialChar) {
				$this->view('TeamPasswordChangeView', 'New password must have at least one special character.');
				return;
			}

            $member->password = $_POST['newPassword'];
            $member->updatePassword();

            header('location:/MemberController/index');
        } else
            $this->view('TeamPasswordChangeView');
	}

	#[\SysFinalProject\filters\MemberLogin]
	public function printView() {
		$member = new \SysFinalProject\models\MemberModel();
		$member = $member->getAll();

		$equipment = new \SysFinalProject\models\EquipmentModel();
		$equipment = $equipment->getAll();

		$employee = new \SysFinalProject\models\EmployeeModel();
		$employee = $employee->getAll();

		$forms = new \SysFinalProject\models\FormModel();
		$forms = $forms->getAll();

		$this->view('MemberPrintView', ['member'=>$member, 'equipment'=>$equipment, 'employee'=>$employee, 'form'=>$forms, 'member'=>$member]);
	}

	#[\SysFinalProject\filters\MemberLogin]
	public function search($name,$option){
		$equipment = new \SysFinalProject\models\EquipmentModel();

		if($option == 'tag'){
			$equipment = $equipment->getByAssetTag($name);
			$this->view('SearchResultView',['option'=>$option,'name'=>$name,'equipment'=>$equipment]);
		}
		else if($option == 'model'){
			$equipment = $equipment->getByModel($name);
			$this->view('SearchResultView',['option'=>$option,'name'=>$name,'equipment'=>$equipment]);
		}
		else if($option == 'sin'){
			$equipment = $equipment->getBySinNumber($name);
			$this->view('SearchResultView',['option'=>$option,'name'=>$name,'equipment'=>$equipment]);
		}
		else if($option == 'productNumber'){
			$equipment = $equipment->getByProductNumber($name);
			$this->view('SearchResultView',['option'=>$option,'name'=>$name,'equipment'=>$equipment]);
		}
		else if($option == 'date'){
			$equipment = $equipment->getByDateOfInventory($name);
			$this->view('SearchResultView',['option'=>$option,'name'=>$name,'equipment'=>$equipment]);
		}
		else if($option == 'location'){
			$equipment = $equipment->getByLocation($name);
			$this->view('SearchResultView',['option'=>$option,'name'=>$name,'equipment'=>$equipment]);
		}
		else{
			$equipment = $equipment->getByDescription($name);
			$this->view('SearchResultView',['option'=>$option,'name'=>$name,'equipment'=>$equipment]);
		}

	}
}