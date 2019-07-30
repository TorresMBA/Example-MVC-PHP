<?php 
	class Main extends Controller{
		function __construct(){
			parent::__construct();
			$this->view->render('main/index');
			echo "<p>Controllers/main.php || Metodo constructor</p>";
		}

		public function saludo(){
			echo "<p>Metodo Saludo :D</p>";
		}
	}
?>