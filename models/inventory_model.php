<?php 
    include dirname(__FILE__,2)."/config/connection.php";

    class Inventory
    {
        private $conn;
        private $uri;

        function __construct()
        {
            $this->conn = new Connection();
            $this->uri = $this->conn->connect();
        }

        public function createProduct($data){
            $query = "INSERT INTO inventary (product, quantity, provider, telephone, description, company) VALUES ('".$data['product']."',".$data['quantity'].",'".$data['provider']."','".$data['telephone']."','".$data['description']."','".$data['company']."')";
            $result = mysqli_query($this->uri, $query);            
            if ($result) {
                return true;
            } else {
                return false;
            }
        }

        public function getProducts(){
            $query = "SELECT * FROM inventary";
            $result = mysqli_query($this->uri, $query);
            $data = array();
            while($data[] = mysqli_fetch_assoc($result));
            array_pop($data);
            return $data;
        }

        public function getProductById($id){
            $query = "SELECT * FROM inventary WHERE id = $id";
            $result = mysqli_query($this->uri, $query);
            while ($data[] = mysqli_fetch_assoc($result));
            array_pop($data);
            return $data;
        }

        public function updateProduct($data){
            $query = "UPDATE inventary SET product = '". $data['product'] ."', quantity = ". $data['quantity'] . ", provider = '". $data['provider'] ."', telephone = '". $data['telephone'] ."', description = '". $data['description'] . "', company = '". $data['company'] ."' WHERE id = ". $data['edit'];
            $result = mysqli_query($this->uri, $query);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }

        public function deleteProduct($id){
            $query = "DELETE FROM inventary WHERE id = $id";
            $result = mysqli_query($this->uri, $query);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
    }
?>