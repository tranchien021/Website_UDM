<?php 
	/**
	 * 
	 */
	class Blog extends Connect
	{
		private $BlogModel;
		function __construct()
		{
			$this->call_models('BlogModel');
			$this->BlogModel=new BlogModel;
			
		}
		function index(){
			$data['blog']=$this->BlogModel->getAll();
			$this->call_views('layout/blog',$data);

		}
	}
 ?>