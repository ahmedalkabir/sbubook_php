<?php 
    class Department_Model extends Base_Model{
        public function __construct() {
            parent::__construct();
        }

        public function getDepartmentListDB(){
            return $this->db->query("SELECT * FROM department_list;")->fetchAll(PDO::FETCH_ASSOC);
        }

        // get subjects of department 
        public function getSubjectList($department_code = NULL){
            if(isset($department_code)){
                return $this->db->query("SELECT * FROM ".strtolower($department_code)."_sbj")->fetchAll(PDO::FETCH_ASSOC);
            }
        }

        // Add department to the database
        public function AddDepartment($department_code, $department_name){
            $this->CreateDepartmentTable($department_code);
            $this->InsertDepartment($department_code, $department_name);
        }

        // for deleting department from the database
        public function DeleteDepartment($department_code){
            $this->DropDepartment($department_code);
            $this->RemoveDepartment($department_code);
        }

        // for editing the department 
        public function EditDepartment($id, $department_code, $department_name){
            $sql_statement = "UPDATE `department_list` SET `code_department` = '".strtoupper($department_code)."',
             `name_department` = '".$department_name."' WHERE `department_list`.`id_department` = ".$id."";
             $this->db->query($sql_statement);
        }
        // create department table in database 
        private function CreateDepartmentTable($department_code){
            $sql_statement = "CREATE TABLE `".strtolower($department_code) . "_sbj"."` (
                `code_subject` varchar(255) CHARACTER SET utf8 NOT NULL,
                `name_subject` varchar(255) CHARACTER SET utf8 NOT NULL,
                `units` int(3) NOT NULL,
                `prerequisites` varchar(255) CHARACTER SET utf8 NOT NULL,
                UNIQUE KEY `code_subject` (`code_subject`)
              ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
              $this->db->query($sql_statement);
        }

        // insert department in the department List
        private function InsertDepartment($department_code, $department_name){
            $sql_statement = "INSERT INTO `department_list` (`id_department`, `code_department`, `name_department`) 
            VALUES (NULL, UPPER('".$department_code."'), '".$department_name."')";
            $this->db->query($sql_statement);
        }

        // delete department form department list table
        private function RemoveDepartment($code_department){
            $sql_statement = "DELETE FROM `department_list` WHERE `code_department` = '".strtoupper($code_department)."'";
            $this->db->query($sql_statement);
        }

        // Drop the table from the database
        private function DropDepartment($code_department){
            $code = strtolower($code_department)."_sbj";
            $sql_statement = "DROP TABLE ".$code."";
            $this->db->query($sql_statement);
        }
    }