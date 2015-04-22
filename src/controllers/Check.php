<?php
class Check{	
	function returnCheck() {
				
			
				$call = new Call("check");
				$check = $call->executeCall();
				if(is_array($check)) {
				return $check[0];
				}
				
				$return["domain"] = $check->DomainName; 
				
				if($check->RRPCode == 210) {
					$return["RRPText"] = " is available";
				}
				if($check->RRPCode == 211) {
					$return["RRPText"] = " is not available";
				}
				if($check->RRPCode == 827) {
					return "We don't sell those!";
				}
				if($check->RRPCode != 210 && $check->RRPCode != 211 && $check->RRPCode != 827) {
					return $check->RRPText;
				}
				$response = $return["domain"] . $return["RRPText"];
				
				return $response;
			}

	}




?>