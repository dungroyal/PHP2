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
                                    <Strong>QUẢN LÝ ĐƠN HÀNG</Strong>
                                    <div class="page-title-subheading">Sau đây là tổng quan về Website BookStore của bạn.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">ĐƠN HÀNG MỚI
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Mã ĐH</th>
                                                <th>Name</th>
                                                <th class="text-center">Địa chỉ</th>
                                                <th class="text-center">Số điện thoại</th>
                                                <th class="text-center">Thời gian</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Actions</th>
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
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card ">
                                <div class="card-header">ĐƠN HÀNG ĐÃ VÀ ĐANG XỬ LÝ
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
                                            foreach ($allOrder as $order) {
                                                $status="";
                                                    if ($order['status']==0) {
                                                        $status='<div class="badge badge-danger">Mới</div>';
                                                    }elseif ($order['status']==1) {
                                                        $status='<div class="badge badge-primary">Đã gửi Mail</div>';
                                                    }elseif ($order['status']==2) {
                                                        $status='<div class="badge badge-success">Đã Hoàn tất</div>';
                                                    }
                                                    else{
                                                        $status='<div class="badge badge-warning">Đã huỷ</div>';
                                                    }
                                                echo  '
                                                <tr>
                                                    <td class="text-center text-muted">BS0'.$order['id'].'</td>
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
                                                        '.$status.'
                                                    </td>
                                                    <td class="text-center">
                                                    <a href="index.php?ctrller=order&act=order-detail&idCustomer='.$order['id'].'"><button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Chi tết</button></a>
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


            