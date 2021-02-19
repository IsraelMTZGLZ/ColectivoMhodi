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

	public function emailTest()
	{
		$email = "hectori.um.15@gmail.com";
		$name = "Hector Urias";
		$body = "Hey man, how are you? <br><br><a href='https://google.com'>Google</a>";
		$subject = "Test email";

		$headers = array(
			'Authorization: Bearer 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',
			'Content-Type: application/json'
		);

		$data = array(
			"personalizations" => array(
				array(
					"to" => array(
						array(
							"email" => $email,
							"name" => $name
						)
					),
					"dynamic_template_data"=> array (
						
						"password" => '12345',
						"name" => 'hector urias'
						
					)

				)
			),
			"from" => array(
				"email" => "study@anglopageone.com",
				"name"=>"Anglo Latino Education Partnership"
			),
			"reply_to"=> array(
				"email"=>"study@anglolatinoedu.com",
				"name"=>"Anglo Latino Education Partnership"
			),
			"subject" => $subject,
			"template_id"=> "d-386031cf274443729e178fff7da5392b"
		);
	
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		curl_close($ch);

		echo $response;
		
	}

	public function emailTestRemarck()
	{
		$email = "hectori.um.15@gmail.com";
		$name = "Hector Urias";
		$body = "Hey man, how are you? <br><br><a href='https://google.com'>Google</a>";
		$subject = "Test email";

		$headers = array(
			'Accept: application/json',
			'Content-Type: application/json',
			'X-Postmark-Server-Token: 15fdda33-0b79-42ef-a6cf-4e4ab8dd1b06'
		);

		$data = array(
			
			"From" => 'study@anglopageone.com',
			"To" => 'study@anglopageone.com',
			'Subject'=> 'Hello from Postmark', 
			'HtmlBody'=> '<strong>Hello</strong> dear Postmark user.'
		);
	
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://api.postmarkapp.com/email");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		curl_close($ch);

		echo $response;
		
	}

	
} 
