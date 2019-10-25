<?php 
	class SinhVienModel extends DB{
		public function getSinhVien(){
			return "sv a";
		}
		public function pow2($a){
			return $a*$a;
		}
		public function getAllSinhVien(){
			$query = "SELECT * FROM thanhvien";
			return mysqli_query($this->conn,$query);
		}
	}
 ?>