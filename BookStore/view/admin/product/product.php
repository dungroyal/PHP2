<div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                </div>
                                <div>
                                    <Strong>QUẢN LÝ SẢN PHẨM</Strong>
                                    <div class="page-title-subheading">Sau đây là tổng quan về Website BookStore của bạn.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="page-title-actions">
                                <a href="index.php?ctrller=product&act=add" class="btn-wide btn btn-info text-right"><i class="fa fa-fw" aria-hidden="true"></i> THÊM SẢN PHẨM MỚI</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Tất cả sản phẩm
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Mã SP</th>
                                                <th>Name</th>
                                                <th class="text-center">Giá</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Actions</th>
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
                                                        <td class="text-center">
                                                            <a href="index.php?ctrller=product&act=edit&idProduct='.$pro['id'].'"><div class="badge badge-primary">Sửa</div></a>
                                                            <a href="index.php?ctrller=product&act=delete&idProduct='.$pro['id'].'"><div class="badge badge-danger">Xoá</div></a>
                                                        </td>
                                                    </tr>
                                                    ';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
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