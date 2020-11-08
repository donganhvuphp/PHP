<?php  

	class Animal 
	{
		var $height; 
		var $weight; 
		var $color; 
		var $name;

		function setProperty($name, $height, $weight, $color){
			$this->name = $name;
			$this->height = $height;
			$this->weight = $weight;
			$this->color = $color;
		}

		function live($live){
			return 'Nơi sống: '.$live;
		}

		function Show($live){
			echo $this->name.", chiều cao: ".$this->height.", cân nặng: ".$this->weight.", màu lông: ".$this->color.', nơi sống: '.$this->live($live);
		}
	}

	$animal = new Animal();
	$animal->setProperty('Con huơu', '7m', '250kg', 'vàng');
	$animal->Show('trên cạn!');
?>