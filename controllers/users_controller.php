<?php
    include dirname(__file__,2).'/models/user_model.php';
    session_start();

    $users = new Users();

    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $password = $_POST['password'];
        if($users->login($user, $password)){
            header('location: ../views/dashboard.php');
            $_SESSION['login_user'] = $user;
        } else {
            header('location: ../views/users/login.php?error=1');
        }
    }
?>