<?php
class GetDomainInfo {
	
	function domainInfo() {
	$call = new Call("getdomaininfo");
	$domainInfo = $call->executeCall();
	
	$domainName = $domainInfo->GetDomainInfo->domainname;
	
	$services = $domainInfo->GetDomainInfo->services;
	
	return $domainName;
	}

}

?>