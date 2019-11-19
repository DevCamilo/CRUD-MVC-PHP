<?php 
    include dirname(__file__,2).'/models/inventory_model.php';

    $inventory = new Inventory();

    if(isset($_POST['create'])){
        if($inventory->createProduct($_POST)){
            header('location: ../views/inventory/inventory_create.php?success=true');
        } else {
            header('location: ../views/inventory/inventory_create.php?error=true');
        }
    } else if(isset($_POST['edit'])){
        if ($inventory->updateProduct($_POST)) {
            header('location: ../views/inventory/inventory_list.php?success=true&type=edit');            
        } else{
            header('location: ../views/inventory/inventory_list.php?error=true&type=edit');
        }
    } else if(isset($_GET['delete'])){
        if ($inventory->deleteProduct($_GET['id'])) {
            header('location: ../views/inventory/inventory_list.php?success=true&type=delete');               
        } else {
            header('location: ../views/inventory/inventory_list.php?error=true&type=delete');
        }
    }


?>