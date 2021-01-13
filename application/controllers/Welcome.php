<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_RootController {

	public function __construct() {
		parent::__construct();

    }

	public function index()
	{

		$this->_initialPage();
		$this->load->view('welcome_message');
		$this->_finalPage();
	}

}
