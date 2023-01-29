<?php
    class DB{
        public $con;
        public $severname = "localhost";
        public $username = "root";
        public $password = "";
        public $dbname = "csdldongho";

        function __construct() {
            $this->con = mysqli_connect($this->severname, $this->username, $this->password, $this->dbname);
            mysqli_select_db($this->con, $this->dbname);
            //model là ng gọi datbabse
        }
        public function __destruct(){
            $this->con->close();
        }
    }
?>