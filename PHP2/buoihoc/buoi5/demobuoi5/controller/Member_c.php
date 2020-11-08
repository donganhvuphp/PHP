<?php  
	include_once "../../model/Member_m.php";

	/**
	 * 
	 */
	class Member_c extends Member_m
	{
		private $mem;

		function __construct()
		{
			$this->mem = new Member_m(); // Tự động chạy cái hàm __construct
		}

		public function getStudents(){
			return $this->mem->getStudents();
		}

		public function delMember($id){
			return $this->mem->delMember($id);
		}

		// Lấy thông tin khoa
		public function getFacultys(){
			return $this->mem->getFacultys();
		}

		public function addStudent($facultys_id, $name, $phone, $email, $addres, $gender)
		{
			return $this->mem->addStudent($facultys_id, $name, $phone, $email, $addres, $gender);
		}

	}

?>