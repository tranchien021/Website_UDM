<?php 
/**
 * 
 */
class Bill extends Connect
{
	private $userModel;
	private $productModel;
	function __construct()
	{
		$this->call_models("UserModel");
		$this->call_models("ProductModel");
		$this->userModel=new UserModel;
		$this->productModel=new ProductModel;
	}
	function index(){
		if (!isset($_SESSION["username"])){
			Header("Location:".URLSUB."login");
		}else{
			$data['user']=$this->userModel->getAll();
			$data['cart']=$_SESSION['cart'];
			$data['name']=$this->userModel->getusername($_SESSION['username']);
			if(isset($_SESSION['email'])){
				$_SESSION['email']=$data['name']['email'];
			}
			else{
				$_SESSION['email']="";
			}

			
		}
		
		
		
		
		
		$data=$_SESSION['cart'];
	
		$this->call_views("layout/bill",$data);
	}
	function payproduct(){
		if(isset($_POST['payment'])){
			echo 'Minh chien';
			// if(!isset($_SESSION['username'])){
			// 	unset($_SESSION['cart']);
			// 	header('location:'.URLSUB.'login');
			// }
			// else{

			// }
		}
		else{
			echo "Lỗi thanh toán !!! ";
		}
		
	}
}
 ?>