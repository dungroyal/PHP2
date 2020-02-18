<?php
    include 'model/sanpham.php';
    //xu ly du lieu

/**---------Setup Ngày-------------------------- */
		date_default_timezone_set("Asia/Ho_Chi_Minh");	
		$ngay=date("d");
		$thang=date("m");
		$nam=date("Y");
/**------------------------------------------- */


    $temp='sanpham';

    if (isset($_GET['act'])) {
        $temp=$_GET['act'];
    }

    switch ($temp) {
        case 'sanpham':
            $p=new SANPHAM();
            $sp=$p->getAllSanpham();
            include "view/sanpham/sanpham.php";
            break;

        case 'insertSanpham':
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
                
                $p= new SANPHAM();
                $p->insertProduct($namePro,$codePro,$date,$pricePro,$mota,$image);
                $prods=$p->getAllProduct();
                header("location:index.php?ctrller=products");
            }
            include "view/sanpham/insertSanpham.php";
        break;

        case 'delete':
            $idProduct=$_GET['idProduct'];
            $p= new SANPHAM();
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

                
                $p= new SANPHAM();
                $p->updateProduct($namePro,$codePro,$date,$pricePro,$mota,$image2,$idPro);
                $prods=$p->getAllProduct();
                header("location:index.php?ctrller=products");
            }
            include "view/product/updateProduct.php";
        break;
        
    }

    
?>