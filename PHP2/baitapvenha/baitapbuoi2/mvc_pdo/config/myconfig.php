<?php
    class Connect 
    {
        private $userName = 'root' ;
        private $pass     = '';
        protected $conn = null ;
        function __construct()
        {
            $this->conn = new PDO('mysql:host=localhost;dbname=php0720e2_itpluss' , $this->userName , $this->pass);
            $this->conn->query("SET NAMES utf8");
        }
    }
?>