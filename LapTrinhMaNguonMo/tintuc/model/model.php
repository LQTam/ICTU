<?php 
	class Model{
		private $db;
		public function __construct(){
			$this->db = new PDO('mysql:host=localhost;dbname=tintuc','root','maimai1A');
			$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}

		public function getAllCate(){
			$stmt = $this->db->query("SELECT * FROM category");
			return $stmt->fetchAll();			
		}
}
?>
