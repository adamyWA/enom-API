<?php
class GetDomains{	
	function getDomains() {
				
				$domain_list = "domain-list";
				$call = new Call("getdomains");
				$getDomains = $call->executeCall();
			
				//if(is_array($getDomains)) {
				//return $getDomains[0];
				//}
				$previous = $getDomains->GetDomains->PreviousRecords;
				$next = $getDomains->GetDomains->NextRecords;
				
				
				
				$get = $getDomains->GetDomains->$domain_list->domain;
				//necessary to set hyphenated params as variables if ExtFormat isn't passed
				$expirationDate = "expiration-date";
				$autoRenew = "auto-renew";
				
				$i = 1;
				foreach($get as $k=>$v) {
				$domains[$i]["sld"]  = $v->sld;
				$domains[$i]["tld"] = $v->tld;
				$domains[$i]["domainname"] = $v->sld . "." . $v->tld;
				$domains[$i]["expires"] = $v->$expirationDate;
				$domains[$i]["wpps"] = $v->wppsstatus;
				$domains[$i]["auto"] = $v->$autoRenew;
				$i = $i + 1;
				}
				
				return array($domains, $previous, $next);
				
				
	}
}


