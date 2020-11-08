<?php  

	/**
	 * 
	 */
	include_once '../../config/myConfig.php';

	class Member_m extends Connect
	{
		
		function __construct(){
			parent::__construct(); // Gọi hàm __construct bên myConfig, luôn tồn tại $pdo để kết nối tới CSDL
		}

		public function getStudents(){
			$sql = "SELECT *FROM tbl_student";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		public function delMember($id){
			$sql = "DELETE FROM tbl_student WHERE id = :id";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':id', $id);
			return $pre->execute();
		}

		// Lấy thông tin khoa
		public function getFacultys(){
			$sql = "SELECT *FROM tbl_faculty";
			$pre = $this->pdo->prepare($sql); // chuẩn bị thực thi câu lệnh truy vấn
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		// Thêm mới
		public function addStudent($facultys_id, $name, $phone, $email, $addres, $gender)
		{
			$sql = "INSERT INTO tbl_student(facultys_id, name, phone, email, addres, gender) 
					VALUES(:facultys_id, :name, :phone, :email, :addres, :gender)";

			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(":facultys_id", $facultys_id);
			$pre->bindParam(":name", $name);
			$pre->bindParam(":phone", $phone);
			$pre->bindParam(":email", $email);
			$pre->bindParam(":addres", $addres);
			$pre->bindParam(":gender", $gender);
			return $pre->execute();
		}

	}

?>