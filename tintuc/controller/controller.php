<?php 
    class Controller {
        private $model;
        public function __construct()
        {
            require_once('../model/model.php');
            $this->model = new Model();
        }

        public function getAllCate(){
            $categories = $this->model->getAllCate();

            require_once('../view/display.php');
        }
    }
?>
