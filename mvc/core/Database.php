<?php 
class Database
{
	const HOST='localhost';
	const USERNAME='id17064063_user';
	const PASSWORD='123456789Chien_2105';
	const DB_NAME='id17064063_web_didong';
	private $connect;
	public function connect(){
		$this->connect=mysqli_connect(self::HOST,self::USERNAME,self::PASSWORD,self::DB_NAME);
		mysqli_set_charset($this->connect,"utf8");
		if(mysqli_connect_errno()===0){
			return $this->connect;
		}
		return false;
	}

}
 ?>