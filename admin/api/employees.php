<?php
    class Employee{

        // Connection
        private $conn;

        // Table
       // private $db_table = "Employee";
       
        private $db_table = "register";

        // Columns
        public $id;
        public $username;
        public $email;
        public $password;
        public $usertype;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // GET ALL
        public function getEmployees(){
            $sqlQuery = "SELECT id, username, email, password, usertype FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }


    }
?>

