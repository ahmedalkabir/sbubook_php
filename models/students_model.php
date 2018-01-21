<?php 
    class Students_Model extends Base_Model{
        public function __contstruct(){
            parent::__contstruct();
        }

        public function addStudent($student){
            ksort($student);
            $columns = implode(',', array_keys($student));
            $values = ':' . implode(', :', array_keys($student));

            $stmt = $this->db->prepare("INSERT INTO students ($columns) VALUES($values);");
            
            foreach($student as $key=>$value){
                $stmt->bindValue(":$key",$value);
            }

            $stmt->execute();

            return $this->db->lastInsertId();
        }

    }

