<?php
class LoadView {
	protected $view;
	
	function load($view) {
		$viewPath = getcwd() . "/src/views/";
		$viewExt = ".php";
		
			include_once($viewPath . $view . $viewExt);

	}
}


?>
