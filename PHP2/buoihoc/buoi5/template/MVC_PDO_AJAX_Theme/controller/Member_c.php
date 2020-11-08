<?php  
	include_once "model/Member_m.php";

	/**
	 * 
	 */
	class Member_c extends Member_m
	{
		private $mem;

		function __construct()
		{
			$this->mem = new Member_m(); // Tự động chạy cái hàm __construct
		}

	}

?>