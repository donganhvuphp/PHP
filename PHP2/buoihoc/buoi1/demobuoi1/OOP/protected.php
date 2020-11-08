<?php  

	/**
	 * 
	 */
	class Person
	{

		public $name = 'Tung';
		private $phone = '0989888999';
		protected $age = 30;

	}

	class Info extends Person
	{
		
		public function __construct(){
			//echo "Phone = ".$this->phone;
			echo "Tuổi = ".$this->age;
		}
	}

	$info = new Info();

?>