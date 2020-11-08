<?php  

	namespace Data;

	class Person
	{
		public $name = "Trịnh Khắc Tùng";
		public $age = 30;

		public function getInfo(){
			echo $this->name." ".$this->age;
		}

	}
?>