<?php 
    class Base_View{
        public function __construct(){}

        public function render($name){
            $this->navigation = "views/layout/navigation.php";
            require_once("views/$name.php");
            require_once("views/layout/footer.php");
        }

    }