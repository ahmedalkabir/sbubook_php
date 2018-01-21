<?php
    class Manager_Model extends Base_Model{
        public function __construct(){
            parent::__construct();
        }

        public function get(){
            echo "GET";
        }
    }