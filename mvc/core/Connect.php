<?php 
	class Connect
	{
		function call_models($models)
		{
			require_once './mvc/models/'.$models.'.php';
			return new $models;
		}
		function call_views($views,$data=[])
		{
			require_once './mvc/views/'.$views.'.php';
		}
	}
 ?>
