<?php
require("autoload.php");


$viewObj = new LoadView;

$main = $viewObj->load("main");


/******
<form action="index.php" class="search" method="post" accept-charset="utf-8">
  <input type="text" name="sld" value="" placeholder="SLD"></input>
  <input type="text" name="tld" value="" placeholder="TLD"></input>

  <input type="submit" name="submit" value="Submit"></input>
  
  
</form>

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$call = new Call("gethosts");
	$response = $call->executeCall();
	
	var_dump($response);
	}
********/


?>

