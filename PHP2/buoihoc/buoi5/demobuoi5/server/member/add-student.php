<?php  
	include_once '../../controller/Member_c.php';
	$mem = new Member_c();
	$name 		= $_POST['name'];
	$phone 		= $_POST['phone'];
	$email 		= $_POST['email'];
	$addres 	= $_POST['addres'];
	$gender 	= $_POST['gender'];
	$faculty 	= $_POST['faculty'];

	// echo $name. " ".$phone. " ".$email. " ".$addres. " ".$gender. " ".$faculty;
	$add = $mem->addStudent($faculty, $name, $phone, $email, $addres, $gender);

	if ($add) {
		echo "<h1 style='animation-duration: 2s;' class='animate__animated animate__swing'>Add student success!</h1>";
	}else{
		echo "Add student error!";
	}
?>