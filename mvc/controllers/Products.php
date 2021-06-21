<?php 
class Products extends Connect
{
	private $productModel;
	 function __construct(){
	  	$this->call_models('ProductModel');
	    $this->productModel=new ProductModel;
     }
	function index(){
		$data['sanpham']=$this->productModel->getAll();
		$data['main']='sanpham/main';
		$this->call_views('admin/index',$data);
	}
	function add(){
		if(isset($_POST['addproduct'])){

			$path="public/layout/img/featured/";
			$tmp_name=$_FILES['images']['tmp_name'];
			$img=$_FILES['images']['name'];
			move_uploaded_file($tmp_name, $path . $img);

			$sanpham=[
			'masp'=>$_POST['masp'],
			'img'=>$img,
			'name'=>$_POST['name'],
			'address'=>$_POST['address'],
			'date'=>$_POST['date'],
			'theloai'=>$_POST['category'],
			'price'=>$_POST['price'],
			'content'=>$_POST['content']
		];
		
		$this->productModel->store($sanpham);
	    	$data['sanpham']=$this->productModel->getAll();
			$data['main']='sanpham/main';
			$this->call_views('admin/index',$data);
		}
		$data['main']='sanpham/add';
		$this->call_views('admin/index',$data);
	}
	function edit($id){
		if(isset($_POST['editproduct'])){

			$path="public/layout/img/featured/";
			$tmp_name=$_FILES['images']['tmp_name'];
			$img=$_FILES['images']['name'];
			move_uploaded_file($tmp_name, $path . $img);

			$sanpham=[
			'masp'=>$_POST['masp'],
			'img'=>$img,
			'name'=>$_POST['name'],
			'address'=>$_POST['address'],
			'date'=>$_POST['date'],
			'tinhtrang'=>$_POST['tinhtrang'],
			'price'=>$_POST['price'],
			'content'=>$_POST['content']
		   ];
			$this->productModel->update($id,$sanpham);
			$data['sanpham']=$this->productModel->getAll();
			$data['main']='sanpham/main';
			$this->call_views('admin/index',$data);
			
		}
		$data['sanpham']=$this->productModel->findById($id);
		$data['main']='sanpham/edit';
		$this->call_views('admin/index',$data);
	}
	function delete($id){
		
		$this->productModel->destroy($id);
		
		$data['sanpham']=$this->productModel->getAll();
		$data['main']='sanpham/main';
		$this->call_views('admin/index',$data);
	}
}
 ?>
