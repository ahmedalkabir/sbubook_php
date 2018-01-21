<?php 
    class Login_Model extends Base_Model{
        public function __construct() {
            parent::__construct();
        }

        public function login($username, $password){

            $st = $this->db->prepare("SELECT user_name FROM user_data WHERE user_name = :username AND user_password = :password");
            $st->execute(array(
                ':username' => $username,
                ':password' => md5($password)
            ));

            $data = $st->fetch(PDO::FETCH_ASSOC);
            $hasData = $st->rowCount();

            if($hasData > 0){
                Session::set('loggedin', true);
                Session::set('username',$data['username']);
                header('Location:'.BASE_URL . 'manager');
            }else{
                header('Location:'.BASE_URL.'login?message='.urldecode('login failed'));
            }
        }
    }