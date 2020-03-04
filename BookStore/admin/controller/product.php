<?php
    $action="product";
    $productObj=new PRODUCT();
    if(isset($_GET['act']))
        $action=$_GET['act'];
        switch($action){
            case "product":
                $listProduct=$productObj->getAllProduct();
                include './../view/admin/product/product.php';
                break;

            case "add":
                if (isset($_POST['add-product'])&&$_POST['add-product']) {
                    $name=$_POST['name'];
                    $author=$_POST['author'];
                    $nxb=$_POST['nxb'];
                    $mota=$_POST['mota'];
                    $idCatalog=$_POST['idCatalog'];
                    $price=$_POST['price'];
                    $specialPrice=$_POST['specialPrice'];
                    $status=$_POST['status'];

                    if ($_FILES['image']['name']!="") {         
                        $image= basename($_FILES['image']['name']);
                        $target_file ="./../assets/uploads/". $image;
                        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                    }

                    if ($_FILES['images']['name']!="") {
                        $listImages="";
                        foreach ($_FILES['images']['name'] as $key=>$valuse) {
                            $images=basename($_FILES['images']['name'][$key]);
                            $target_file ="./../assets/uploads/".$images;
                            move_uploaded_file($_FILES['images']['tmp_name'][$key], $target_file);
                            $listImages.=",".$images;
                        }
                        $listImages=ltrim($listImages,",");
                    }
                    $productObj->addProduct($name,$author,$nxb,$price,$specialPrice,$image,$listImages,$mota,$idCatalog,$status);
                    header('Location: index.php?ctrller=product');
                }
                $catalogObj= new CATALOG();
                $listCatalog=$catalogObj->getAllCatalog();
                
                include './../view/admin/product/add-product.php';
                break;

            case "edit":
                if (isset($_POST['edit-product'])&&$_POST['edit-product']) {
                    $idProduct=$_POST['idProduct'];
                    $name=$_POST['name'];
                    $author=$_POST['author'];
                    $nxb=$_POST['nxb'];
                    $mota=$_POST['mota'];
                    $idCatalog=$_POST['idCatalog'];
                    $price=$_POST['price'];
                    $specialPrice=$_POST['specialPrice'];
                    $status=$_POST['status'];

                    if ($_FILES['image']['name']!="") {         
                        $image= basename($_FILES['image']['name']);
                        $target_file ="./../assets/uploads/". $image;
                        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                    }else{
                        $image=$_POST['image'];
                    }

                    if ($_FILES['images']['name']!="") {
                        $listImages="";
                        foreach ($_FILES['images']['name'] as $key=>$valuse) {
                            $images=basename($_FILES['images']['name'][$key]);
                            $target_file ="./../assets/uploads/".$images;
                            move_uploaded_file($_FILES['images']['tmp_name'][$key], $target_file);
                            $listImages.=",".$images;
                        }
                        $listImages=ltrim($listImages,",");
                    }else{
                        $images=$_POST['images'];
                    }


                    $productObj->updateProduct($name,$author,$nxb,$price,$specialPrice,$image,$listImages,$mota,$idCatalog,$status,$idProduct);
                    header('Location: index.php?ctrller=product');
                }
                $catalogObj= new CATALOG();
                $listCatalog=$catalogObj->getAllCatalog();
                
                include './../view/admin/product/edit-product.php';
                break;

            case "delete":
                if (isset($_GET['idProduct'])) {
                    $idProduct=$_GET['idProduct'];
                    $productObj->deleteProduct($idProduct);
                    header("Location: index.php?ctrller=product");
                }
                break;
        }
?>