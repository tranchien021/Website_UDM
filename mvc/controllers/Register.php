<?php 
	/**
	 * 
	 */
	class Register extends Connect
	{
		private $userModel;
		function __construct()
		{
			$this->call_models("UserModel");
			$this->userModel=new UserModel;

		}
		function index(){
			// model 
			if(isset($_POST['register'])){
				
				$password=$_POST['password'];
				$repassword=$_POST['password_confirm'];
				if($password!=$repassword){
					echo "password different repassword error!!";
				}
				else{
					$user=[
						'useName'=>$_POST['username'],
						'passWord'=>$_POST['password'],
						'email'=>$_POST['email'],
						'level'=>0
					];
					
					
					$this->userModel->store($user);

					echo "Register Success ! ";
					header('location:'.URLSUB.'login');
					
				}
				$this->call_views('layout/register');
				

			}
			else{
				echo "Error Register Again !!";
				$this->call_views('layout/register');
			}

			// views 
			

		}
	}
 ?>