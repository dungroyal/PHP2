<?php
    include 'model/product.php';
    //xu ly du lieu

/**---------Setup Ngày-------------------------- */
		date_default_timezone_set("Asia/Ho_Chi_Minh");	
		$ngay=date("d");
		$thang=date("m");
		$nam=date("Y");
/**------------------------------------------- */


    $temp='product';
    if (isset($_GET['idProduct'])) {
        $temp='productdetail';
    }

    if (isset($_GET['act'])) {
        $temp=$_GET['act'];
    }

    switch ($temp) {
        case 'product':
            $p=new product();
            $sp=$p->getAllProduct();
            include "view/product/products.php";
            break;

        case 'productdetail':
            $idProduct=$_GET['idProduct'];
            $p=new product();
            $prodetail=$p->getProductByCateId($idProduct);
            $pro=$prodetail->fetch(pdo::FETCH_ASSOC);   
            include "view/product/productdetail.php";
            break;

        case 'search':
            $txt=$_POST['txt'];
            $p=new product();
            $sp=$p->searchProduct($txt);
            include "view/product/products.php";
        break;

        case 'addnewPro':
            if (isset($_POST['addnewProduct'])&&$_POST['addnewProduct']) {
                $namePro=$_POST['namePro'];
                $codePro=$_POST['codePro'];
                $date=$_POST['date'];
                $pricePro=$_POST['pricePro'];
                $mota=$_POST['mota'];

                if ($_FILES['image']['name']!="") {         
                    $image= basename($_FILES['image']['name']);
                    $target_file ="assets/images/". $image;
                    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                }
                
                $p= new product();
                $p->insertProduct($namePro,$codePro,$date,$pricePro,$mota,$image);
                $prods=$p->getAllProduct();
                header("location:index.php?ctrller=products");
            }
            include "view/product/addProduct.php";
        break;

        case 'delete':
            $idProduct=$_GET['idProduct'];
            $p= new product();
            $p->deleteProduct($idProduct);
            $prods=$p->getAllProduct();            
            header("location:index.php?ctrller=products");
        break;

        case 'edit':
            if (isset($_POST['updatePro'])&&$_POST['updatePro']) {
                $idPro=$_POST['idPro'];
                $namePro=$_POST['namePro'];
                $codePro=$_POST['codePro'];
                $date=$_POST['date'];
                $pricePro=$_POST['pricePro'];
                $mota=$_POST['mota'];

                if ($_FILES['image']['name']!="") {         
                    $image2= basename($_FILES['image']['name']);
                    $target_file ="assets/images/". $image2;
                    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                }

                
                $p= new product();
                $p->updateProduct($namePro,$codePro,$date,$pricePro,$mota,$image2,$idPro);
                $prods=$p->getAllProduct();
                header("location:index.php?ctrller=products");
            }
            include "view/product/updateProduct.php";
        break;
        
    }

    
?>