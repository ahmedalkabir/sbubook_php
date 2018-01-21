<?php 
    class Subject_Model extends Base_Model{
        public function __construct(){
            parent::__construct();
        }

        public function getDB($name_subject){
            if(isset($name_subject)){

                $result = $this->db->query("SELECT * FROM " . strtolower($name_subject));
                if($result !== FALSE){
                    return $result->fetchAll(PDO::FETCH_ASSOC);
                }
                
            }
            
        }

        // add book to database 
        public function AddBook($subject_code, $book){
            $sql_statement = "INSERT INTO `".strtolower($subject_code)."` (`id_book`, `name_book`, `type_book`, `size_book`, `url_book`) VALUES 
            (NULL, '".$book['name']."', 
            '".$book['type']."', 
            '".$book['size']."', 
            '".$book['url']."')";

            $this->db->query($sql_statement);
        }

        // get books from the database
        public function GetBooks($subject_code, $where = NULL){
            if(isset($where)){
                $sql_statement = "SELECT * FROM `".strtolower($subject_code)."` WHERE `id_book` = ".$where."";
            }else{
                $sql_statement = "SELECT * FROM `".strtolower($subject_code)."`";
            }
            $result = $this->db->query($sql_statement);
            if($result !== FALSE){
                return $result->fetchAll(PDO::FETCH_ASSOC);
            }
        }

        // public delete book from the database
        public function DeleteBook($id_book, $subject_code){
            $sql_statement = "DELETE FROM `".strtolower($subject_code)."` WHERE `id_book` = ".$id_book."";
            $this->db->query($sql_statement);
        }

        // public edit infromation of specific book
        public function EditBook($subject_code, $id_book, $information){
            $sql_statement = "UPDATE `".strtolower($subject_code)."` SET `name_book` = '".$information['name']."',
            `type_book` = '".$information['type']."',
            `size_book` = '".$information['size']."',
            `url_book` = '".$information['url']."'
            WHERE `id_book` = ".$id_book."";
            
            $this->db->query($sql_statement);
        } 
        // to create subject and add it to database
        public function CreateSubject($department_code, $code_subject, $name_subject, $units, $prerequisites){
            
            $subject = [$code_subject, $name_subject, $units, $prerequisites];
            
            $this->AddSubjectToDepartment($department_code,$subject);
            $this->CreateSubjectTable($code_subject);
        }

        // to drop subject table from database and delete it from specific department table
        public function DeleteSubject($department_code, $subject_code){
            // Drop The Table
            $this->DeleteSubjectFromDepartment(strtolower($department_code),strtolower($subject_code));
            $this->DropSubject($subject_code);
            
        }

        // SQL statement to create Subject Table
        private function CreateSubjectTable($code_subject){

            $sql_statement = "CREATE TABLE `sbubook`.`".strtolower($code_subject)."` ( `id_book` INT(11) NOT NULL AUTO_INCREMENT , 
            `name_book` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
            `type_book` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
            `size_book` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
            `url_book` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
            PRIMARY KEY (`id_book`)) ENGINE = InnoDB;";

            $this->db->query($sql_statement);

        }

        // to add subject to specific department
        private function AddSubjectToDepartment($department_code ,$array_subject){
            $sql_statement = "INSERT INTO `".strtolower($department_code)."` (`code_subject`, `name_subject`, `units`, `prerequisites`) 
            VALUES ('".$array_subject[0]."', '".$array_subject[1]."', '".$array_subject[2]."', '".$array_subject[3]."')";

            $this->db->query($sql_statement);
        }

        // to drop subject from database 
        private function DropSubject($subject_code){
            if(isset($subject_code)){
                $sql_statement = "DROP TABLE `".strtolower($subject_code)."`";
                $this->db->query($sql_statement);
            }
        }

        // to delete subject from specific department
        private function DeleteSubjectFromDepartment($department_code, $subject_code){
            if(isset($department_code) && isset($subject_code)){
                $sql_statement = "DELETE FROM `".strtolower($department_code)."_sbj` WHERE `code_subject` = '".strtolower($subject_code)."'";
                $this->db->query($sql_statement);
            }
        }

    }