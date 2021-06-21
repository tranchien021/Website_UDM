<?php 
class Layout extends Connect
{
	private $productModel;
	
	private $CategoryModel;
	 function __construct(){
	  	$this->call_models('ProductModel');
	    $this->productModel=new ProductModel;

	    

		$this->call_models('CategoryModel');
		$this->CategoryModel=new CategoryModel;
     }
	function index(){
		$data['sanpham']=$this->productModel->getAll();
		$data['sanpham_noibat']=$this->productModel->getcategory_product('NB');
		$data['sanpham_gioithieu']=$this->productModel->getcategory_product('GT');
		
		$data['Category']=$this->CategoryModel->getAll();

		$data['top3_dacbiet']=$this->productModel->gettop3_product('NB','DESC');
		$data['top3_giamgia']=$this->productModel->gettop3_product('NB','ASC');
		$data['top3_noibat']=$this->productModel->gettop3_product('GT','ASC');
		$data['top3_gia']=$this->productModel->gettop3_product('GT','DESC');


	
		

		
		
		


		//$data['main']='sanpham/main';
		//$this->call_views('admin/index',$data);
		//$data['main']='home/main';
		$this->call_views('layout/index',$data);

	}
}
 ?>