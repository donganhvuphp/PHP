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
			$rs = $this->student->getStudent();
			
			include_once 'views/list_member.php';
		}

	}
?>