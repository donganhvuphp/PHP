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
		//lấy ra sinh vien
		protected function getStudents_m(){
			$sql = "SELECT * FROM tbl_student";
            $result =  $this->pdo->prepare($sql);
            $result->execute();
            return $result->fetchAll(PDO::FETCH_ASSOC);
		}
		protected function searchStudents_m($phone){
			$sql = "SELECT * FROM tbl_student WHERE phone LIKE '%$phone%'";
            $result =  $this->pdo->prepare($sql);
            $result->execute();
            return $result->fetchAll(PDO::FETCH_ASSOC);
		}
		protected function getEditStudents_m($id){
			$sql = "SELECT * FROM tbl_student WHERE id = :id";
			$result =  $this->pdo->prepare($sql);
			$result->bindParam(':id',$id);
            $result->execute();
            return $result->fetchAll(PDO::FETCH_ASSOC);
		}
		// lấy ra khoa
		protected function getFaculty_m(){
			$sql = "SELECT * FROM tbl_faculty";
            $result =  $this->pdo->prepare($sql);
            $result->execute();
            return $result->fetchAll(PDO::FETCH_ASSOC);
		}
		// xóa sinh vien
		protected function delStudent_m($id){
                $sql = "DELETE FROM tbl_student WHERE id = :id";
                $result = $this->pdo->prepare($sql);
                $result->bindParam(':id', $id);
				return $result->execute();	
		}
		// thêm sinh vien
		protected function addStudent_m($name,$faculty,$phone,$email,$addres,$gender){
			$sql = "INSERT INTO tbl_student(facultys_id, name, phone, email, addres, gender) VALUES(:facultys_id, :name, :phone, :email, :addres, :gender)";
			$result = $this->pdo->prepare($sql);
			$result->bindParam(':facultys_id' ,$faculty);
			$result->bindParam(':name' ,$name);
			$result->bindParam(':phone' ,$phone);
			$result->bindParam(':email' ,$email);
			$result->bindParam(':addres' ,$addres);
			$result->bindParam(':gender' ,$gender);
		    return $result->execute();
		}
		protected function updateStudent_m($id,$name,$facultys_id,$phone,$email ,$addres,$gender){
                $sql = "UPDATE `tbl_student` SET `facultys_id`= :facultys_id,`name`= :name,`phone`=:phone ,`email`= :email,`addres`=:addres,`gender`= :gender WHERE `id` = :id";
                $result = $this->pdo->prepare($sql);
                $result->bindParam(':facultys_id' ,$facultys_id);
                $result->bindParam(':id' ,$id);
                $result->bindParam(':name' ,$name);
                $result->bindParam(':phone' ,$phone);
                $result->bindParam(':email' ,$email);
                $result->bindParam(':addres' ,$addres);
                $result->bindParam(':gender' ,$gender);
                return $result->execute();
        }
                 
        

	}

?>