    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="index.php"><i class="fa fa-home"></i> Tràg chủ</a>
                        <a href="?ctrller=product">Cửa hàng</a>
                        <span>Thanh toán</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <form action="index.php?ctrller=cart&act=checkout" method="post" class="checkout-form">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="#" class="content-btn">Đăng nhập tài khoản</a>
                        </div>
                        <h4>Chi tiết khách hàng</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="cun-name">Họ và tên<span>*</span></label>
                                <input type="text" name="name" id="cun-name" required >
                            </div>
                            <div class="col-lg-12">
                                <label for="street">Địa chỉ<span>*</span></label>
                                <input type="text" name="address" id="street" class="street-first" required>
                            </div>                            
                            <div class="col-lg-12">
                                <label for="town">Tỉnh, thành phố<span>*</span></label>
                                <input type="text" name="city" id="town" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Địa chỉ Email<span>*</span></label>
                                <input type="text" name="email" value="<?=$_SESSION['user'];?>" id="email" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Số điện thoại<span>*</span></label>
                                <input type="text" name="phone" id="phone" required>
                            </div>
                            <div class="col-lg-12">
                                <div class="create-item">
                                    <label for="acc-create">
                                        Tạo tài khoản?
                                        <input type="checkbox" name="addaccount" id="acc-create">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <input type="text" placeholder="Mã giảm giá">
                        </div>
                        <div class="place-order">
                            <h4>Đơn hàng của bạn</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Sản phẩm <span>Thành tiền</span></li>

                                    <?php
                                        if (isset($_SESSION['cart_items'])) {
                                            $tongCong=0;
                                            foreach ($_SESSION['cart_items'] as $items) {
                                                $idProduct=$items['idProduct'];
                                                $p=new PRODUCT();
                                                $productById=$p->getProduct_by_id($idProduct);
                                                $proById=$productById->fetch(pdo::FETCH_ASSOC);
                                                $tongCong+=$items['quantity']*$proById['specialPrice'];
                                                echo'<li class="fw-normal">'.$proById['name'].'  x <strong>'.$items['quantity'].'</strong> <span>'.number_format($items['quantity']*$proById['specialPrice']).' đ</span></li>';
                                            }
                                        }
                                   ?>
                                   <li class="fw-normal"><strong>Thành tiền </strong><span>
                                   <?php
                                        if (isset($tongCong)) {
                                            echo number_format($tongCong).' đ';
                                        }
                                    ?>  
                                   </span></li>
                                   <li class="fw-normal"><strong>Giảm giá </strong> <span>- 0 đ 
                                   </span></li>
                                   <li class="total-price"><strong>Tổng cộng </strong> <span>
                                   <?php
                                        if (isset($tongCong)) {
                                            echo number_format($tongCong).' đ
                                            <input type="hidden" name="tongcong" value="'.$tongCong.'">
                                            ';}
                                    ?>  
                                   </span></li>
                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                           Thanh toán khi nhập hàng
                                            <input type="checkbox" id="pc-check">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Thanh thoán qua thẻ ngân hàng
                                            <input type="checkbox" id="pc-paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="order-btn">
                                    <input type="submit" name="checkout" class="site-btn place-btn" value="Thanh toán">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
