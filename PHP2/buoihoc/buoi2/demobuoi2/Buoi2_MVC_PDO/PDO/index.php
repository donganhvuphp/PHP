<?php  
	// Kết nối CSDL
	$dns = 'mysql:host=localhost;dbname=php0720e2_itplus';
	$user = 'root';
	$pass = '';
	try {
		$pdo = new PDO($dns, $user, $pass);
		$pdo->query("SET NAMES utf8");
	} catch (PDOException $e) {
		echo $e->getMessage();
		exit();
	}

	// Cách 1: Hiển thị, lấy thông tin học viên
	$sql = "SELECT *FROM tbl_student";
	foreach ($pdo->query($sql) as $value) {
		echo $value['addres']." ";
	}

	// Cách 2:
	$sqlFaculty = "SELECT *FROM tbl_faculty";
	$pre = $pdo->prepare($sqlFaculty); // chuẩn bị thực thi câu lệnh truy vấn
	$pre->execute();
	$result = $pre->fetchAll(PDO::FETCH_ASSOC);

	// Tìm học viên có id = 6;
	$id = 6;
	$sql2 = "SELECT *FROM tbl_student WHERE id = :id";
	$pre2 = $pdo->prepare($sql2);
	$pre2->bindParam(':id', $id);
	$pre2->execute();
	$result2 = $pre2->fetchAll(PDO::FETCH_ASSOC);

	echo "<pre>";
	print_r($result2);
	echo "</pre>";

	// Thêm mới học viên
	$facultys_id = 3;
	$name        = 'Cao Văn Nam';
	$phone       = '0989888999';
	$email       = 'vannam@gmail.com';
	$addres      = 'Hà Trung';
	$gender      = '1';

	$sql3 = "INSERT INTO tbl_student(facultys_id, name, phone, email, addres, gender) VALUES(:facultys_id, :name, :phone, :email, :addres, :gender)";
	$pre3 = $pdo->prepare($sql3);
	$pre3->bindParam(':facultys_id', $facultys_id);
	$pre3->bindParam(':name', $name);
	$pre3->bindParam(':phone', $phone);
	$pre3->bindParam(':email', $email);
	$pre3->bindParam(':addres', $addres);
	$pre3->bindParam(':gender', $gender);

	$add = $pre3->execute();
	if($add){
		echo "Them moi thanh cong!";
	}
	
?>