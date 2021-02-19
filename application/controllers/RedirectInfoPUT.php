<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RedirectInfoPUT extends MY_RootController {

	public function __construct() {
        parent::__construct();
        if (!@$this->session->userdata('user_sess')->email) {
			redirect('Login');
        }else{
            if (@$this->session->userdata('user_sess')->typeUsuario!="Admin" && @$this->session->userdata('user_sess')->typeUsuario!="Agente" ) {
                redirect('Login');
            }
        }
    }

	public function index($id)
	{
        if($id){
            $idAspirante = base64_decode($id);
            $response = $this->_callApiRest('Aspirante/api/aspiranteByAspirante/id/'.$idAspirante,null,"GET",null);
            //echo var_dump($response['data']['programaDeInteres']);
            if($response['data']['programaDeInteres'] == "Universidad"){
                $response = $this->_callApiRest('AspiranteUniversidades/api/aspiranteUniversidadesBYAspirante/id/'.$idAspirante,null,"GET",null);
                //echo var_dump($response['data']);
                if($response['data']){
                    //ya acompleto el tipo de estudio y eligio facultad
                    if($response['data']['anioMesIngreso']){
                        //ya selecciono las universidades que le interesan
                        $this->session->set_flashdata('messagePredeterminado','El usuario ya no puede ser editado debido a que ya se acompleto su proceso de seleccion de universidad.');
                        redirect('Dashboard/AspiranteStatus1');
                    }else{
                        //echo ('entro');
                        redirect('UniversidadesFacultad'.$id);
                    }
                }else{
                    //no ha llenado los campos nesesarios de la universidad
                    redirect('DatosUniversidad'.$id);
                }
            }elseif ($response['data']['programaDeInteres'] == "Preparatoria") {
                $response = $this->_callApiRest('AspirantePreparatorias/api/aspirantePreparatoriasBYAspirante/id/'.$idAspirante,null,"GET",null);
                //echo var_dump($response['data']);
                if($response['data']){
                    //ya acompleto el tipo de estudio y eligio tipo de alojamiento
                    if($response['data']['anioMesIngreso']){
                        //ya selecciono las preparatorias que le interesan
                        $this->session->set_flashdata('messagePredeterminado','El usuario ya no puede ser editado debido a que ya se acompleto su proceso de seleccion de preparatorias.');
                        redirect('Dashboard/AspiranteStatus1');
                    }else{
                        redirect('PreparatoriasFacultad'.$id);
                    }
                }else{
                    //no ha llenado los campos nesesarios de la universidad
                    redirect('DatosPreparatoria'.$id);
                }
            }
            
        }else{
            redirect('Dashboard/AspiranteStatus1');
        }
        
    }
    

}
