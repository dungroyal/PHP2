    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Danh mục</h4>
                        <ul class="filter-catagories">
                            <?php
                                foreach ($listCata as $cata) {
                                    echo '
                                        <li><a href="index.php?ctrller=product&idCatalog='.$cata['id'].'">'.$cata['name'].'</a></li>
                                    ';
                                }                            
                            ?>
                        </ul>
                    </div>
                    <!-- <div class="filter-widget">
                        <h4 class="fw-title">Giá</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" name="price1" id="minamount">
                                    <input type="text" name="price2" id="maxamount">
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max="98">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <a href="#" class="filter-btn">Lọc sản phẩm</a>
                    </div> -->
                    
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <!-- <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                    <select class="sorting">
                                        <option value="">Default Sorting</option>
                                    </select>
                                    <select class="p-show">
                                        <option value="">Show:</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                <p>Show 01- 09 Of 36 Product</p>
                            </div>
                        </div>
                    </div> -->
                    
                    <?php
                        if (isset($resultSearch)) echo $resultSearch;
                    ?>

                    <div class="product-list">
                        <div class="row">
                        
                        <?php
                            if (isset($_GET['idCatalog'])) {
                                foreach ($productByIdcat as $pro) {
                                    echo'
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="product-item">
                                            <div class="pi-pic">
                                                <img src="assets/uploads/'.$pro['image'].'" alt="">
                                                <div class="sale pp-sale">Sale</div>
                                                <ul>
                                                    <li class="quick-view w-icon active" ><a href="?ctrller=cart&act=addToCart&idProduct='.$pro['id'].'"><i class="icon_bag_alt"></i>  Thêm vào giỏ hàng</a></li>
                                                </ul>
                                            </div>
                                            <div class="pi-text">
                                                <div class="catagory-name">Towel</div>
                                                <a href="?ctrller=product-detail&idProduct='.$pro['id'].'">
                                                    <h5>'.$pro['name'].'e</h5>
                                                </a>
                                                <div class="product-price">
                                                '.number_format($pro['specialPrice']).' đ
                                                    <span>'.number_format($pro['price']).' đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                }
                            }else{
                                foreach ($allProduct as $pro) {
                                    echo'
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="product-item">
                                            <div class="pi-pic">
                                                <img src="assets/uploads/'.$pro['image'].'" alt="">
                                                <div class="sale pp-sale">Sale</div>
                                                <ul>
                                                    <li class="quick-view w-icon active" ><a href="?ctrller=cart&act=addToCart&idProduct='.$pro['id'].'"><i class="icon_bag_alt"></i>  Thêm vào giỏ hàng</a></li>
                                            </ul>
                                            </div>
                                            <div class="pi-text">
                                                <div class="catagory-name">Towel</div>
                                                <a href="?ctrller=product-detail&idProduct='.$pro['id'].'">
                                                    <h5>'.$pro['name'].'e</h5>
                                                </a>
                                                <div class="product-price">
                                                '.number_format($pro['specialPrice']).' đ
                                                    <span>'.number_format($pro['price']).' đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                }
                            }
                        
                        ?>
                        </div>
                    </div>
                    <div class="loading-more">
                        <i class="icon_loading"></i>
                        <a href="#">
                            Xem thêm
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

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
