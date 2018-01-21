<?php 
    class Session
    {
        public static function init(){
            session_start();
            $_SESSION['test'] = 1;
        }
        public static function destory(){
            session_destroy();
        }

        public static function set($key, $value){
            $_SESSION[$key] = $value;
        }

        public static function get($key){
            
            if(isset($_SESSION[$key])){
                return $_SESSION[$key];
            }else{
                return false;
            }
        }
    }