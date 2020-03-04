<?php
    $action="catalog";
    $catalogObj= new CATALOG();
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "catalog":
                $listCatalog=$catalogObj->getAllCatalog();
                include './../view/admin/catalog/catalog.php';
                break;

            case "delete":
                if (isset($_GET['idCatalog'])) {
                    $idCatalog=$_GET['idCatalog'];
                    $catalogObj->deleteCatalog($idCatalog);
                    header("Location: index.php?ctrller=catalog");
                }
                break;
                
                case "add":
                    if (isset($_POST['add-catalog'])&&$_POST['add-catalog']) {
                        $name=$_POST['name'];
                        if ($_FILES['image']['name']!="") {         
                            $image= basename($_FILES['image']['name']);
                            $target_file ="./../assets/uploads/". $image;
                            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                        }
                        $catalogObj->addCatalog($name,$image);
                        header('Location: index.php?ctrller=catalog');
                    }
                    include './../view/admin/catalog/add-catalog.php';
                    break;

                case "edit":
                    if (isset($_POST['edit-catalog'])&&$_POST['edit-catalog']) {
                        $idCatalog=$_POST['idCatalog'];
                        $name=$_POST['name'];
                        $catalogObj->updateCatalog($name,$idCatalog);
                        header('Location: index.php?ctrller=catalog');
                    }
                    include './../view/admin/catalog/edit-catalog.php';
                    break;
        }
?>