<?php 
	/**
	 * 
	 */
	class CategoryModel extends BaseModel
	{
		const TABLE="theloai";
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
	}
 ?>