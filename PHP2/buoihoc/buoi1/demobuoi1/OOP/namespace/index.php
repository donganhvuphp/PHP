<?php  
	include_once 'data.php';
	include_once 'info.php';

	// Gọi namespace sử dụng new
	/* $info = new Info\Person();
	$data = new Data\Person();

	echo $info->getInfo()."<br>";
	echo $data->getInfo()."<br>"; */

	// Gọi namespace sử dụng use

	// use Data as data;
	// use Info as info;

	use Data as data;
	use Info as info;

	
	$data = new data\Person();
	$data->getInfo();

	$info = new info\Person();
	$info->getInfo();


	

?>