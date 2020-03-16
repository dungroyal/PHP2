<div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                </div>
                                <div>Hi
                                    <Strong>CÒN THIẾU SREACH, REGULER, Đổi MK</Strong>
                                    <div class="page-title-subheading">Sau đây là tổng quan về Website BookStore của bạn.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <a href="index.php?ctrller=order" style="text-decoration: none;">
                            <div class="card mb-3 widget-content bg-midnight-bloom">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Đơn hàng mới</div>
                                        <div class="widget-subheading">Đơn hàng mới chưa sử lý</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span><span><?php echo COUNT($countNewOrder); ?></span></div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="index.php?ctrller=order" style="text-decoration: none;">
                            <div class="card mb-3 widget-content bg-arielle-smile">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Đơn hàng thành công</div>
                                        <div class="widget-subheading">Tổng số lượng đơn hàng thành công</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span><?php echo COUNT($countOrder); ?></span></div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="index.php?ctrller=customer" style="text-decoration: none;">
                            <div class="card mb-3 widget-content bg-grow-early">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Khách hàng</div>
                                        <div class="widget-subheading">People Interested</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span><?php echo COUNT($countCustomer); ?></span></div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-premium-dark">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Products Sold</div>
                                        <div class="widget-subheading">Revenue streams</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-warning"><span>$14M</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Đơn hàng mới
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Mã ĐH</th>
                                                <th>Name</th>
                                                <th class="text-center">Địa chỉ</th>
                                                <th class="text-center">Số Phone</th>
                                                <th class="text-center">Thời gian</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;Actions&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($newOrder as $order) {
                                                    echo  '
                                                    <tr>
                                                        <td class="text-center text-muted">ODBS0'.$order['id'].'</td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="40" class="rounded-circle" src="../assets/uploads/User_iconpng.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading">'.$order['full_name'].'</div>
                                                                        <div class="widget-subheading opacity-7">Web Developer</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">'.$order['address'].'</td>
                                                        <td class="text-center">'.$order['phone'].'</td>
                                                        <td class="text-center">'.$order['created_at'].'</td>   
                                                        <td class="text-center">
                                                            <div class="badge badge-danger">Mới</div>
                                                        </td>
                                                        <td class="text-center">
                                                        <a href="index.php?ctrller=order&act=order-detail&idCustomer='.$order['id'].'"><button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Chi tiết</button></a>
                                                        </td>
                                                    </tr>
                                                    ';
                                                }
                                            ?>    
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-block text-center card-footer">
                                    <a href="index.php?ctrller=order" class="btn-wide btn btn-success">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Sản phẩm mới
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                    <thead>
                                            <tr>
                                                <th class="text-center">Mã SP</th>
                                                <th>Name</th>
                                                <th class="text-center">Giá</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                foreach ($listProduct as $pro) {
                                                    $status="";
                                                    if ($pro['status']==0) {
                                                        $status='<div class="badge badge-success">Đang bán</div>';
                                                    }elseif ($pro['status']==1) {
                                                        $status='<div class="badge badge-warning">Chờ duyệt</div>';
                                                    }else{
                                                        $status='<div class="badge badge-danger">Hết hàng</div>';
                                                    }
                                                    echo'
                                                    <tr>
                                                        <td class="text-center text-muted">BS0'.$pro['id'].'</td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="40" class="rounded-circle" src="../assets/uploads/'.$pro['image'].'" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading">'.$pro['name'].'</div>
                                                                        <div class="widget-subheading opacity-7">'.$pro['author'].'</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="widget-heading"><strong>'.number_format($pro['specialPrice']).' đ</strong></div>
                                                            <div class="widget-subheading opacity-7"><del>'.number_format($pro['price']).' đ</del></div>
                                                        </td>
                                                        <td class="text-center">
                                                            '.$status.'
                                                        </td>
                                                    </tr>
                                                    ';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-block text-center card-footer">
                                    <a href="index.php?ctrller=product" class="btn-wide btn btn-success">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        Copyright © 2020 All rights reserved | This template is remade by Dũng Royal
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>