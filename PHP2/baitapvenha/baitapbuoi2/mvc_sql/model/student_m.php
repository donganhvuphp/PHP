<?php
    //model student
    include_once 'config/myconfig.php';
    class student_m extends Connect
    {
        function __construct()
        {
            parent::__construct();
        }
        protected function getStudent(){
            $sql = "SELECT tbl_student.id AS 'idstd' , tbl_student.facultys_id , tbl_student.name , tbl_student.phone , tbl_student.email, tbl_student.addres, tbl_student.gender ,tbl_faculty.id AS 'idfaculty' , tbl_faculty.title FROM tbl_student , tbl_faculty WHERE tbl_student.facultys_id = tbl_faculty.id";
            return $this->selectQuery($sql) ;
        }

        protected function getFaculty(){
            $sql = "SELECT `id`, `title`, `stt` FROM `tbl_faculty` WHERE `stt` = 1";
            return $this->selectQuery($sql);
        }

        protected function insertStd(){
            if(isset($_POST['add_member'])){
                $facultys_id = $_POST['faculty'];
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['e_mail'];
                $addres = $_POST['addres'];
                $gender = $_POST['gender'];
                $sql = "INSERT INTO `tbl_student`(`facultys_id`, `name`, `phone`, `email`, `addres`, `gender`) VALUES ('$facultys_id','$name','$phone','$email','$addres','$gender')";
                $this->inUpDeQuery($sql);
                header('Location:index.php?page=trang_chu');
            }
        }
        protected function getStudentUpdate(){
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $sql = "SELECT tbl_student.id AS 'idstd', tbl_student.facultys_id , tbl_student.name , tbl_student.phone , tbl_student.email, tbl_student.addres, tbl_student.gender ,tbl_faculty.id AS 'idfaculty' , tbl_faculty.title FROM tbl_student , tbl_faculty WHERE tbl_student.facultys_id = tbl_faculty.id AND tbl_student.id = $id";
                return $this->selectQuery($sql);
            }
        }
        protected function updateStd(){
            if(isset($_POST['update_member'])){
                $facultys_id = $_POST['faculty'];
                $id = $_POST['id'];
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['e_mail'];
                $addres = $_POST['addres'];
                $gender = $_POST['gender'];
                $sql = "UPDATE `tbl_student` SET `facultys_id`='$facultys_id',`name`='$name',`phone`='$phone' ,`email`= '$email',`addres`='$addres',`gender`= '$gender' WHERE `id` = $id";
                $this->inUpDeQuery($sql);
                header('Location:index.php?page=trang_chu');
            }
        }
        protected function delStd_m(){
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $sql = "DELETE FROM `tbl_student` WHERE id = $id";
                $this->inUpDeQuery($sql);
                header("Location:index.php?page=trang_chu");
            }
        }
    }
?>