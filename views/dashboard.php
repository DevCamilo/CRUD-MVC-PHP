<?php
include '../helpers/head.php';
include '../config/session.php';
include '../helpers/nav_bar.php';
?>

<div class="container p-5">
    <h1> BIENVENIDO AL DASHBOARD </h1>
    <h3> <?php echo $login_session; ?> </h3>
</div>
<?php
include '../helpers/footer.php';
?>