<?php
    class Connect
    {
        private const host   = 'localhost';
        private const user   = 'root';
        private const pass   = '';
        private const dbname = 'php0720e2_itpluss';
        protected $conn = null;
        function __construct()
        {
            $this->conn = mysqli_connect(self::host , self::user , self::pass , self::dbname) or die("Can't connect database!");
            if($this->conn){
                mysqli_set_charset($this->conn , 'utf8');
            }else{
                echo "Can't connect database!";
            }
        }
    }
    // $conn = new Connect();
?>