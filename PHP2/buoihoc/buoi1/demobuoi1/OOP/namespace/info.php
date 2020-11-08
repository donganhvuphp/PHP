<?php  

	namespace Info;

	class Person
	{
		public $name = "Trần Thủy Tiên";
		public $age = 40;

		public function getInfo(){
			echo $this->name." ".$this->age;
		}

	}
?>