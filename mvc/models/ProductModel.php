
<?php 
class ProductModel extends BaseModel
{
	const TABLE ='sanpham';
	public function getAll($select=['*'],$orderBy=[]){
	  return $this->all(self::TABLE,$select,$orderBy);
	}
	public function findById($id){
		return $this->find(self::TABLE, $id);
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
	public function searchByName($name_search){
		$sql="SELECT * FROM sanpham WHERE name LIKE '%$name_search%' ";
		$query=$this->_query($sql);
		$data=[];
		while ($row=mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}
		return $data;

	}
	public function getcategory($category){
		$sql="SELECT * FROM sanpham WHERE masp='${category}' ";
		$query=$this->_query($sql);
		$data=[];
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}
		return $data;
		
	}
	public function getcategory_product($category){
		$sql="SELECT * FROM sanpham WHERE theloai='${category}' ";
		$query=$this->_query($sql);
		$data=[];
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}
		return $data;
		
	}
	public function gettop3_product($category,$sort){
		$sql="SELECT * FROM sanpham WHERE theloai='${category}' ORDER BY '${sort}' DESC LIMIT 3 ";
		$query=$this->_query($sql);
		$data=[];
		while ($row = mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}
		return $data;
		
	}
	

}
 ?>