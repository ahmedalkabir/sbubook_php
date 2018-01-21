<?php 
    class Manager extends Base_Controller{

        private $option_array = ['add_department','subjects','books','departments','posts'];
        private $ManagerDB = NULL;


        public function __construct(){
            parent::__construct();
            $this->ManagerDB = $this->loadModel("manager");
        }

        public function get(){
            
        }
        public function manager($option=null){

            if(Session::get('loggedin') === true){
                if(in_array($option,$this->option_array)){
                    $this->{$option}();
                }else{
                    echo "Not Found";
                }
            }
        }

        // for department manager
        public function departments($action=NULL){
            if(Session::get('loggedin') === true){
                $this->view->departmentList = ($this->loadModel('department'))->getDepartmentListDB();

                /* to recieve it by ajax technique */
                $str_json = file_get_contents('php://input');
                $decode_json = json_decode($str_json);

                // 
                if(isset($action)){
                    switch($action){

                        case "get_department":
                            $myJSON = json_encode($this->get_department());
                            echo $myJSON;
                            break;
                        case "add_department":
                            if((isset($decode_json->{'code'})) && 
                            (isset($decode_json->{'name'}))){
                                // Add Department to the datbase
                                $this->add_department($decode_json->{'code'}, $decode_json->{'name'});
                            }
                            break;
                        case "delete_department":
                            if((isset($decode_json->{'code'}))){
                                $this->delete_department($decode_json->{'code'});
                            }
                            break;
                        case "edit_department":
                            if(isset($decode_json->{'id'})){
                                $this->edit_department($decode_json->{'id'},$decode_json->{'code'},$decode_json->{'name'});
                            }
                            break;
                        default:
                            echo "Error :p";
                            break;
                    }
                }else{
                    $this->view->render('sbu_admin/department_manager');
                }
                
            }
        }
        // for subjects manager
        public function subjects($action=NULL){
            if(Session::get('loggedin') === true){
                $this->view->departmentList = ($this->loadModel('department'))->getDepartmentListDB();

                /* to recieve it by ajax technique */
                $str_json = file_get_contents('php://input');
                $decode_json = json_decode($str_json);

                // 
                if(isset($action)){
                    if(isset($decode_json->{'department'})){
                        // add subject to database department and create its table
                        $this->add_subject($decode_json);
                    }else if($action === "get_subjects"){
                        // retrives subjects from database
                        $this->get_subjects($decode_json->{'departmentSubject'});
                    }else if($action === "delete_subject"){
                        if(isset($decode_json->{"departmentDelete"}) && isset($decode_json->{"subjectDelete"})){
                            $this->delete_subject($decode_json->{"departmentDelete"}, $decode_json->{"subjectDelete"});
                        }
                    }
                }else{
                    $this->view->render('sbu_admin/subject_manager');
                }
                
            }
        }

        // for books manager 
        public function books($action=NULL){
            if(Session::get('loggedin') === true){
                $this->view->departmentList = ($this->loadModel('department'))->getDepartmentListDB();

                //load Subject Database Model to send results to database
                $this->SubjectDB = $this->loadModel("subject");

                /* to recieve it by ajax technique */
                $str_json = file_get_contents('php://input');
                $decode_json = json_decode($str_json);

                // 
                if(isset($action)){
                    switch($action){
                        case "add_book":
                            if(isset($decode_json->{'subject_code'})){
                                $book_array = ['name' => $decode_json->{'name'},
                                'type' => $decode_json->{'type'},
                                'size' => $decode_json->{'size'},
                                'url' => $decode_json->{'url'}];

                                $this->SubjectDB->AddBook(strtolower($decode_json->{'subject_code'}), $book_array);
                            }
                            break;
                        case "get_books":
                            // to get books from database
                            if((isset($decode_json->{'subject_code'}))&&(isset($decode_json->{'id_book'}))){
                                $this->get_books(strtolower($decode_json->{'subject_code'}),$decode_json->{'id_book'});
                            }else if(isset($decode_json->{'subject_code'})){
                                $this->get_books(strtolower($decode_json->{'subject_code'}));
                            }
                            break;
                        case "delete_book":
                            // to delete book
                            if(isset($decode_json->{'subject_code'})){
                                $this->delete_book($decode_json->{'id_book'}, $decode_json->{'subject_code'});
                            }
                            break;
                        case "edit_book":
                            // to edit books
                            if((isset($decode_json->{'subject_code'}))&&(isset($decode_json->{'id_book'}))){
                                $book_array = ['name' => $decode_json->{'name'},
                                'type' => $decode_json->{'type'},
                                'size' => $decode_json->{'size'},
                                'url' => $decode_json->{'url'}];
                                $this->edit_book(strtolower($decode_json->{'subject_code'}), $decode_json->{'id_book'} , $book_array);
                            }
                            break;
                        default:
                            break;
                    }
                // show main page of books manager    
                }else{
                    $this->view->render('sbu_admin/book_manager');
                }

            }
        }

        // for posts 
        public function posts($action=NULL){
            if(Session::get('loggedin') === true){
                $this->view->departmentList = ($this->loadModel('department'))->getDepartmentListDB();

                /* to recieve it by ajax technique */
                $str_json = file_get_contents('php://input');
                $decode_json = json_decode($str_json);

                // 
                if(isset($action)){
                    switch($action){
                        case "add_post":
                            if(isset($decode_json->{'name_post'}) 
                                && isset($decode_json->{'author_post'})){
                                $this->add_post($decode_json->{'name_post'},
                                                $decode_json->{'author_post'},$decode_json->{'content_post'}, $decode_json->{'image_post'});
                            }
                            break;
                        case "get_post":
                            if(isset($decode_json->{'id_post'})){
                                $myJSON = json_encode($this->get_post($decode_json->{'id_post'}));
                                echo $myJSON;
                            }else{
                                // show all post
                                $myJSON = json_encode($this->get_post());
                                echo $myJSON;
                            }  
                            break;
                        case "edit_post":
                            if(isset($decode_json->{'name_post'}) 
                            && isset($decode_json->{'author_post'})){
                                $this->edit_post($decode_json->{'id_post'},$decode_json->{'name_post'},
                                                $decode_json->{'author_post'},$decode_json->{'content_post'}, $decode_json->{'image_post'});
                            }
                            break;
                        case "delete_post":
                            if(isset($decode_json->{'id_post'})){
                                $this->delete_post($decode_json->{'id_post'});
                            }
                        default:
                            echo "Error :p";
                            break;
                    }
                }else{
                    $this->view->render('sbu_admin/post_manager');
                }
                
            }
        }

        // add subject to database 
        private function add_subject($post_value){
            //load Subject Database Model to send results to database
            $this->SubjectDB = $this->loadModel("subject");

            $this->SubjectDB->CreateSubject(strtolower($post_value->{'department'} . "_sbj"),
            $post_value->{'code'},
            $post_value->{'name'},
            $post_value->{'units'},
            $post_value->{'prereq'});
        }

        // to get subject list from database and send it in json format
        private function get_subjects($department_code){
            //load Specific Department Database Model to get subjects list from database
            // $this->SubjectsList = $this->loadModel(strtoupper($department_code));
            $this->DepartmentDB = $this->loadModel("department");
            $subjectsArray = $this->DepartmentDB->getSubjectList($department_code);

            $myJSON = json_encode($subjectsArray);
            echo $myJSON;
        }

        // to delete subject                    [TESTED]
        private function delete_subject($department_code, $subject_code){
            $this->SubjectDB = $this->loadModel("subject");

            // delete it
            $this->SubjectDB->DeleteSubject($department_code, $subject_code);
        }

        // to retrive data from model
        private function get_books($subject_code,$id_book=NULL){
            $this->SubjectDB = $this->loadModel("subject");
            $books_array = $this->SubjectDB->GetBooks($subject_code,$id_book);

            $myJSON = json_encode($books_array);
            echo $myJSON;
        }

        // delete book from the database
        private function delete_book($id_book ,$subject_code){
            $this->SubjectDB = $this->loadModel("subject");
            $this->SubjectDB->DeleteBook($id_book, $subject_code);
        }

        // for editing book
        private function edit_book($subject_code, $id_book, $information){
            $this->SubjectDB = $this->loadModel("subject");
            $this->SubjectDB->EditBook($subject_code, $id_book, $information);
        }


        // for adding department 
        private function add_department($department_code, $department_name){
            $this->DepartmentDB = $this->loadModel("department");
            $this->DepartmentDB->AddDepartment($department_code, $department_name);
        }

        // for deleting department
        private function delete_department($department_code){
            $this->DepartmentDB = $this->loadModel("department");
            $this->DepartmentDB->DeleteDepartment($department_code);
        }

        // get departments from the database
        private function get_department(){
            $this->DepartmentDB = $this->loadModel("department");
            return $this->DepartmentDB->getDepartmentListDB();
        }

        // edit the department in the database
        private function edit_department($id, $department_code, $department_name){
            $this->DepartmentDB = $this->loadModel("department");
            $this->DepartmentDB->EditDepartment($id, $department_code, $department_name);
        }

        // add post to the database
        private function add_post($name_post, $author_post, $content_post, $image_post=NULL){
            $this->PostDB = $this->loadModel("post");
            if($image_post === NULL){
                $image = "http://via.placeholder.com/550x350";
                $this->PostDB->AddPost($name_post, $author_post, $content_post, $image);
            }else{
                $this->PostDB->AddPost($name_post, $author_post, $content_post, $image_post);
            }  
            
        }

        // get post from the database
        private function get_post($id_post=NULL)
        {
            $this->PostDB = $this->loadModel("post");
            if(isset($id_post)){
                return $this->PostDB->getPosts($id_post);
            }else{
                return $this->PostDB->getPosts();
            }
        }

        // delete post from the database
        private function delete_post($id_post){
            $this->PostDB = $this->loadModel("post");
            $this->PostDB->DeletePost($id_post);
        }

        // edit the post
        private function edit_post($id_post, $name_post, $author_post, $content_post, $image_post=NULL){
            $this->PostDB = $this->loadModel("post");
            if($image_post === NULL){
                $image = "http://via.placeholder.com/550x350";
                $this->PostDB->EditPost($id_post ,$name_post, $author_post, $content_post, $image);
            }else{
                $this->PostDB->EditPost($id_post ,$name_post, $author_post, $content_post, $image_post);
            }  
            
        }
        private function add_book(){

        }
    }