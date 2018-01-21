<?php 
    class Post extends Base_Controller{
        public function __construct() {
            parent::__construct();
        }

        public function get(){
            $this->showPost($_GET['id']);
        }

        private function showPost($id){
            if((isset($id)) && (is_numeric($id))){
                $this->view->departmentList = ($this->loadModel('department'))->getDepartmentListDB();
                $this->view->posts = ($this->loadModel('post'))->getPosts($id);
                if((empty($this->view->posts)) !== TRUE){
                    $this->view->render('post');
                }else{
                    echo "bow";
                }
            }else{
                echo "Sorry :p";
            }
        }
    }