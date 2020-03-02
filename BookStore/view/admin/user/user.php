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
                                    <Strong>QUẢN LÝ QUẢN TRỊ VIÊN</Strong>
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
                                                <th class="text-center">Mã User</th>
                                                <th>Name</th>
                                                <th class="text-center">Phone</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Trạng thái</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($listUser as $user) {
                                                    echo'
                                                    <tr>
                                                        <td class="text-center text-muted">ADM00'.$user['id'].'</td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="40" class="rounded-circle" src="../assets/uploads/admin-logo.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading">'.$user['name'].'</div>
                                                                        <div class="widget-subheading opacity-7">Super Admin</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">'.$user['phone'].'</td>
                                                        <td class="text-center">'.$user['email'].'</td>
                                                        <td class="text-center">
                                                            <div class="badge badge-success">Đã xác thực</div>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Xoá</button>
                                                            <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Sửa</button>
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