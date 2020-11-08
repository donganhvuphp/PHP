<?php  
	
	include_once 'config/myConfig.php';
	
	class Member_m extends Connect
	{

		// public const record = 2;
		
		function __construct()
		{
			parent::__construct(); // luôn luôn tồn tại $conn kết nối CSDL
		}

		// Viết các hàm truy vấn với CSDL
		public function getStudent($pages, $record){

			$from = ($pages * $record) - $record;

			$sql = "SELECT *FROM tbl_faculty, tbl_student WHERE tbl_student.facultys_id = tbl_faculty.id LIMIT $from, $record";
			$pre = $this->pdo->prepare($sql); // chuẩn bị thực thi câu lệnh truy vấn
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		// Lấy thông tin học viên theo id
		public function getStudentID($id){
			$sql = "SELECT *FROM tbl_student WHERE id = :id";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(":id", $id);
			$pre->execute();
			return $pre->fetch(PDO::FETCH_ASSOC);
		}

		// Lấy thông tin khoa
		public function getFacultys(){
			$sql = "SELECT *FROM tbl_faculty";
			$pre = $this->pdo->prepare($sql); // chuẩn bị thực thi câu lệnh truy vấn
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

		// Cập nhật thông tin học viên
		public function updateStudent($id, $facultys_id, $name, $phone, $email, $addres, $gender){
			$sql = "UPDATE tbl_student 
					SET facultys_id = :facultys_id, name = :name, phone = :phone, email = :email, addres = :addres, gender = :gender
					WHERE id = :id";
			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(":id", $id);
			$pre->bindParam(":facultys_id", $facultys_id);
			$pre->bindParam(":name", $name);
			$pre->bindParam(":phone", $phone);
			$pre->bindParam(":email", $email);
			$pre->bindParam(":addres", $addres);
			$pre->bindParam(":gender", $gender);
			$update = $pre->execute();

			if ($update) {
				$_SESSION['noti'] = 1;
			}else{
				echo "Cập nhật thất bại!";
			}
		}

		// Lấy thông tin học viên theo số điện thoại
		public function searchStudents($key){
			$phone = "%".$key."%";

			$sql = "SELECT *FROM tbl_faculty, tbl_student WHERE tbl_student.phone LIKE :key AND tbl_student.facultys_id = tbl_faculty.id";
			$pre = $this->pdo->prepare($sql); // chuẩn bị thực thi câu lệnh truy vấn
			$pre->bindParam(":key", $phone);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
		}

	}

?>