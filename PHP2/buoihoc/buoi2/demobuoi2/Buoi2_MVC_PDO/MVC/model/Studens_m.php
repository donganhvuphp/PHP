<?php  
	
	include_once 'config/myConfig.php';
	
	class Member_m extends Connect
	{
		
		function __construct()
		{
			parent::__construct(); // luôn luôn tồn tại $conn kết nối CSDL
		}

		// Viết các hàm truy vấn với CSDL
		public function getStudent(){
			$sql = "SELECT *FROM tbl_student, tbl_faculty WHERE tbl_student.facultys_id = tbl_faculty.id";
			$pre = $this->pdo->prepare($sql); // chuẩn bị thực thi câu lệnh truy vấn
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

	}

?>