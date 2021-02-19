<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CallAgents extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }
        $data['user']=$this->session->userdata('user_sess');
	    $this->load->view('callAgents_view',$data);
	}
}
