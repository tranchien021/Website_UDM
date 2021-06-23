<?php 
	/**
	 * 
	 */
	class Detail_Category extends Connect
	{
		private $CategoryModel;
		private $ProductModel;
		function __construct()
		{
			$this->call_models("CategoryModel");
			$this->CategoryModel=new CategoryModel; 

			$this->call_models("ProductModel");
			$this->ProductModel=new ProductModel; 

			
		}
		function index($id){

			$data['detail_category']=$this->CategoryModel->findById($id);	
			$data_category=$data['detail_category']['theloai'];
			$data['theloai']=$this->ProductModel->getcategory($data_category);
			$data['Category']=$this->CategoryModel->getAll();
			
		

			
			//views
			$this->call_views('layout/category',$data);


		}
	}

 ?>