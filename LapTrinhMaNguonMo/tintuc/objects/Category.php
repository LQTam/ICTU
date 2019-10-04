<?php 
    class Category{
        private $cate_id;
        private $cate_name;


        public function __construct($cate_id,$cate_name){
            $this->cate_id = $cate_id;
            $this->cate_name = $cate_name;
        }

        public function setCateID($cate_id){
            $this->cate_id=$cate_id;
        }

        public function setCateName($cate_name){
            $this->cate_name=$cate_name;
        }

        public function getCateID(){
            return $this->cate_id;
        }
        public function getCateName(){
            return $this->cate_name;
        }

        public function all($db){
            $categories = [];
            $stmt = $db->query("SELECT * FROM category");
            foreach ($stmt->fetchAll() as $key => $cate) {
                $categories[] = new Category($cate['cate_id'],$cate['cate_name']);
            }
            return $categories;
        }

        public function one($db,$cate_id){
            $stmt= $db->query("SELECT * FROM category  WHERE cate_id = '$cate_id'");
            $result = $stmt->fetch();
            if($result['cate_id']){
                return new Category($result['cate_id'],$result['cate_name']);
            }
            return null;
        }

        public function store($db,$cate_name){
            $stmt = $db->prepare('INSERT INTO category(cate_name) VALUES (:cate_name)');
            return $stmt->execute(array(':cate_name'=>$cate_name));
        }

        public function update($db,$cate_id,$cate_name){
            $stmt  = $db->prepare('UPDATE category SET cate_name = :cate_name WHERE cate_id = :cate_id');
            return $stmt->execute(array(
                ':cate_name' => $cate_name,
                ':cate_id' => $cate_id,
            ));
        }

        public function delete($db,$cate_id){
            $stmt = $db->prepare("DELETE FROM category WHERE cate_id = :cate_id");
            return $stmt->execute(array(
                     ':cate_id' => $cate_id,
                 ));
        }
    }
?>