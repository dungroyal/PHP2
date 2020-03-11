<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BookStore | Sách cho mọi người!</title>
    <link rel="icon" type="image/png" href="assets/uploads/logo_FA.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i> Dungdqps08542@fpt.edu.vn
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i> 0398022720
                    </div>
                </div>
                <div class="ht-right">
                    <div class="lan-selector">
                        <li class="dropdown"  style="list-style: none;">
                            <div href="#" class="dropdown-toggle" data-toggle="dropdown">  &nbsp; &nbsp; &nbsp;<i class="fa fa-user"></i> Tài khoản</div>
                            <ul class="dropdown-menu">
                                <a href="?ctrller?home&act=login">
                                    <li>Đăng nhập</li>
                                </a>
                                <a href="?ctrller=home&act=register">
                                    <li>Đăng ký</li>
                                </a>
                            </ul>
                        </li>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/uploads/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7" style="padding-top: 20px;">
                        <div class="advanced-search">
                            <div class="input-group">
                                <form action="index.php?ctrller=product&act=search" method="post" style="width: 100%;"
                                    autocomplete="off">
                                    <input type="text" name="keyword" placeholder="Muốn tìm gì?" id="colors" required>
                                    <!-- <datalist id="colors" autocomplete="off">
                                        <option value="Red">
                                        <option value="Green">
                                        <option value="Yellow">
                                    </datalist> -->
                                    <button type="submit" name="search"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3" style="padding-top: 20px;">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <?php echo ""; ?>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="index.php?ctrller=cart">
                                    <i class="icon_bag_alt"></i>
                                    <?php
                                        if (isset($_SESSION['cart_items'])) {
                                            $soluong=count($_SESSION['cart_items']);
                                            
                                            }
                                    ?>
                                    <?php
                                    
                                    if (isset($soluong) && $soluong!=0) {
                                        echo "<span>".$soluong."</span>";
                                    }else {
                                        echo "";
                                    }
                                    
                                    ?>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>

                                                <?php
                                                    if (isset($_SESSION['cart_items'])) {
                                                    $tongCong=0;
                                                    foreach ($_SESSION['cart_items'] as $items) {
                                                        $idProduct=$items['idProduct'];
                                                        $p=new PRODUCT();
                                                        $productById=$p->getProduct_by_id($idProduct);
                                                        $proById=$productById->fetch(pdo::FETCH_ASSOC);
                                                        $tongCong+=$items['quantity']*$proById['specialPrice'];

                                                        echo'
                                                            <tr>
                                                                <td class="si-pic"><img src="assets/uploads/'.$proById['image'].'"  width="70px"  alt=""></td>
                                                                <td class="si-text">
                                                                    <div class="product-selected">
                                                                        <p>'.number_format($proById['specialPrice']).' đ</p>
                                                                        <h6>'.$proById['name'].'</h6>
                                                                    </div>
                                                                </td>
                                                                <td class="si-close">
                                                                    <i class="ti-close"></i>
                                                                </td>
                                                            </tr>
                                                        ';
                                                    }
                                                    
                                                }else{
                                                    echo '<p><center>Chưa có sản phẩm nào!</center></p>';
                                                }
                                                
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php
                                        if (isset($tongCong)) {
                                            echo '
                                                <div class="select-total">
                                                    <span>Tổng cộng:</span>
                                                    <h5> '.number_format($tongCong).' đ</h5>
                                                </div>
                                            ';
                                        }else {
                                            echo "";
                                        }
                                    ?>
                                    <div class="select-button">
                                        <a href="index.php?ctrller=cart" class="primary-btn view-card">GIỎ HÀNG</a>
                                        <a href="?ctrller=cart&act=checkout" class="primary-btn checkout-btn">THANH
                                            TOÁN</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">
                                <?php
                                    if (isset($tongCong)) {
                                        echo number_format($tongCong)." đ";
                                    }else {
                                        echo "Giỏ hàng trống!"; 
                                    }
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Thể loại sách</span>
                        <ul class="depart-hover">
                            <?php
                                foreach ($listCata as $cata) {
                                    echo '
                                        <li><a href="index.php?ctrller=product&idCatalog='.$cata['id'].'">'.$cata['name'].'</a></li>
                                    ';
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="index.php">TRANG CHỦ</a></li>
                        <li><a href="index.php?ctrller=product">CỬA HÀNG</a></li>
                        <li><a href="index.php?ctrller=home&act=contact">LIÊN HỆ</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->