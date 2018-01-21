<?php 
    class Students extends Base_Controller{
        public function __construct(){
            parent::__construct();
            $this->loadModel("students");
        }

        public function add(){
            if(isset($_POST['submit'])){
                unset($_POST['submit']);
                $this->view->id = $this->model->addStudent($_POST);
            }

            $this->view->render('students/add');
        }
        public function get($id=null){
            echo "Hey boss";
        }
    }