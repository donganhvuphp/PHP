<?php
    include_once 'model/student_m.php';
    class Member_c extends Member_m
    {
        private $student;

        function __construct()
        {
            $this->student = new Member_m();
        }

        public function student(){
            $student = $this->student->getStudent();
            include_once 'views/list_member.php';

        }
    }
?>