<?php
    include_once 'config/myconfig.php';

    class student_m extends Connect
    {
        function __construct()
        {
            parent::__construct();            
        }
        protected function getStudent_m(){
            $sql = "SELECT tbl_student.id AS 'idstd' , tbl_student.facultys_id , tbl_student.name , tbl_student.phone , tbl_student.email, tbl_student.addres, tbl_student.gender ,tbl_faculty.id AS 'idfaculty' , tbl_faculty.title FROM tbl_student , tbl_faculty WHERE tbl_student.facultys_id = tbl_faculty.id";
            $result =  $this->conn->prepare($sql);
            $result->execute();
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        protected function getFaculty(){
            $sql = "SELECT * FROM tbl_faculty";
            $result = $this->conn->prepare($sql);
            $result->execute();
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        protected function addStudent_m(){
            if(isset($_POST['add_member'])){
                $name = $_POST['name'];
                $facultys_id = $_POST['faculty'];
                $phone = $_POST['phone'];
                $email = $_POST['e_mail'];
                $addres = $_POST['addres'];
                $gender = $_POST['gender'];
                $sql = "INSERT INTO tbl_student(facultys_id, name, phone, email, addres, gender) VALUES(:facultys_id, :name, :phone, :email, :addres, :gender)";
                $result = $this->conn->prepare($sql);
                $result->bindParam(':facultys_id' ,$facultys_id);
                $result->bindParam(':name' ,$name);
                $result->bindParam(':phone' ,$phone);
                $result->bindParam(':email' ,$email);
                $result->bindParam(':addres' ,$addres);
                $result->bindParam(':gender' ,$gender);
                $result->execute();
                header('Location:index.php?page=trang_chu');
            }
            
        }
        protected function delStudent_m(){
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $sql = "DELETE FROM tbl_student WHERE id = :id";
                $result = $this->conn->prepare($sql);
                $result->bindParam(':id', $id);
                $result->execute();
                header('Location:index.php?page=trang_chu');
            }
        }
        protected function getStudentEdit_m(){
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $sql = "SELECT tbl_student.id AS 'idstd', tbl_student.facultys_id , tbl_student.name , tbl_student.phone , tbl_student.email, tbl_student.addres, tbl_student.gender ,tbl_faculty.id AS 'idfaculty' , tbl_faculty.title FROM tbl_student , tbl_faculty WHERE tbl_student.facultys_id = tbl_faculty.id AND tbl_student.id = :id";
                $result = $this->conn->prepare($sql) ;
                $result->bindParam(':id' , $id);
                $result->execute();
                return $result->fetchAll(PDO::FETCH_ASSOC);
            }
        }
        protected function editStudent_m(){
            if(isset($_POST['update_member'])){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $facultys_id = $_POST['faculty'];
                $phone = $_POST['phone'];
                $email = $_POST['e_mail'];
                $addres = $_POST['addres'];
                $gender = $_POST['gender'];
                $sql = "UPDATE `tbl_student` SET `facultys_id`= :facultys_id,`name`= :name,`phone`=:phone ,`email`= :email,`addres`=:addres,`gender`= :gender WHERE `id` = :id";
                $result = $this->conn->prepare($sql);
                $result->bindParam(':facultys_id' ,$facultys_id);
                $result->bindParam(':id' ,$id);
                $result->bindParam(':name' ,$name);
                $result->bindParam(':phone' ,$phone);
                $result->bindParam(':email' ,$email);
                $result->bindParam(':addres' ,$addres);
                $result->bindParam(':gender' ,$gender);
                $result->execute();
                header('Location:index.php?page=trang_chu');
            }
                 
        }
    }
?>