<?php 

namespace SysFinalProject\filters;

#[\Attribute]
class MemberLogin {
    public function execute() {
        if (!isset($_SESSION['username'])) {
            header('location:/MemberController/login');
            return true;
        }
    }
}