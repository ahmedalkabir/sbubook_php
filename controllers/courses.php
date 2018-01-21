<?php 
    class Courses extends Base_Controller{
        public function __construct(){
            parent::__construct();
            $this->loadModel("courses");
        }

        public function get($id=null){
            $this->view->course_data = $this->model->getCourses();
            $this->view->render('courses/get');
        }
    }