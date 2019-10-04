<?php 
	class UserModel{
		private $db;
		public function __construct(){
			require_once('./objects/User.php');
			$this->db = new PDO('mysql:host=localhost;dbname=tintuc','root','maimai1A');
			$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$this->users = null;
		}

        public function login($username,$password)
		{
			return User::login($this->db,$username,$password);
		}
		// public function getAllCate(){
		// 	return Category::all($this->db);
		// }

		// public function getCateByID($cate_id){
		// 	return Category::one($this->db,$cate_id);
		// }

		// public function addCategory($cate_name){
		// 	return Category::store($this->db,$cate_name);
		// }

		// public function updateCateByID($cate_id,$cate_name){
		// 	return Category::update($this->db,$cate_id,$cate_name);
		// }

		// public function login($username,$password)
		// {
			
		// }
		// public function deleteCateByID($cate_id){
		// 	return Category::delete($this->db,$cate_id);
		// }
}
?>
