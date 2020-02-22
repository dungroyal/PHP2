    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="index.php"><i class="fa fa-home"></i> Trang chủ</a>
                        <a href="index.php?ctrller=product">Cửa hàng</a>
                        <span>Giỏ hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Hình ảnh</th>
                                    <th class="p-name">Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Xoá</th>
                                </tr>
                            </thead>
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
                                        <td class="cart-pic first-row"><img src="assets/uploads/'.$proById['image'].'" style="width: 100px;" alt=""></td>
                                        <td class="cart-title first-row">
                                            <h5>'.$proById['name'].'</h5>
                                        </td>
                                        <td class="p-price first-row">'.number_format($proById['specialPrice']).' đ</td>
                                        <td class="qua-col first-row">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="'.$items['quantity'].'">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="total-price first-row">'.number_format($items['quantity']*$proById['specialPrice']).' đ</td>
                                        <td class="close-td first-row"><a href="index.php?ctrller=cart&act=deleteCartItems&idCartItems='.$items['idProduct'].'"><i class="ti-close"></i></a></td>
                                    </tr>
                                    ';
                                }
                            }else {
                                echo '<h4><center style="padding-bottom: 30px;color: red;font-weight: bold;">Chưa có sản phẩm nào trong giỏ hàng ! </center></h4>';
                                echo '<h4><center style="padding-bottom: 80px;color: black;font-weight: bold;"><a href="?ctrller=product">Tiếp tục mua hàng!</a></h4>';
                            } 
                            ?>
                            </tbody>
                        </table>
                    </div>
                   
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="?ctrller=product" class="primary-btn continue-shop">Tiếp tục mua hàng</a>
                                <a href="#" class="primary-btn up-cart">Cập nhật giỏ hàng</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>Mã giảm giá</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">Xác nhập</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Tổng cộng <span>
                                    <?php
                                        if (isset($tongCong)) {
                                            echo number_format($tongCong)."đ";
                                        }else {
                                            echo "Giỏ hàng trống!";
                                        }
                                    ?>    
                                    </span></li>
                                    <li class="cart-total">Thành tiền <span>
                                    <?php
                                        if (isset($tongCong)) {
                                            echo number_format($tongCong).' đ';
                                        }else {
                                            echo "Giỏ hàng trống!";
                                        }
                                    ?>          
                                </span></li>
                                </ul>
                                <a href="?ctrller=cart&act=checkout" class="proceed-btn">TIẾN HÀNH THANH TOÁN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->