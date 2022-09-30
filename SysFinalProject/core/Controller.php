<?php
namespace SysFinalProject\core;

class Controller {
	protected function view($viewName, $data=null) {
		include('SysFinalProject/views/'. $viewName . '.php');
	}
}