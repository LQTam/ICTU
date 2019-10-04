<?php 
session_start();
	if(!isset($_GET['action']))
		$action='showLoginForm';
	else $action = $_GET['action'];

	require_once('./controller/CategoryController.php');
	require_once('./controller/UserController.php');
	$category = new CategoryController();
	$user = new UserController();
	switch ($action) {
		case 'showLoginForm':
			require_once('./view/login.php');
			break;

		case 'login':{
			$user->login($_POST['uname'],$_POST['pwd']);
			break;
		}

		case 'logout':{
			$user->logout();
			break;
		}
		case 'categories':
			$category->getAllCate();
			break;
		case 'edit-cate' : {
			require_once('./view/categories/edit.php');
			break;
		}

		case 'add-cate' : 
			require_once('./view/categories/add.php');

		case 'store-cate' : {
			$category->addCategory($_POST['cate_name']);
			break;
		}

		case 'update-cate' : {
			$category->updateCateByID($_POST['cate_id'],$_POST['cate_name']);
			break;
		}

		case 'delete-cate' : {
			if(isset($_SESSION['username'])){
				$category->deleteCateByID($_GET['cate_id']);
			}else   header('location:?action=showLoginForm');
			break;
		}
		default:
			# code...
			break;
	}
?>
