<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trayectoria extends MY_RootController {

	public function __construct() {
		parent::__construct();

    }

	public function index()
	{

		$this->_initialPage();
		$this->load->view('Informativa_Pages/treyectoria_view');
		$this->_finalPage();
	}

}
