<?php
    include_once 'model/student_m.php';

    //xuly 
    class student_c extends student_m
    {
        private $student ;

        function __construct()
        {
            $this->student = new student_m();
        }

        public function student(){
            $listStudent =  $this->student->getStudent();
            include_once 'views/list_member.php';
        }
        //insert
        public function addStd(){
            $listFaculty = $this->student->getFaculty();
            include_once 'views/add_member.php';
            $this->student->insertStd();
        }
        //update
        public function updateInfoStd(){
            $info = $this->student->getStudentUpdate();
            $listFaculty = $this->student->getFaculty();
            include_once 'views/edit_member.php';
            $this->student->updateStd();
        }
        //delete
        public function delStd_c(){
            include_once 'views/del_member.php';
            $this->student->delStd_m();
        }

    }
?>