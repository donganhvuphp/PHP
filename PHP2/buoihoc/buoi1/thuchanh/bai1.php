<?php
    class Person
    {
        // khai bao thuoc tinh
        // Bien dong
        var $name = 'Vũ Đông Anh';
        var $age = 20;
        var $gender = false ;

        // Hang so 
        const phone = '0123456789';

        //Phuong thuc 

        function Go($go){
            return " Phương tiện đi làm của anh : ".$this->name." bằng : ".$go ;
        }

        function Work(){
            return "Công việc là : DEV, có số điện thoại : ".self::phone.$this->Go(' Máy Bay ') ;
        }

    }

    $info = new Person(); // khoi tao doi tuong
    echo $info->name."<br>" ;
    echo $info->age."<br>" ;
    echo $info->gender."<br>" ;
    echo $info::phone."<br>" ;
    echo $info->Go('Tên Lửa')."<br>" ;
    echo $info->Work()."<br>" ;

// class Động vật 
class Animal
{ 
    var $name ;
    var $chieuCao;
    var $canNang;
    var $mauLong;
    function setName($name){
        $this->name = $name;
    }
    function getName(){
       return $this->name;
    }
    function setChieuCao($chieuCao){
        $this->chieuCao = $chieuCao;
    }
    function getChieuCao(){
       return $this->chieuCao ;
    }
    function setCanNang($canNang){
        $this->canNang = $canNang;
    }
    function getCanNang(){
       return $this->canNang ;
    }
    function setMauLong($mauLong){
        $this->mauLong = $mauLong;
    }
    function getMauLong(){
       return $this->mauLong ;
    }
    function noiSong($noiSong){
        return "<br>Con : ".$this->getName()." Noi Sống : ".$noiSong ;
    }
    function hienThi($noiSong){
        return "Tên Con vật : ".$this->getName()."<br>"."Chiều cao : ".$this->getChieuCao()." Cân Nặng : ".$this->getCanNang()." Mau Lông :".$this->getMauLong().$this->noiSong($noiSong);
    }
}
$animal = new Animal();
$animal->setName('Voi');
$animal->setChieuCao('100');
$animal->setCanNang('200');
$animal->setMauLong('Vàng');
echo $animal->hienThi('Trên Cạn');
// echo $animal->hienThi('ga','100','300','yellow');


?>