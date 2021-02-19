<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForgotPassword extends MY_RootController {

	public function __construct() {
		parent::__construct();
		//redirect('Login');
		if (@$this->session->userdata('user_sess')->email) {
			redirect('Login');
		}
    }

	public function index()
	{	
		unset($_SESSION['blog']);
		$this->load->view('Login/forgotPassword_view');
	}

}
 
