<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vestimenta extends MY_RootController {

	public function __construct() {
		parent::__construct();

    }

	public function index()
	{

		$this->_initialPage();
		$this->load->view('Informativa_Pages/vestimenta_view');
		$this->_finalPage();
	}

}
