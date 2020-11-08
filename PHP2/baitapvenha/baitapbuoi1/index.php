<?php
    namespace geometry;

    class hinh
    {
        protected $a ;
        protected $b ;
    }

    class tinhToan extends hinh
    {
        public function setCanh($a, $b){
            $this->a = $a;
            $this->b = $b;
        }

        public function chuVi(){
            if($this->a == $this->b){
                echo "Tinh chu vi hình vuông = ".$this->a * 4;
            }else{
                echo "Tinh chu vi hình chữ nhật = ".($this->a + $this->b) * 2;
            }
        }
        public function dienTich(){
            if($this->a == $this->b){
                echo "Tinh dien tich hình vuống = ".pow($this->a,2);
            }else{
                echo "Tinh dien tich hình chữ nhật = ".$this->a * $this->b;
            }
        }

    }

    $tinhToan = new tinhToan();
    $tinhToan->setCanh(10,5);
    $tinhToan->chuVi();
    echo "<br>";
    $tinhToan->dienTich();

?>