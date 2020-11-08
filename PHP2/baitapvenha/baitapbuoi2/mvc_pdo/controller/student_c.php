<?php
    include_once 'model/student_m.php';

    class student_c extends student_m 
    {
        private $student ;

        function __construct()
        {
            $this->student = new student_m();
        }

        public function getStudent_c(){
            $listStudent = $this->student->getStudent_m();
            include_once "views/list_member.php";
        }

        public function addStudent_c(){
            $listFaculty = $this->student->getFaculty();
            include_once "views/add_member.php";
            $this->student->addStudent_m();
        }
        public function delStudent_c(){
            include_once "views/del_member.php";
            $this->student->delStudent_m();
        }
        public function editStudent_c(){
            $info = $this->student->getStudentEdit_m();
            $listFaculty = $this->student->getFaculty();
            include_once "views/edit_member.php";
            $this->student->editStudent_m();
        }
    }
    
?>