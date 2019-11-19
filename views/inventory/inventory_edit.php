<?php
include '../../helpers/head.php';
include '../../models/inventory_model.php';
include '../../config/session.php';

if(isset($_GET['id'])){
    $inventory = new Inventory();
    $data = $inventory->getProductById($_GET['id']);
}

?>
<div class="container p-5">
    <h1> Craer Producto </h1>
    <form action="../../controllers/inventory_controller.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Producto</label>
                    <input type="text" class="form-control" name="product" value="<?= $data[0]['product'] ?>" aria-describedby="inputGroupPrepend2" required>
                </div>
                <div class="form-group">
                    <label>Cantidad</label>
                    <input type="number" class="form-control" name="quantity" value="<?= $data[0]['quantity'] ?>" aria-describedby="inputGroupPrepend2" required>
                </div>
                <div class="form-group">
                    <label>Proveedor</label>
                    <input type="text" class="form-control" name="provider" value="<?= $data[0]['provider'] ?>" aria-describedby="inputGroupPrepend2" required>
                </div>
                <div class="form-group">
                    <label>Teléfono</label>
                    <input type="number" class="form-control" name="telephone" value="<?= $data[0]['telephone'] ?>" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Descripción</label>
                    <textarea class="form-control" rows="8" name="description" aria-describedby="inputGroupPrepend2" required><?= $data[0]['description'] ?></textarea>
                </div>
                <div class="form-group">
                    <label>Empresa</label>
                    <input type="text" class="form-control" name="company" value="<?= $data[0]['company'] ?>" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="edit" value="<?= $data[0]['id'] ?>">Enviar</button>
    </form>
    <a href="inventory_list.php"> <button type="button" class="btn btn-secondary">Regresar</button> </a>
</div>
<?php
include '../../helpers/footer.php';
?>