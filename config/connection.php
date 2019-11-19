<?php
class Connection
{
   private $host;
   private $user;
   private $password;
   private $dataBase;

   public function __construct()
   {
      $this->host = "localhost";
      $this->user = "root";
      $this->password = "";
      $this->dataBase = "php_mvc";
   }
   public function connect()
   {
      $enlace = mysqli_connect($this->host, $this->user, $this->password, $this->dataBase);
      if ($enlace) {
         echo "<script> console.log('Conexión Exitósa'); </script>";
      } else {
         die('Error de Conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
      }
      return ($enlace);
   }
}
