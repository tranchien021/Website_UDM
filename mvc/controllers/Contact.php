<?php 
	/**
	 * 
	 */
	class Contact extends Connect
	{
		
		function __construct()
		{
			# code...
		}
		function index(){
			$data=[];
			$this->call_views('layout/contact',$data);
		}
	}
 ?>