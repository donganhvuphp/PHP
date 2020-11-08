<?php
    include_once 'config/myconfig.php';

    class Member_m extends Connect
    {
        function __construct()
        {
            parent::__construct(); // luôn luôn tồn tại connect kết nối cơ sở dữ liệu
        }

        public function getStudent(){
            $sql ="SELECT * FROM `tbl_student`, `tbl_faculty` WHERE tbl_student.facultys_id = tbl_faculty.id";
            $result = mysqli_query($this->conn , $sql) ;
            $list = array();
            while($row = mysqli_fetch_assoc($result)){
                $list[] = $row;
            }
            return $list; 
        }
    }

?>