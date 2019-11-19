<?php
   include_once 'connection.php';
   session_start();
   $db = new Connection();
   $user_check = $_SESSION['login_user'];
   $res_sql = mysqli_query($db->connect(),"SELECT name FROM users WHERE userName = '$user_check' ");
   $row = mysqli_fetch_array($res_sql,MYSQLI_ASSOC);
   $login_session = $row['name'];
   if(!isset($_SESSION['login_user'])){
      header("location: http://localhost/PHP-MVC/views/users/login.php");
      die();
   }
?>