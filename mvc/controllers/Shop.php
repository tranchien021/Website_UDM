<?php 
	/**
	 * 
	 */
	class Shop extends Connect
	{
		private $productModel;
		function __construct()
		{
			$this->call_models('ProductModel');
			$this->productModel=new ProductModel;
		}
		function index(){
			//models
			$data['shop']=$this->productModel->getAll();


			//views 
			$this->call_views("layout/shop",$data);
		}
		
	}
 ?>