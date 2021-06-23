<?php 
	/**
	 * 
	 */
	class Detail_Product extends Connect
	{
		private $productModel;
		function __construct()
		{
			$this->call_models("ProductModel");
			$this->productModel=new ProductModel; 
		}
		function index($id){
			//model
			$data['detail_product']=$this->productModel->findById($id);


			//views
			$this->call_views('layout/detail_product',$data);
		}
	}

 ?>