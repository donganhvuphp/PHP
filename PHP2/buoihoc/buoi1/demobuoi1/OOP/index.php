<?php 

	class Person
	{
		/* Khai báo thuộc tính */
		// Biến động
		var $name = 'Trịnh Khắc Tùng';
		var $age = 30;
		var $gender = true;

		// Hằng
		const phone = '0989888999';

		// Phương thức
		function Go($go){
			return 'Phương tiện đi làm của anh '.$this->name." là:".$go;
		}

		function Work(){
			return "Công việc là: DEV, có số điện thoại: ".self::phone.", phương tiện đi làm là: ".$this->Go('Ô tô!');
		}

	}

	$info = new Person(); // Khởi tạo đối tượng
	echo $info->name."<br>";
	echo $info->gender."<br>";
	echo $info::phone."<br>";;

	echo $info->Go('Xe máy')."<br>";

	echo "<br>".$info->Work()."<br>";

