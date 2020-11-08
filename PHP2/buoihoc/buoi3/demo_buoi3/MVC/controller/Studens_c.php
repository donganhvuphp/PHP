<?php  

	include_once 'model/Studens_m.php';

	class Member_c extends Member_m
	{
		
		private $student;

		function __construct()
		{
			$this->student = new Member_m();
		}

		public function student(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}else{
				$method = 'index';
			}

			switch ($method) {
				case 'index':

					if (isset($_GET['pages'])) {
						$pages = (int)$_GET['pages'];
					}else{
						$pages = 1;
					}

					if (isset($_POST['submit'])) {
						$key = $_POST['key'];
						$rs = $this->student->searchStudents($key);
					}else{
						$record = 2;
						$rs = $this->student->getStudent($pages, $record);
						$count = count($rs);
						$datePage = ceil($count / $record);
					}
					
					include_once 'views/list_member.php';
					break;

				case 'edit':
					if (isset($_GET['id'])) {
						$id = (int)$_GET['id'];
						$students = $this->student->getStudentID($id);
						$faculty = $this->student->getFacultys();

						if (isset($_POST['update_member'])) {
							$name = $_POST['name'];
							$facultys_id = $_POST['faculty'];
							$phone = $_POST['phone'];
							$email = $_POST['e_mail'];
							$addres = $_POST['addres'];
							$gender = $_POST['gender'];

							$this->student->updateStudent($id, $facultys_id, $name, $phone, $email, $addres, $gender);
							header("Location: index.php");
						}


						include_once 'views/edit_member.php';
					}else{
						header("Location: index.php");
					}
					
					break;
				
				default:
					echo "<h4 style='color: red;'>ERROR 404, trang không tồn tại <span><a href='index.php' style='color: blue;'>Quay lại</a></span></h4>";
					break;
			}
		}

	}
?>