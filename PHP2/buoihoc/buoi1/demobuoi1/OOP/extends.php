<?php  
	/** Con huou: chieu cao, can nang, mau long
		con chó: can nang, mau long
	 * 
	 */
	class Animal
	{
		public $wight;
		public $color;

		function setProperty($weight, $color){
			$this->weight = $weight;
			$this->color = $color;
		}

		public function getNoti(){
			echo "Đưa ra thông báo gì đó!";
		}
		
	}

	class Deer extends Animal
	{
		public $height = '7m';

		function getProperty(){
			echo $this->weight." ".$this->color;
		}

		public function showNoti(){
			parent::getNoti();
		}
	}

	$deer = new Deer();
	$deer->showNoti();


	die();
	$deer->setProperty('7m', 'màu vàng');
	$deer->getProperty();


?>