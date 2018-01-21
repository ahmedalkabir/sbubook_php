<?php 
    class Department extends Base_Controller{
        public function __construct() {
            parent::__construct();
            $this->Department_DB = $this->loadModel("department");
        }

        private function CheckIfExist($code_department){
            foreach($this->getList() as $key => $value){
                if(strtoupper($code_department) === $value['code_department']){
                    return true;
                }
            }
        }

        private function getNameDepartment($code_department){
            foreach($this->getList() as $key => $value){
                if(strtoupper($code_department) === $value['code_department']){
                    return $value['name_department'];
                }
            }
        }

        public function get(){
            // for navigation list
            $this->view->departmentList = ($this->loadModel('department'))->getDepartmentListDB();
            $this->view->render('department_list');
        }

        public function getList(){
            return $this->Department_DB->getDepartmentListDB();     
        }


        public function department($Department_Name=NULL){
            // for navigation list
            $this->view->departmentList = ($this->loadModel('department'))->getDepartmentListDB();
            
            if($this->CheckIfExist($Department_Name) 
            && isset($Department_Name)){
               $this->view->Sbj_Department = ($this->loadModel('department'))->getSubjectList($Department_Name);
               $this->view->Name_Department = $this->getNameDepartment($Department_Name);

               $this->view->render('sbj_depart');                
            }else{
                echo "Sorry 4o4 not Found :(";
            }
        }
    }