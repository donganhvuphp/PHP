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

		public function getStudent_c(){
			return $this->mem->getStudents_m();
		}

		public function searchStudents_c($phone){
			return $this->mem->searchStudents_m($phone);
		}
		public function delStudent_c($id){
			return $this->mem->delStudent_m($id);
		}

		public function getFacultys_c(){	
			return $this->mem->getFaculty_m();
		}

		public function addStudent_c($name,$faculty,$phone,$email,$addres,$gender){
			return $this->mem->addStudent_m($name,$faculty,$phone,$email,$addres,$gender);
		}

		public function getEditStudents_c($id){
			return $this->mem->getEditStudents_m($id);
		}
		
		public function updateStudent_c($id,$name,$facultys_id,$phone,$email ,$addres,$gender){
			return $this->mem->updateStudent_m($id,$name,$facultys_id,$phone,$email ,$addres,$gender);
		}

	}

?>