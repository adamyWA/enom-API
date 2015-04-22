<?php

class Validate {
	protected $command = array();

	
	function ValidateParams() {
	
	/*****
	1. Trim
	2. htmlentities
	3. RegEx check for illegal chars
	4. Compare "command" to enom API commands
	
	It will be a separate function to validate whether or not the RIGHT type of input was supplied for a 
	specific param I.E. - BundleID must be a number. this function is for security validation only,
	with one exception - Command is included here because it is the required param for any call (except for user/pass)
	
	*****/
		
		$params = array();
		foreach($_POST as $key=>$value) {
			//iterate through arrays and check both the key and value for the above validation checks
			
			/*
			if(empty($key) || empty($value)) {
				return "Both fields required!";
			}
			*/
			$params[$key] = $value;
		}
		return $params;
	}

}




?>