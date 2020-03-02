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
                                    <Strong>QUẢN LÝ KHÁCH HÀNG</Strong>
                                    <div class="page-title-subheading">Sau đây là tổng quan về Website BookStore của bạn.
                                    </div>
                                </div>
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
                                                <th class="text-center">Mã ĐH</th>
                                                <th>Name</th>
                                                <th class="text-center">Địa chỉ</th>
                                                <th class="text-center">Số điện thoại</th>
                                                <th class="text-center">Ngày tạo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach ($addCustomer as $cus) {
                                                echo  '
                                                <tr>
                                                    <td class="text-center text-muted">CM0'.$cus['id'].'</td>
                                                    <td>
                                                        <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                        <img width="40" class="rounded-circle" src="../assets/uploads/User_iconpng.png" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left flex2">
                                                                    <div class="widget-heading">'.$cus['full_name'].'</div>
                                                                    <div class="widget-subheading opacity-7">Khách hàng</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">'.$cus['address'].'</td>
                                                    <td class="text-center">'.$cus['phone'].'</td>
                                                    <td class="text-center">'.$cus['created_at'].'</td>
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