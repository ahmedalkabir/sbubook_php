<?php 
    class Courses_Model extends Base_Model{
        public function __contstruct(){
            parent::__contstruct();
        }

        public function getCourses(){
            return $this->db->query("SELECT course_id, name, description FROM courses;")->fetchAll(PDO::FETCH_ASSOC);
        }

    }

