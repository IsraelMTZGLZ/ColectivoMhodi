<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
* Controlador para el login de la pagina inicial
* @package	CRM
* @author	Ing. Hector Israel Urias Mendez. Tel:4428902133. Email:hectori.um.15@gmail.com
* @author   Ing. Israel Martinez Gonzalez. Tel:4423818866. Email:israelmg250598@gmail.com
* @since	Version 1.0.0
*/
class Login extends MY_RootController {

    //Funcion constructor
	public function __construct() {//funcion sin parametros
		parent::__construct();//invocar el parent o padre del constructor
        //redirect('Home');
		require_once APPPATH.'third_party/src/Google_Client.php';//cargar la libreria de google
		require_once APPPATH.'third_party/src/contrib/Google_Oauth2Service.php';//cargar libreria de google
		$this->load->library('facebook');//cargar la libreria de facebook
    }

    //Funcion index o inicial del controlador
	public function index()
	{
		if (@$this->session->userdata('user_sess')->email) {//revisar si existe un correo como session ya guardada
			if (@$this->session->userdata('user_sess')->statusU=="Activo") {//revisar que el status del aspirante es activo
				if (@$this->session->userdata('user_sess')->typeUsuario=="Aspirante") {//revisar el tipo de usuario que ingresa al sistema si es aspirnate
					$response = $this->_callApiRest('Aspirante/api/aspirante/id/'.$this->session->userdata('user_sess')->usuario,null,"GET",null);//llamar a la vista de aspirante para traer el aspirante en especifico
					$object = json_decode(json_encode($response['data']), FALSE);//convertir la respuesta de un arreglo a un objeto
					$this->session->set_userdata('user_sess',$object);//anadirlo a la sesion del usuario el nuevo usuario que se reciba
					//echo var_dump($object->persona);
					if (@$this->session->userdata('user_sess')->aspirante==null) {
						//no ha llenado toda su informacion
						redirect('Dashboard/InformacionAspirante');
					}elseif (@$this->session->userdata('user_sess')->programaDeInteres==null){
						//selecionar el programa
						redirect('Dashboard/EleccionUniversidad');
					}else{
						if(@$this->session->userdata('user_sess')->statusAspiranteControl=='Inactivo'){
							redirect('CallAgents');
						}else{
							//ha llenado toda su informacion
							if($this->session->userdata('user_sess')->programaDeInteres == "Universidad"){
								$response = $this->_callApiRest('AspiranteUniversidades/api/aspiranteUniversidadesBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
								//echo var_dump($response['data']);
								if($response['data']){
									//ya acompleto el tipo de estudio y eligio facultad
									if($response['data']['anioMesIngreso']){
										//ya selecciono las universidades que le interesan
										redirect('Dashboard/HomeAspirante');
									}else{
										redirect('Dashboard/Universidad/UniversidadesFacultad');
									}
								}else{
									//no ha llenado los campos nesesarios de la universidad
									redirect('Dashboard/Universidad/DatosUniversidad');
								}
							}elseif ($this->session->userdata('user_sess')->programaDeInteres == "Preparatoria") {
								$response = $this->_callApiRest('AspirantePreparatorias/api/aspirantePreparatoriasBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
								//echo var_dump($response['data']);
								if($response['data']){
									//ya acompleto el tipo de estudio y eligio tipo de alojamiento
									if($response['data']['anioMesIngreso']){
										//ya selecciono las preparatorias que le interesan
										redirect('Dashboard/HomeAspirante');
									}else{
										redirect('Dashboard/Preparatoria/PreparatoriasFacultad');
									}
								}else{
									//no ha llenado los campos nesesarios de la universidad
									redirect('Dashboard/Preparatoria/DatosPreparatoria');
								}

							}
						// 	else{
						// 		//no ha llenado los campos nesesarios de la universidad
						// 		redirect('Dashboard/Preparatoria/DatosPreparatoria');
						// 	}
						// }
						else if($this->session->userdata('user_sess')->programaDeInteres == "CursoIngles"){
							$response = $this->_callApiRest('Ingles/api/aspiranteInglesBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
							//echo var_dump($response['data']);
							if($response['data']){
								//ya acompleto el tipo de estudio y eligio tipo de alojamiento
								$responsema = $this->_callApiRest('Ingles/api/aspiranteVerInglesBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
								if($responsema['data']['anioMesIngreso']){
									//ya selecciono las preparatorias que le interesan
										redirect('Dashboard/HomeAspiranteIngles');
								}else{
								redirect('Dashboard/Ingles/StepInst');
								}
							}else{

									 redirect('EnglishSteps');

								// redirect('Dashboard/Verano/HomeAspiranteVI');
							}
						}else if($this->session->userdata('user_sess')->programaDeInteres == "CursoVeranoIngles"){
							$response = $this->_callApiRest('Verano/Ingles/api/aspiranteVerInglesBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
							//echo var_dump($response['data']);
							if($response['data']){
								//ya acompleto el tipo de estudio y eligio tipo de alojamiento
								if($response['data']['anioMesIngreso']){
									//ya selecciono las preparatorias que le interesan
									redirect('Dashboard/Verano/HomeAspiranteVI');
								}else{
									redirect('Dashboard/HomeAspiranteIngles');
								}
							}else{
								//no ha llenado los campos nesesarios de la universidad
								$responseStep = $this->_callApiRest('Verano/Ingles/api/aspiranteVerInglesStepsBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
								//no ha llenado los campos nesesarios de la universidad
								if($responseStep['data']){
									//ya selecciono las preparatorias que le interesan
									redirect('Dashboard/HomeAspiranteIngles');
								}else{
									 redirect('VeranoSteps');
								}
							}

						}else if($this->session->userdata('user_sess')->programaDeInteres == "CursoVeranoAcademico"){
							$response = $this->_callApiRest('Verano/Ingles/api/aspiranteVerInglesBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
							//echo var_dump($response['data']);
							if($response['data']){
								//ya acompleto el tipo de estudio y eligio tipo de alojamiento
								if($response['data']['anioMesIngreso']){
									//ya selecciono las preparatorias que le interesan
									redirect('Dashboard/HomeAspiranteIngles');
								}else{
									redirect('Dashboard/Verano/TestThree');
								}
							}else{
								//no ha llenado los campos nesesarios de la universidad
								$responseStep = $this->_callApiRest('Verano/Ingles/api/aspiranteVerInglesStepsBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
								//no ha llenado los campos nesesarios de la universidad
								if($responseStep['data']){
									//ya selecciono las preparatorias que le interesan
									redirect('Dashboard/Verano/TestThree');
								}else{
									 redirect('VeranoSteps');
								}
								// redirect('VeranoSteps');
							}

							}else if($this->session->userdata('user_sess')->programaDeInteres == "CursoVerano"){
								$response = $this->_callApiRest('Verano/Ingles/api/aspiranteVerInglesBYAspirante/id/'.$this->session->userdata('user_sess')->aspirante,null,"GET",null);
								//echo var_dump($response['data']);
								if($response['data']){
									//ya acompleto el tipo de estudio y eligio tipo de alojamiento
									if($response['data']['anioMesIngreso']){
										//ya selecciono las preparatorias que le interesan
										redirect('Dashboard/HomeAspiranteIngles');
									}else{
										redirect('Dashboard/Verano/TestThree');
									}
								}else{
									//no ha llenado los campos nesesarios de la universidad
									redirect('VeranoEleccion');
								}

							}


						}

						redirect('ComingSoon');
					}
				}else if (@$this->session->userdata('user_sess')->typeUsuario=="Agente") {
					//echo 'entro';
					$response = $this->_callApiRest('Agente/api/agente/id/'.$this->session->userdata('user_sess')->usuario,null,"GET",null);
					$object = json_decode(json_encode($response['data']), FALSE);
					$this->session->set_userdata('user_sess',$object);
					//echo var_dump($response);
					if (@$this->session->userdata('user_sess')->agente==null) {
						redirect('Dashboard/InformacionAgente');
					}else{
						//ha llenado toda su informacion
						redirect('Dashboard/HomeAgente');
					}

				}else if (@$this->session->userdata('user_sess')->typeUsuario=="Admin") {
					redirect('Dashboard/Home');
				}
			}
		}
		unset($_SESSION['blog']);
		$this->load->view('Login/login_view');
	}

	public function Facebook(){
		if($this->facebook->is_authenticated()){
			$userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture.width(600).height(600)');
			if ($userProfile['id']) {
				$this->facebook->destroy_session();
				redirect('Login');
			}elseif($userProfile['error']){
				$this->session->set_flashdata('facebook','Error');
				$this->facebook->destroy_session();
				redirect('Login');
			}else{
				$this->session->set_flashdata('facebook','Error');
				$this->facebook->destroy_session();
				redirect('Login');
			}
		}
	}

	public function google_login()
	{
		$clientId = '846059479473-nk4bq494i4lhb247j1rd3b6v8ltkj95s.apps.googleusercontent.com'; //Google client ID
    //775536028295-i3nkt4kledmhfo0pv22tqn8uccgodakt.apps.googleusercontent.com
    $clientSecret = 'BrIhlAOnVDeC7QZ7G5dhlbib'; //Google client secret
    //QtZKx7DaseMCnfWTGbHJ-FAs

		//google
		$redirectURL = 'https://www.anglolatinoedu.com/Login/Login/google_login/';
		//local
		//$redirectURL = 'http://localhost/angloWeb/Login/Login/google_login/';

		//Call Google API
		$gClient = new Google_Client();
		$gClient->setApplicationName('Login');
		$gClient->setClientId($clientId);
		$gClient->setClientSecret($clientSecret);
		$gClient->setRedirectUri($redirectURL);
		$gClient->setScopes('profile email');
		$gClient->setApprovalPrompt('force');
		$google_oauthV2 = new Google_Oauth2Service($gClient);

		if(isset($_GET['code']))
		{
			$gClient->authenticate($_GET['code']);
			$_SESSION['token'] = $gClient->getAccessToken();
			header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
		}

		if (isset($_SESSION['token']))
		{
			$gClient->setAccessToken($_SESSION['token']);
		}

		if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo_v2_me->get();
			if ($userProfile['id']) {
				$data=array(
                    "email"=>$userProfile['email'],
                    "token"=>$userProfile['id']
				);
				$data_to_string=json_encode($data);
			//peticiones http
			$curl_request = curl_init("https://api.anglolatinoedu.com/User/api/loginPlus");
			//local
			//$curl_request = curl_init("http://localhost/angloApi/User/api/loginPlus");

			curl_setopt($curl_request,CURLOPT_CUSTOMREQUEST,"POST");
			curl_setopt($curl_request,CURLOPT_HTTPHEADER,array(
				"x-api-key: ANGLOKEY",
				"Content-Type: application/json"
			));
			curl_setopt($curl_request,CURLOPT_RETURNTRANSFER,TRUE);
			curl_setopt($curl_request,CURLOPT_POSTFIELDS,$data_to_string);

			$response = curl_exec($curl_request);
			if (!$response) {
				$response= json_encode(array(
					"status"=>curl_error($curl_request),
					"message"=>curl_errno($curl_request)
				));
			}

			curl_close($curl_request);
			$response =json_decode($response);
			//echo var_dump($response);

			if ($response->status=="success") {
				//$this->session->set_userdata('user_sess',$response->data);
				//echo var_dump($response->data);
				if ($response->data->statusU=="Activo") {
					//usuario activo
					//echo var_dump($response->data);


					if ($response->data->typeUsuario) {
						$this->session->set_userdata('user_sess',$response->data);
						redirect('Login');
					}else{
						$this->session->set_flashdata('messagePredeterminado','El usuario tiene algunos problemas comunicate con Anglo Latino Education Partnership.');
						redirect('Login');
					}
				}else{
					//usuario inactivo
					$this->session->set_flashdata('messagePredeterminado','El usuario no tiene permisos de acceso comunicate con Anglo Latino Education Partnership.');
					redirect('Login');
				}
				//redirect("Dashboard/Home");
			}else{
				$this->session->set_flashdata('message',$response);
				redirect('Login');
			}
			}elseif($userProfile['error']){
				$this->session->set_flashdata('facebook','Error');
				return redirect('Login');
			}else{
				$this->session->set_flashdata('facebook','Error');
				return redirect('Login');
			}
        }
		else
		{
            $url = $gClient->createAuthUrl();
		    header("Location: $url");
            exit;
        }
	}

	public function autenticar()
	{
		if ($this->input->post('email') && $this->input->post('password')) {
			$data= array(
				"email"=>$this->input->post('email'),
				"password"=>$this->input->post('password')
			);
			//decodificar
			$data_to_string=json_encode($data);
			//peticiones http
			$curl_request = curl_init("https://api.anglolatinoedu.com/User/api/loginNativo");
			//local
			//$curl_request = curl_init("http://localhost/angloApi/User/api/loginNativo");

			curl_setopt($curl_request,CURLOPT_CUSTOMREQUEST,"POST");
			curl_setopt($curl_request,CURLOPT_HTTPHEADER,array(
				"x-api-key: ANGLOKEY",
				"Content-Type: application/json"
			));
			curl_setopt($curl_request,CURLOPT_RETURNTRANSFER,TRUE);
			curl_setopt($curl_request,CURLOPT_POSTFIELDS,$data_to_string);

			$response = curl_exec($curl_request);
			if (!$response) {
				$response= json_encode(array(
					"status"=>curl_error($curl_request),
					"message"=>curl_errno($curl_request)
				));
			}

			curl_close($curl_request);
			$response =json_decode($response);
			//echo var_dump($response);

			if ($response->status=="success") {
				if ($response->data->statusU=="Activo") {
					if ($response->data->typeUsuario) {
						$this->session->set_userdata('user_sess',$response->data);
						redirect('Login');
					}else{
						$this->session->set_flashdata('messagePredeterminado','El usuario tiene algunos problemas comunicate con Anglo Latino Education Partnership.');
						redirect('Login');
					}
				}else{
					//usuario inactivo
					$this->session->set_flashdata('messagePredeterminado','El usuario no tiene permisos de acceso comunicate con Anglo Latino Education Partnership.');
					redirect('Login');
				}
			}else{
				$this->session->set_flashdata('message',$response);
				redirect('Login');
			}

		}else{
			//flashdata
			$this->session->set_flashdata('message',"No se envio parametros");
			redirect('Login');
		}

	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}


}
