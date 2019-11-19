<?php
include '../../helpers/head.php';
include '../../helpers/nav_bar.php';
include '../../models/inventory_model.php';
include '../../config/session.php';

$success = false;
$error = false;
$type = "";
if (isset($_GET['error']) && $_GET['type'] == "edit") {
    $error = true;
    $type = "edit";
} else if (isset($_GET['success']) && $_GET['type'] == "edit") {
    $success = true;
    $type = "edit";
} else if(isset($_GET['error']) && $_GET['type'] == "delete"){
    $error = true;
    $type = "delete";
} else if(isset($_GET['success']) && $_GET['type'] == "delete"){
    $success = true;
    $type = "delete";
}
$inventories = new Inventory();
$data = $inventories->getProducts();
?>

<div class="container p-5">
    <?php if ($success && $type == "edit") { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Registro editado extósamente.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>
    <?php if ($error && $type == "edit") { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Fallo al editar el registro.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>
    <?php if ($success && $type == "delete") { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Registro eliminado extósamente.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>
    <?php if ($error && $type == "delete") { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Fallo al eliminar el registro.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>
    <h1> Lista de Productos </h1>
    <table class="table table-striped">
        <thead>
            <tr class="table-primary">
                <th scope="col">id</th>
                <th scope="col">Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Proveedor</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Descripción</th>
                <th scope="col">Compañía</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $column => $value) {
                ?>
                <tr>
                    <th scope="row"> <?= $value['id'] ?> </th>
                    <td> <?= $value['product'] ?> </td>
                    <td> <?= $value['quantity'] ?> </td>
                    <td> <?= $value['provider'] ?> </td>
                    <td> <?= $value['telephone'] ?> </td>
                    <td> <?= $value['description'] ?> </td>
                    <td> <?= $value['company'] ?> </td>
                    <td><a href="inventory_edit.php?id=<?= $value['id'] ?>">
                            <button type="button" class="btn btn-success">
                                Editar
                            </button>
                        </a>
                    </td>
                    <td> <a href="../../controllers/inventory_controller.php?delete=true&id=<?= $value['id'] ?>">
                            <button type="button" class="btn btn-danger">
                                Eliminar
                            </button>
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>


<?php
include '../../helpers/footer.php';
?>