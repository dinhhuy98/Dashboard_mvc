<?php 
	class API_SinhVien extends Controller{
		public function danhSach(){
			$sinhvien = $this->model("SinhVienModel");
			$sv=$sinhvien->getAllSinhVien();
			$arr=[];
			while($row=mysqli_fetch_assoc($sv)){
				array_push($arr,new SinhVien(
								$row["id"],$row["hoten"],$row["quequan"],$row["namsinh"]));
			}
			echo json_encode($arr);
		}
	}

	class SinhVien{
		public $ID;
		public $HOTEN;
		public $NAMSINH;
		public $QUEQUAN;
		public function __construct($id, $hoten, $namsinh, $quequan){
			$this->ID=$id;
			$this->HOTEN=$hoten;
			$this->NAMSINH=$namsinh;
			$this->QUEQUAN=$quequan;
		}
	}
 ?>