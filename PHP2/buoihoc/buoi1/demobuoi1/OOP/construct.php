<?php  
	/**
	 * 
	 */
	class Personss
	{
		public $name = "Tung";

		public function __construct(){
			echo "Tên bạn là: ".$this->name;
		}
		
	}

	$per = new Personss();
?>