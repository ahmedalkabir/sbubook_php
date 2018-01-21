<?php
    class Post_Model extends Base_Model{
        public function __construct(){
            parent::__construct();
        }

        public function getPosts($id=NULL, $start=NULL, $end=NULL){
            if(isset($id)){
                $sql_statement = "SELECT * FROM `posts` WHERE post_id = ".$id."";
                $result = $this->db->query($sql_statement);
                if($result !== FALSE){
                    return $result->fetchAll(PDO::FETCH_ASSOC);
                }
            }else if(isset($start) && isset($end)){
                $sql_statement = "SELECT * FROM `posts` ORDER BY post_id DESC LIMIT ".$start.", ".$end."";
                $result = $this->db->query($sql_statement);
                if($result !== FALSE){
                    return $result->fetchAll(PDO::FETCH_ASSOC);
                }
            }else{
                $sql_statement = "SELECT * FROM `posts`";
                $result = $this->db->query($sql_statement);
                if($result !== FALSE){
                    return $result->fetchAll(PDO::FETCH_ASSOC);
                }
            }
        }

        // add post to database
        public function AddPost($title,$author, $content, $image){
            $sql_statement = "INSERT INTO `posts` (`post_id`, `post_title`, `post_user`, `post_date`, `post_content`, `post_comment_count`, `post_image`)
                                VALUES (NULL, '".$title."', '".$author."', NOW(), '".$content."', '', '".$image."')";
            $this->db->query($sql_statement);
        }

        //delete post from the database 
        public function DeletePost($id_post){
            if(is_numeric($id_post)){
                $sql_statement = "DELETE FROM `posts` WHERE `post_id` = ".$id_post."";
                $this->db->query($sql_statement);
            }
        }

        // edit post 
        public function EditPost($id_post, $name_post, $author_post, $content_post, $image_post){
            if(is_numeric($id_post)){
                $sql_statement = "UPDATE `posts` SET `post_title` = '".$name_post."'
                , `post_user` = '".$author_post."', `post_content` = '".$content_post."', 
                `post_image` = '".$image_post."' 
                WHERE `posts`.`post_id` = ".$id_post."";
                $this->db->query($sql_statement);
            }
        }
    }