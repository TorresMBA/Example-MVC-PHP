<?php 
	class Eror extends Controller{
		function __construct(){
			parent::__construct();
			$this->view->render('error/index');
			//echo "<p>Error al cargar la pagina</p>";
		}
	}
	
?>