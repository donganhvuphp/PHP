<?php  

	class Person
	{
		
		public $name = 'Tung';
		private $age;

		public function setAge($age){
			$this->age = $age;
		}

		public function getAge(){
			echo 'Tuổi = '.$this->age;
		}

	}

	$per = new Person();
	$per->setAge(15);
	$per->getAge();


?>