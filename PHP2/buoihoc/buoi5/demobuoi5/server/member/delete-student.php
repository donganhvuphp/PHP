<?php
	include_once '../../controller/Member_c.php';
	$mem = new Member_c();
	$id = (int)$_POST['id'];
	$students = $mem->delMember($id);
	if ($students) {
		echo "<h1 style='animation-duration: 2s;' class='animate__animated animate__swing'>Delete student success!</h1>";
	}else{
		echo "Error delete student!";
	}
?>