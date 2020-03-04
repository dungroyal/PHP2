  
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                                        </i>
                                    </div>
                                    <div>Chi tiết đơn hàng
                                        <div class="page-title-subheading"><a href="index.php?ctrller=order"><i class="pe-7s-angle-left"> </i>Quay lại quản lý đơn hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            if ($getCustomer['status']==0) {
                                echo '<div class="alert alert-info fade show" role="alert">Hãy gửi Mail thông báo cho <strong>'.$getCustomer['full_name'].'</strong>, và chuẩn bị đơn hàng để gửi.</div>';
                            }elseif ($getCustomer['status']==1) {
                                echo '<div class="alert alert-info fade show" role="alert">Đã gửi mail thông báo cho <strong>'.$getCustomer['full_name'].'</strong></div>';
                            }elseif ($getCustomer['status']==2) {
                                echo '<div class="alert alert-success fade show" role="alert"><strong>Đơn hàng đã hoàn tất</strong></div>';
                            }else{
                                echo '<div class="alert alert-danger fade show" role="alert"><strong>Đã huỷ đơn hàng</strong></div>';
                            }
                        ?>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Thông tin khách hàng</h5>
                                        <table class="mb-0 table">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Họ và Tên</th>
                                                <th class="text-center">Số điện thoại</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Địa chỉ</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center"><strong><?=$getCustomer['full_name'];?></strong></td>
                                                    <td class="text-center">0<?=$getCustomer['phone'];?></td>
                                                    <td class="text-center"><?=$getCustomer['email'];?></td>
                                                    <td class="text-center"><?=$getCustomer['address'];?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Quản lý</h5>
                                    <?php
                                        if ($getCustomer['status']==0) {
                                            echo '<a href="index.php?ctrller=order&act=sendmail&idCustomer='.$getCustomer['id'].'"><button class="mb-2 mr-2 btn btn-primary">Gửi Email thông báo</button></a>
                                                    <a href="index.php?ctrller=order&act=order-success&idCustomer='.$getCustomer['id'].'"><button class="mb-2 mr-2 btn btn-success">Đã thành công</button></a>
                                                    <a href="index.php?ctrller=order&act=order-cancel&idCustomer='.$getCustomer['id'].'"><button class="mb-2 mr-2 btn btn-danger">Huỷ đơn hàng</button></a>';
                                        }elseif ($getCustomer['status']==1) {
                                            echo '<a href="index.php?ctrller=order&act=sendmail&idCustomer='.$getCustomer['id'].'"><button class="mb-2 mr-2 btn btn-primary">Gửi lại Email thông báo</button></a>
                                                    <a href="index.php?ctrller=order&act=order-success&idCustomer='.$getCustomer['id'].'"><button class="mb-2 mr-2 btn btn-success">Đã thành công</button></a>
                                                    <a href="index.php?ctrller=order&act=order-cancel&idCustomer='.$getCustomer['id'].'"><button class="mb-2 mr-2 btn btn-danger">Huỷ đơn hàng</button></a>';
                                        }elseif ($getCustomer['status']==2) {
                                            echo '<a><button class="mb-2 mr-2 btn btn-success">Đơn hàng đã hoàn thành</button></a>';
                                        }elseif ($getCustomer['status']==3) {
                                            echo '<a><button class="mb-2 mr-2 btn btn-danger">Đã huỷ đơn hàng</button></a>';
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Thông tin đơn hàng</h5>
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">STT</th>
                                                <th class="text-center">Mã SP</th>
                                                <th class="text-center">Tên sản phẩm</th>
                                                <th class="text-center">Đơn giá</th>
                                                <th class="text-center">Số lượng</th>
                                                <th class="text-center">Thành tiền</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            
                                                $stt='1';
                                                $tongcong=0;
                                                foreach ($getOrderDetail as $pro) {
                                                    echo'
                                                    <tr>
                                                        <td class="text-center">'.$stt.'</td>
                                                        <td class="text-center">BS0'.$pro['id'].'</td>
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
                                                        <td>
                                                            <div class="widget-heading text-center"><strong>'.number_format($pro['specialPrice']).' đ</strong></div>
                                                            <div class="widget-subheading opacity-7 text-center"><del>'.number_format($pro['price']).' đ</del></div>
                                                        </td>
                                                        <td class="text-center" >
                                                        '.$pro['qty'].'
                                                        </td>
                                                        <td class="text-center">
                                                        '.number_format($pro['specialPrice']*$pro['qty']).' đ
                                                        </td>
                                                    </tr>
                                                    ';
                                                    $stt+=1;
                                                    $tongcong+=$pro['specialPrice']*$pro['qty'];
                                                }
                                            ?>
                                                
                                            </tbody>
                                            <thead>
                                            <tr>
                                                <th class="text-center"></th>
                                                <th class="text-center"></th>
                                                <th class="text-center"></th>
                                                <th class="text-center"></th>
                                                <th class="text-center">Mã giảm giá</th>
                                                <th class="text-center">- 0 đ</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center"></th>
                                                <th class="text-center"></th>
                                                <th class="text-center"></th>
                                                <th class="text-center"></th>
                                                <th class="text-center">Phí vận chuyển</th>
                                                <th class="text-center">+ 15,000 đ</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center"></th>
                                                <th class="text-center"></th>
                                                <th class="text-center"></th>
                                                <th class="text-center"></th>
                                                <th class="text-center">Tổng cộng</th>
                                                <th class="text-center"><?=number_format($tongcong+15000);?> đ</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>