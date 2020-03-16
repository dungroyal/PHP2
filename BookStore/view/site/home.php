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
                            $ProductById=$p->getAllProduct();
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