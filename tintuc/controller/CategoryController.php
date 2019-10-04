<?php 
    class CategoryController {
        private $model;
        public function __construct()
        {
            require_once('./model/CategoryModel.php');
            $this->model = new CategoryModel();
        }

        public function getAllCate(){
            $categories = $this->model->getAllCate();
            require_once('./view/categories/display.php');
        }

        public function redirectToCategories(){
            $categories = $this->model->getAllCate();
            header('location:?action=categories');            
        }

        public function getCateByID($cate_id){
            return $this->model->getCateByID($cate_id);
        }

        public function addCategory($cate_name){
            $this->model->addCategory($cate_name);
            $this->redirectToCategories();
        }

        public function updateCateByID($cate_id,$cate_name){
            $this->model->updateCateByID($cate_id,$cate_name);
            $this->redirectToCategories();
            $this->redirectToCategories();
        }

        public function deleteCateByID($cate_id){
            $this->model->deleteCateByID($cate_id);
            $this->redirectToCategories();
            $this->redirectToCategories();
        }
    }
?>
