<?php

class Login extends Controller {

    public function index() {
			if (isset($_SESSION['userid'])) {
					header('location: /');
			}
	    $this->view('login/index');
    }
    
    public function verify(){
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];
		
			$user = $this->model('User');
			$user->authenticate($username, $password); 
    }

}
