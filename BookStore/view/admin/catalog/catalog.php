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
                                    <Strong>QUẢN LÝ DANH MỤC</Strong>
                                    <div class="page-title-subheading">Sau đây là tổng quan về Website BookStore của bạn.
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <a href="index.php?ctrller=catalog&act=add" class="btn-wide btn btn-info text-right"><i class="fa fa-fw" aria-hidden="true"></i>    THÊM DANH MỤC MỚI</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">TẤT CẢ DANH MỤC
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Mã DM</th>
                                                <th>Tên danh mục</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($listCatalog as $cat) {
                                                    echo '
                                                    <tr>
                                                        <td class="text-center text-muted">DMBS0'.$cat['id'].'</td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="40" class="rounded-circle" src="assets/images/avatars/'.$cat['image'].'" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading">'.$cat['name'].'</div>
                                                                        <div class="widget-subheading opacity-7">10 sản phẩm</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                        <a href="index.php?ctrller=catalog&act=edit&idCatalog='.$cat['id'].'"><div class="badge badge-primary">Sửa</div></a>
                                                        <a href="index.php?ctrller=catalog&act=delete&idCatalog='.$cat['id'].'"><div class="badge badge-danger">Xoá</div></a>
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