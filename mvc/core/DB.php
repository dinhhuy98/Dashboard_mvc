<?php 
	class DB{
		public $conn="";
		protected $servername="localhost";
		protected $username="root";
		protected $password="";
		protected $dbname="quanlythanhvien";

		function __construct(){
			$this->conn=mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
			mysqli_set_charset($this->conn,"utf8");
			
		}
	}
 ?>