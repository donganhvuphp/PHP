<?php
    class className
    {
        public $name = "Đông Anh";
        private $age = 20;

        public function getInfo(){
            return "Tên : ".$this->name." Tuổi :".$this->age;
        }
    }

    $info = new className();
    // echo $info->age;
    echo $info->getInfo();
?>