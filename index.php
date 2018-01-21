<?php 
    require_once("config.php");

    spl_autoload_register(function ($class){
        require CORE . $class . '.php'; 
    });
    Session::init();
    $app = new Bootstrap();
?>
