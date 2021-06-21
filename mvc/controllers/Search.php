<?php 
	/**
	 * 
	 */
	class Search extends Connect
	{
		private $productModel;
		function __construct()
		{
			$this->call_models('ProductModel');
			$this->productModel=new ProductModel;
		}
		function index(){
			//models
			if(isset($_POST['search'])){
				$data=$this->productModel->searchByName($_POST['name_search']);

			}
			else{
				$data=[];
			}
			//views
			$this->call_views('layout/search',$data);
		}
	}
 ?>