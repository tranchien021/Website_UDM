<?php 
require_once './mvc/configs/config.php';
class App
{
	protected $controllers='Layout';
	protected $actions='index';
	protected $params=[];
	function __construct()
	{
		$outcome=$this->prepareURL();
	    if(isset($outcome[0])){
			if(file_exists('./mvc/controllers/'.ucfirst($outcome[0]).'.php')){
				$this->controllers=ucfirst($outcome[0]);
				unset($outcome[0]);
			}
		}
		require_once('./mvc/controllers/'.$this->controllers.'.php');
		$this->controllers=new $this->controllers();
		if(isset($outcome[1])){
			if(method_exists($this->controllers,$outcome[1])){
				$this->actions=$outcome[1];
				unset($outcome[1]);
			}
		}
		if($outcome){
			$this->params=$outcome ? array_values($outcome):[];
		}
		//$this->actions="add";
		call_user_func_array([$this->controllers,$this->actions],$this->params);
	}
	function prepareURL(){
		if(isset($_GET['url'])){
			$url=trim($_GET['url'],'');
			$url=explode('/',$url);
			return $url;
		}
	}
}
 ?>