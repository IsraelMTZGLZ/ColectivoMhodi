<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ComingSoon extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }
        $data['user']=$this->session->userdata('user_sess');
	    $this->load->view('coming_view',$data);
	}
}
