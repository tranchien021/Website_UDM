<?php 
class Users extends Connect
{
	private $userModel;
	 function __construct(){
	  	$this->call_models('UserModel');
	    $this->userModel=new UserModel;
     }
	function index(){
		$data['user']=$this->userModel->getAll();
		$data['main']='users/main';
		$this->call_views('admin/index',$data);
	}
	function add(){
		if(isset($_POST['adduser'])){
			$user=[
			'useName'=>$_POST['username'],
			'passWord'=>$_POST['password'],
			'email'=>$_POST['email'],
			'level'=>$_POST['level']
		];
		$this->userModel->store($user);
	    	$data['user']=$this->userModel->getAll();
			$data['main']='users/main';
			$this->call_views('admin/index',$data);
		}
		
		
		$data['main']='users/add';
		$this->call_views('admin/index',$data);
	}
	function edit($id){
		if(isset($_POST['edituser'])){
			$user=[
			'useName'=>$_POST['username'],
			'passWord'=>$_POST['password'],
			'email'=>$_POST['email'],
			'level'=>$_POST['level']
			];
			$this->userModel->update($id,$user);
			$data['user']=$this->userModel->getAll();
			$data['main']='users/main';
			$this->call_views('admin/index',$data);
			
		}
		$data['user']=$this->userModel->findById($id);
		$data['main']='users/edit';
		$this->call_views('admin/index',$data);
	}
	function delete($id){
		
		$this->userModel->destroy($id);
		
		$data['user']=$this->userModel->getAll();
		$data['main']='users/main';
		$this->call_views('admin/index',$data);
	}
}
 ?>
