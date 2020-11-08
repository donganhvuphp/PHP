<?php
    //connect to database
    class Connect 
    {
        private const host = 'localhost' ;
        private const user = 'root';
        private const pass = '';
        private const dbname = 'php0720e2_itpluss';
        protected $conn = null ;

        protected function __construct()
        {
            $this->conn = mysqli_connect(self::host , self::user , self::pass, self::dbname) or die("Can't connect database");
            if($this->conn){
                mysqli_set_charset($this->conn , 'utf8');
            }else{
                echo "Can't connect database!" ;
            }
        }
        //query insert update delete
        protected function inUpDeQuery($sql){
            mysqli_query($this->conn ,$sql);
        }
        //query select
        protected function selectQuery($sql){
           $result = array();
           $query = mysqli_query($this->conn ,$sql);
           while($row = mysqli_fetch_assoc($query)){
            $result[] = $row ;
           }
           return $result;
        }

    }
?>