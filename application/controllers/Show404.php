<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show404 extends MY_RootController {

	public function __construct() {
        parent::__construct();
    }
	
	public function index()
	{
		$this->load->view('esential_errors/page_404');
	}
}
