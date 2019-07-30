<?php
    class View{
        public function __construct(){
            echo "<p>Vista Base</p>";
        }

        public function render($nom){
            require 'Views/' . $nom . '.php';
        } 
    }
?>