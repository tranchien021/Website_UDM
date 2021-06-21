<?php
   
    class Login extends Connect {

        private $userModel;
     function __construct(){
        $this->call_models('UserModel');
        $this->userModel=new UserModel;
     }
    function index(){   
          if (isset($_POST["signLogin"])){
                $username = $_POST["username"];
                $password  = $_POST["password"];
               
                $data['user']=$this->userModel->login($username, $password); 
                if (empty( $data['user'])){
                     $_SESSION["thongbao"]="Nhập sai username hoặc password";
                     $this->call_views('layout/login/login');
                } else{
                     $_SESSION['username'] = $_POST["username"];
                    Header("Location:".URLSUB);
                }
            }

            if (isset($_SESSION["username"])){
                Header("Location:".URLSUB);
            }
            else{
                
               $this->call_views('layout/login');
            }
            
        }
    }
?>