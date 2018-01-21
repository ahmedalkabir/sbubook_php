<?php 
    class Login extends Base_Controller{

        public function __construct() {
            parent::__construct();
            $this->LoginDB = $this->loadModel('login');
        }

        public function get(){
            $username = Session::get('username');
            $this->view->username = $username?$username:'';
            $this->view->message = isset($_GET['message'])?$_GET['message']:'';

            $this->view->render('sbu_admin/login');
        }

        public function login($option=NULL){
            if($option==='in'){
                if(isset($_POST['username'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $this->LoginDB->login($username, $password);
                }
            }
        }
    }