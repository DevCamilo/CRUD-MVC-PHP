<?php
    include dirname(__FILE__,2)."/config/connection.php";

    class Users
    {
        private $conn;
        private $uri;

        function __construct()
        {
            $this->conn = new Connection();
            $this->uri = $this->conn->connect();    
        }

        public function login($user, $password)
        {
            $query = "SELECT id FROM users WHERE userName = '$user' AND password = '$password'";
            $result = mysqli_query($this->uri, $query);
            if (mysqli_num_rows($result) == 1) {
                return true;
            } else {
                return false;
            }
        }
    }
?>