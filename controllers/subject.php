<?php 
    class Subject extends Base_Controller{
        public function __construct(){
            parent::__construct();
            $this->Subject_DB =$this->loadModel("subject");
        }

        public function subject($subject_code=NULL){
            // for navigation list
            $this->view->departmentList = ($this->loadModel('department'))->getDepartmentListDB();

            if(isset($subject_code)){
                $this->view->book_list = $this->Subject_DB->getDB($subject_code);
                if(isset($this->view->book_list)){
                    $this->view->render('book_sbj');
                }else{
                    echo "Sorry :(";
                }
                    
            }
        }

        public function get(){
            
        }
    }