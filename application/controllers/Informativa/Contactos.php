<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos extends MY_RootController {

	public function __construct() {
		parent::__construct();

    }

	public function index()
	{

		$this->_initialPage();
		$this->load->view('Informativa_Pages/contactos_view');
		$this->_finalPage();
	}

}
