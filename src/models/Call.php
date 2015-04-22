<?php

class Call {
	
	/***************************************************************
	
	Change username and password here. 
	
	Remove  ' test ' from $url to run calls in live environment 
	
	****************************************************************/
	
	private $user = "resellid";
	private $pass = "resellpw";
	protected $url = "http://resellertest.enom.com/interface.asp?";
	
	
	/***************************************************************
	
	DO NOT EDIT BELOW THIS LINE
	
	****************************************************************/
	

	protected $command;
	function __construct($command) {
		$this->command = $command;
		}

	
	
	
	
	private function construct($string) {
		
		$ch = curl_init();
		
		
		curl_setopt($ch, CURLOPT_URL, 	$this->url . 	// starts url
										"uid=" . 		// adds uid param
										$this->user .   // adds $user to url
										"&pw=" . 		// adds pw param
										$this->pass . 	// adds $pass to url
										"&responsetype=xml&" . 			// adds amp before adding string array to url
										$string . 		// adds the string of params
										"&" . 
										"command=" . 
										$this->command	
										);	
		/******Had to comment out the SSL options and connect over http - shitty curl version doesn't support the proper protocol
		curl_setopt($ch, CURLOPT_VERBOSE, true);
		curl_setopt($ch, CURLOPT_CAINFO, getcwd() . "\cacert.crt");
		*******/
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		$error = curl_error($ch);

		$response = curl_exec($ch);

		$xml = json_decode(json_encode(simplexml_load_string($response)));

		curl_close($ch);
		
		
		
		if ($xml->ErrCount > 0) {
			$err = array();
			$errors = $xml->errors;
			foreach($errors as $error) {
				array_push($err, $error);
			}
			return $err;
		}
		
		return $xml;
	}

	protected function createParamString() {

		/*
		1. Create Validation class for $_POST input
		2. After validation delimit the parameters by &$key=>$value
		3. Return valid params as a string to pass into Call->constructCH() 
		*/
		
		$validate = new Validate;
		$validated = $validate->ValidateParams();
		
		$string = array($this->user, $this->pass);
			if(is_array($validated)){
			foreach($validated as $key=>$value) {
				$string[] = "&" . $key . "=" . $value;
			}
		}
		$string = implode("", $string);
		
		return $string;
	}
	
	function executeCall() {
		$string = $this->createParamString();
		$execute = $this->construct($string);
		
		return $execute;
	}
	
}

?>