<?php
include '../../helpers/head.php';
$error = false;
if(isset($_GET['error'])){
    $error = true;
}

?>
<div align="center">
    <div class="col-md-4 p-5">
        <h1>Ingresar</h1>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <form action="../../controllers/users_controller.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo</label>
                        <input type="email" class="form-control" name="user" aria-describedby="inputGroupPrepend2" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" name="password" class="form-control" aria-describedby="inputGroupPrepend2" required>
                    </div>
                    <br />
                    <button type="submit" class="btn btn-primary btn-block" name="login">Enviar</button>
                    <?php if($error) echo "<br /> <br /><div class='alert alert-danger' role='alert'> Usuario o contraseña invalidos. </div>"; ?>
                </form>
            </div>
        </div>

    </div>

</div>

<?php
include '../../helpers/footer.php'
?>