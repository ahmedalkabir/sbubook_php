<?php 
    class Bootstrap{
        public function __construct(){
            $url = NULL;
            if(!isset($_GET['url'])){

            }else{
                $url = $_GET['url'];
                $url = explode("/",$url);
            }

            if(empty($url[0])){
                require_once("controllers/main.php");
                (new Main())->getMainPage();
                return false;
            }
            $file_name = "controllers/".$url[0].".php";
            if(!file_exists($file_name)){
                // echo "File does not exist Bootstap";
                echo "Not Found :p 404";
                return false;
            }

            require_once($file_name);
            $ct_name = ucfirst($url[0]);
            $controller = new $ct_name;
            if(empty($url[1])){
                $controller->get();
                return false;
            }else if(empty($url[2])){
                $controller->{$url[0]}($url[1]);
            }else if(method_exists($controller, $url[2])){
                $controller->{$url[1]}($url[2]);
            }else{
                echo "Not Found Sorry";
            }
            // $action_name = isset($url[1]) ? $url[1] : NULL;
            // if($action_name && method_exists($controller, $action_name)){
            //     if(empty($url[2])){
            //         $controller->{$url[1]}();
            //     }else{
            //         $controller->{$url[1]}($url[2]);
            //     }
            // }else{
            //     echo "Action does not exist";
            // }
        }
    }