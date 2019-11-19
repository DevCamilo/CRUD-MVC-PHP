<?php
include '../../helpers/head.php';
include '../../helpers/nav_bar.php';
include '../../config/session.php';

$error = false;
$success = false;

if (isset($_GET['error'])) {
    $error = true;
} else if (isset($_GET['success'])) {
    $success = true;
}

?>
<div class="container p-5">
    <?php if ($success) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Registro guardado extósamente.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>
    <?php if($error) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Fallo al guardar el registro.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>
    <h1> Craer Producto </h1>
    <form action="../../controllers/inventory_controller.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Producto</label>
                    <input type="text" class="form-control" name="product" aria-describedby="inputGroupPrepend2" required>
                </div>
                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="number" class="form-control" name="quantity" aria-describedby="inputGroupPrepend2" required>
                </div>
                <div class="form-group">
                    <label>Proveedor</label>
                    <input type="text" class="form-control" name="provider" aria-describedby="inputGroupPrepend2" required>
                </div>
                <div class="form-group">
                    <label>Teléfono</label>
                    <input type="number" class="form-control" name="telephone" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Descripción</label>
                    <textarea class="form-control" rows="8" name="description" aria-describedby="inputGroupPrepend2" required></textarea>
                </div>
                <div class="form-group">
                    <label>Empresa</label>
                    <input type="text" class="form-control" name="company" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="create">Enviar</button>
    </form>
</div>
<?php
include '../../helpers/footer.php';
?>