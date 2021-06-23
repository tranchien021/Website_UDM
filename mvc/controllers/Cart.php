<?php 
class Cart extends Connect
{
	private $productModel;
	 function __construct(){
	  	$this->call_models('ProductModel');
	    $this->productModel=new ProductModel;
     }
	function index(){
		$data=[];
		if(isset($_SESSION['cart'])){
			$data=$_SESSION['cart'];
			

		}
		if(isset($_POST['updateCart'])){
			$this->update();
		}
	   
		$this->call_views('layout/cart',$data);
		
	}
	function store($id){
		 
		$product =$this->productModel->findById($id);
		
		if(empty($_SESSION['cart'])|| !array_key_exists($id,$_SESSION['cart'])){
			$product['quanlity']=1;
			$_SESSION['cart'][$id]=$product;
			$data=$_SESSION['cart'];
			 echo  "Thêm thành công";
			/*print_r($_SESSION['cart']);
			die();*/
		}

		else{
			if($_SESSION['cart'][$id]['quanlity'] >=4){
				echo "Không đủ hàng";
			}
			else{
				$product['quanlity']=$_SESSION['cart'][$id]['quanlity']+1;

				
				$_SESSION['cart'][$id]=$product;
				$data=$_SESSION['cart'];
				

				 echo  "Thêm thành công";
			}
			
			/*print_r('<pre>');
			print_r($_SESSION['cart']);
			die();*/
		}

		
		 
		 
		  // return response(['messages' => 'Đã ok']);
		/*$this->call_views('layout/cart',$data);*/
	}
	function delete($id){
		
		unset($_SESSION['cart'][$id]);
		/*print_r($_SESSION['cart']);/*die();*/
		$data=$_SESSION['cart'];
		echo "Xóa thành công";
		 /* Header("Location:".URLSUB.'cart');*/
		/*$this->call_views('layout/cart',$data);*/
	}
	function deleteAll(){	
		unset($_SESSION['cart']);
		
		 echo "Xóa thành công";
	}
	function update1($productId){
		   $qty= $_POST['qty'];

		   if($qty < 0 || !is_numeric($qty)){
				echo "Sai định dạng".$qty;
			}
			else if($qty ==0){
				unset($_SESSION['cart'][$productId]);
				echo "Xóa thành công";
			}
			else{
				$_SESSION['cart'][$productId]['quanlity']=$qty
;				echo "Cập nhật thành công";
			}
	}
	function update(){		
		foreach ($_POST['quanlity'] as $productId => $qty) {
			if($qty < 0 || !is_numeric($qty)){
				continue;
			}
			else if($qty ==0){
				unset($_SESSION['cart'][$productId]);
			}
			else{
				$_SESSION['cart'][$productId]['quanlity']=$qty;
			}
		}
		header('location:'.URLSUB.'cart');
	}
	function order(){
		echo "order";
	}
}
 ?>