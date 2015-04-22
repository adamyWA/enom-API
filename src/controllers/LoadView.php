<?php
class LoadView {
	protected $view;
	
	function load($view) {
		$viewPath = "\../views/";
		$viewExt = ".php";
		
			include_once($viewPath . $view . $viewExt);

	}
}


?>