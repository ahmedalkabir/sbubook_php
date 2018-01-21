<?php 
    class Main extends Base_Controller{
        public function __contrsuct() {
            parent::__contrsuct();
        }

        public function getMainPage(){
            $this->view->departmentList = ($this->loadModel('department'))->getDepartmentListDB();
            $this->view->posts = ($this->loadModel('post'))->getPosts(NULL,0,5);
            $this->view->render('main');
        }
    }