<?php  

	/**
	 * 
	 */
	include_once 'config/myConfig.php';

	class Member_m extends Connect
	{
		
		function __construct(){
			parent::__construct(); // Gọi hàm __construct bên myConfig, luôn tồn tại $pdo để kết nối tới CSDL
		}

	}

?>