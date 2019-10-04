<?php 
    class User{
        private $user_id;
        private $full_name;
        private $username;
        private $password;
        private $level;


        public function __construct($user_id,$full_name,$username,$password,$level){
            $this->user_id = $user_id;
            $this->full_name = $full_name;
            $this->username = $username;
            $this->password = $password;
            $this->level = $level;
        }

        public function getUserID(){
            return $this->user_id;
        }
        public function getFullName(){
            return $this->full_name;
        }
        public function getUserName(){
            return $this->username;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getLevel(){
            return $this->level;
        }

        public function login($db,$username,$password)
        {
            $stmt = $db->query("SELECT username,password FROM users WHERE username = '$username'");
            foreach ($users = $stmt->fetchAll() as $key => $user) {
                if($user['password'] === $password){
                    return $user;
                }
            }
        }
        // public function all($db){
        //     $categories = [];
        //     $stmt = $db->query("SELECT * FROM category");
        //     foreach ($stmt->fetchAll() as $key => $cate) {
        //         $categories[] = new Category($cate['user_id'],$cate['full_name']);
        //     }
        //     return $categories;
        // }

        // public function one($db,$user_id){
        //     $stmt= $db->query("SELECT * FROM category  WHERE user_id = '$user_id'");
        //     $result = $stmt->fetch();
        //     if($result['user_id']){
        //         return new Category($result['user_id'],$result['full_name']);
        //     }
        //     return null;
        // }

        // public function store($db,$full_name){
        //     $stmt = $db->prepare('INSERT INTO category(full_name) VALUES (:full_name)');
        //     return $stmt->execute(array(':full_name'=>$full_name));
        // }

        // public function update($db,$user_id,$full_name){
        //     $stmt  = $db->prepare('UPDATE category SET full_name = :full_name WHERE user_id = :user_id');
        //     return $stmt->execute(array(
        //         ':full_name' => $full_name,
        //         ':user_id' => $user_id,
        //     ));
        // }

        // public function delete($db,$user_id){
        //     $stmt = $db->prepare("DELETE FROM category WHERE user_id = :user_id");
        //     return $stmt->execute(array(
        //              ':user_id' => $user_id,
        //          ));
        // }
    }
?>