<?php 
class Admin extends Connect
{
	function index(){
		 if (!isset($_SESSION["username"])){
                Header("Location:".URLSUB."login");
            }else{
            	$data['main']='home/main';
				$this->call_views('admin/index',$data);
            }
	}
}
 ?>