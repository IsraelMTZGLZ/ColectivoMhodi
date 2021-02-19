<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NuevoEstudiante extends MY_RootController {

	public function __construct() {
		parent::__construct();
		
     $this->load->library('session');
		if (!@$this->session->userdata('user_sess')->email) {
		//	redirect('Login');

    }else{
			if (@$this->session->userdata('user_sess')->typeUsuario=="Estudiante") {
				if (@$this->session->userdata('user_sess')->estudiante!=null) {
					redirect('Login');
				}
			}else {
				redirect('Login');
			}

		}
  }

	public function index()
	{
		unset($_SESSION['blog']);
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "https://restcountries.eu/rest/v2/region/Americas?fields=name;callingCodes");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$res = json_decode(curl_exec($ch),true);

		curl_close($ch);
		// echo var_dump($res[0]['callingCodes'][0]);
		// $data['countries']=$res;
		$data['user']=$this->session->userdata('user_sess');
		 echo var_dump($data);
		$this->load->view('Dashboard_Pages/nuevo_estudiante_view',$data);
	}

}
