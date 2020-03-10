    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="assets/uploads/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>BookStore</span>
                            <h1>Mượn sách tỏ tình</h1>
                            <p>Sách dậy cách yêu thương</p>
                            <a href="#" class="primary-btn">Xem ngay</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="assets/uploads/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>BookStore</span>
                            <h1>Tiền trong túi Tình trong tim</h1>
                            <a href="#" class="primary-btn">Mua ngay</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <?php
                $p=new PRODUCT();
                $cataParent=$p->getProduct_by_idCat(1,3,0);
                    foreach ($cataParent as $cata) {
                        echo '
                            <div class="col-lg-4">
                                <a href="#">
                                    <div class="single-banner">
                                        <img src="assets/uploads/'.$cata['image'].'" alt="">
                                        <div class="inner-text">
                                            <h4>'.$cata['name'].'</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        ';
                    }
                
                ?>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="assets/uploads/women-large.jpg">
                        <h2>SÁCH MỚI</h2>
                        <a href="#">Xem thêm</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                    </div>
                    <div class="product-slider owl-carousel">
                        <?php
                            $p=new PRODUCT();
                            $ProductById=$p->getProduct_by_idCat(5);
                            foreach ($ProductById as $Pro) {
                                echo'
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="assets/uploads/'.$Pro['image'].'" alt="">
                                        <div class="sale">Sale</div>
                                        <ul>
                                        <li class="quick-view w-icon active" ><a href="?ctrller=cart&act=addToCart&idProduct='.$Pro['id'].'"><i class="icon_bag_alt"></i>  Thêm vào giỏ hàng</a></li>
                                    </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">Coat</div>
                                        <a href="?ctrller=product-detail&idProduct='.$Pro['id'].'">
                                            <h5>'.$Pro['name'].'</h5>
                                        </a>
                                        <div class="product-price">
                                            '.number_format($Pro['specialPrice']).' ₫
                                            <span>'.number_format($Pro['price']).' ₫</span>
                                        </div>
                                    </div>
                                </div>
                                ';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
    <section class="deal-of-week set-bg spad" data-setbg="assets/uploads/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>SÁCH HAY GIÁ RẺ</h2>
                    <p>Sở hữa ngay cho mình một cuốc sách hay nào!</p>
                    <div class="product-price">
                        120,000 Đ
                        <span>/ Quyển</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>1</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="index.php?ctrller=product" class="primary-btn">Xem thêm</a>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                    </div>
                    <div class="product-slider owl-carousel">
                    <?php
                            $p=new PRODUCT();
                            $ProductById=$p->getProduct_by_idCat(5);
                            foreach ($ProductById as $Pro) {
                                echo'
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="assets/uploads/'.$Pro['image'].'" alt="">
                                        <div class="sale">Sale</div>
                                        <ul>
                                              <li class="quick-view w-icon active" ><a href="?ctrller=cart&act=addToCart&idProduct='.$Pro['id'].'"><i class="icon_bag_alt"></i>  Thêm vào giỏ hàng</a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">Coat</div>
                                        <a href="?ctrller=product-detail&idProduct='.$Pro['id'].'">
                                            <h5>'.$Pro['name'].'</h5>
                                        </a>
                                        <div class="product-price">
                                            '.number_format($Pro['specialPrice']).' ₫
                                            <span>'.number_format($Pro['price']).' ₫</span>
                                        </div>
                                    </div>
                                </div>
                                ';
                            }
                        ?>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="assets/uploads/man-large.jpg">
                        <h2>Sách Bán Chạy</h2>
                        <a href="#">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Những Mẫu chuyện hay</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="assets/uploads/latest-1.jpg" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i> May 4,2019
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i> 5
                                </div>
                            </div>
                            <a href="#">
                                <h4>The Best Street Style From London Fashion Week</h4>
                            </a>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="assets/uploads/latest-2.jpg" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i> May 4,2019
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i> 5
                                </div>
                            </div>
                            <a href="#">
                                <h4>Vogue's Ultimate Guide To Autumn/Winter 2019 Shoes</h4>
                            </a>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="assets/uploads/latest-3.jpg" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i> May 4,2019
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i> 5
                                </div>
                            </div>
                            <a href="#">
                                <h4>How To Brighten Your Wardrobe With A Dash Of Lime</h4>
                            </a>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="assets/uploads/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="assets/uploads/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Delivery On Time</h6>
                                <p>If good have prolems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="assets/uploads/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->
