<?php
    class View{
        public function __construct(){
        }

        public function render($nom){
            require 'Views/' . $nom . '.php';
        } 
    }
?>