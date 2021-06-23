
<?php 
class UserModel extends BaseModel
{
	const TABLE ='user';
	public function getAll($select=['*'],$orderBy=[]){
	  return $this->all(self::TABLE,$select,$orderBy);
	}
	public function findById($id){
		return $this->find(self::TABLE, $id);
	}
	public function login($username, $password){
		return $this->loginUser(self::TABLE, $username,$password);
	}
	public function store($data=[]){
		$this->create(self::TABLE,$data);
	}
	public function update($id, $data){
		$this->updateNew(self::TABLE,$id,$data);
	}
	public function destroy($id){
		$this->delete(self::TABLE,$id);
	}
	public function getusername($username){
		$sql="SELECT * FROM user WHERE useName='${username}' ";
		$query=$this->_query($sql);
		$row = mysqli_fetch_array($query);
		return $row;
	}
}
 ?>