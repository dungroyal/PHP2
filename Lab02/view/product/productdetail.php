<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="card">
        <div class="row">
            <aside class="col-sm-5 border-right">
                <article class="gallery-wrap">
                    <div class="img-big-wrap">
                    </div> <!-- slider-product.// -->
                    <div class="img-small-wrap">
                        <div class="item-gallery"> <img src="assets/images/<?=$pro['imageUrl'];?>" width="100%"> </div>
                    </div> <!-- slider-nav.// -->
                </article> <!-- gallery-wrap .end// -->
            </aside>
            <aside class="col-sm-7">
                <article class="card-body p-5">
                    <h3 class="title mb-3"><?=$pro['productName'];?></h3>

                    <p class="price-detail-wrap">
                        <span class="price h3 text-warning">
                            <span class="currency">US $</span><span class="num"><?=$pro['price'];?></span>
                        </span>
                        <span>/per kg</span>
                    </p> <!-- price-detail-wrap .// -->
                    <dl class="item-property">
                        <dt>Description</dt>
                        <dd>
                            <p><?=$pro['description'];?> </p>
                        </dd>
                    </dl>
                    <dl class="param param-feature">
                        <dt>Model#</dt>
                        <dd><?=$pro['productCode'];?></dd>
                    </dl> <!-- item-property-hor .// -->
                    <dl class="param param-feature">
                        <dt>Color</dt>
                        <dd>Black and white</dd>
                    </dl> <!-- item-property-hor .// -->
                    <dl class="param param-feature">
                        <dt>Delivery</dt>
                        <dd>Russia, USA, and Europe</dd>
                    </dl> <!-- item-property-hor .// -->

                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                            <dl class="param param-inline">
                                <dt>Quantity: </dt>
                                <dd>
                                    <select class="form-control form-control-sm" style="width:70px;">
                                        <option> 1 </option>
                                        <option> 2 </option>
                                        <option> 3 </option>
                                    </select>
                                </dd>
                            </dl> <!-- item-property .// -->
                        </div> <!-- col.// -->
                    </div> <!-- row.// -->
                    <hr>
                    <a href="#" class="btn btn-lg btn-primary text-uppercase"> Buy now </a>
                    <a href="#" class="btn btn-lg btn-outline-primary text-uppercase"> <i
                            class="fas fa-shopping-cart"></i> Add to cart </a>
                </article> <!-- card-body.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- card.// -->


</div>