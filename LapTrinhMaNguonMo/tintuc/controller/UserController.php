<?php 
    class UserController {
        private $model;
        private $category;
        public function __construct()
        {
            require_once('./model/UserModel.php');
            $this->model = new UserModel();
            $this->category = new CategoryModel();
        }

        public function redirectToCategories(){
            $categories = $this->category->getAllCate();
            header('location:?action=categories');            
        }

        public function login($username,$password)
        {
            $user = $this->model->login($username,$password);
            session_start();
            $_SESSION['username'] = $user['username'];
            $this->redirectToCategories();
        }

        public function logout()
        {
            session_start();
            unset($_SESSION['username']);
            header('refresh:0,url=?action=showLoginForm');
        }
        // public function getAllCate(){
        //     $categories = $this->model->getAllCate();
        //     require_once('./view/categories/display.php');
        // }

        // public function redirectToCategories(){
        //     $categories = $this->model->getAllCate();
        //     header('location:?action=categories');            
        // }

        // public function login($username,$password)
        // {
        //     $this->model->login($username,$password);
        //     $this->redirectToCategories();
        // }
        // public function getCateByID($cate_id){
        //     return $this->model->getCateByID($cate_id);
        // }

        // public function addCategory($cate_name){
        //     $this->model->addCategory($cate_name);
        //     $this->redirectToCategories();
        // }

        // public function updateCateByID($cate_id,$cate_name){
        //     $this->model->updateCateByID($cate_id,$cate_name);
        //     $this->redirectToCategories();
        //     $this->redirectToCategories();
        // }

        // public function deleteCateByID($cate_id){
        //     $this->model->deleteCateByID($cate_id);
        //     $this->redirectToCategories();
        //     $this->redirectToCategories();
        // }
    }
?>
