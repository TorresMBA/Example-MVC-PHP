<?php 
	class Nuevo extends Controller{
		function __construct(){
			parent::__construct();
			$this->view->render('nuevo/index');
		}

		public function registrar(){
			echo "Alumno Creado";
			$this->model->insertDatos();
		}
	}
?>