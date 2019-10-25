<?php 
	class Home extends Controller{
		function sayhi(){
			$teo = $this->model("SinhVienModel");
			echo $teo->getSinhVien();
		}
		function show($a=1){
			//echo "Home show";
			$teo = $this->model("SinhVienModel");
			$a2 = $teo->pow2($a);
			//echo $a2;
			$this->view("aodep",["number"=>$a2,
								"color"=>"red",
								"page"=>"contract",
								"SV"=>$teo->getAllSinhVien()]);
		}
	}
 ?>