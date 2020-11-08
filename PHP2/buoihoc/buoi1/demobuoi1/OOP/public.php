<?php  
	/**
	 * 
	 */
	class Person
	{
		
		public $name = 'Tung';
		public $age = 30;

		public function getInfo(){
			echo "Tên: ".$this->name;
		}

	}

	$per = new Person();
	echo $per->name."<br>";
	$per->getInfo();


?>