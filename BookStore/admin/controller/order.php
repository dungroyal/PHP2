<?php
    include 'model/class.smtp.php';
    include "model/class.phpmailer.php";
    include "model/functions.php"; 
    $order= new ORDER();
    $temp='order';       
    if (isset($_GET['act'])) {
        $temp=$_GET['act'];
    }
    switch ($temp) {
        case 'order':
            $newOrder=$order->newAllOrder();
            $allOrder=$order->getAllOrder();
            include './../view/admin/order/order.php';
            break;

        case 'order-detail':
            if (isset($_GET['idCustomer'])) {
                $idCustomer=$_GET['idCustomer'];
                $customerById=$order->getCustomerById($idCustomer);
                $getCustomer=$customerById->fetch(pdo::FETCH_ASSOC);
                $orderDetail=$order->getAllOrderDetail($idCustomer);
                $getOrderDetail=$orderDetail->fetchAll(pdo::FETCH_ASSOC);
            }
            include './../view/admin/order/order-detail.php';
			break;
			
		case 'order-success':
            if (isset($_GET['idCustomer'])) {
				$idCustomer=$_GET['idCustomer'];
				$order->successOrder($idCustomer);
				$newOrder=$order->getAllOrder();
				header("Location: index.php?ctrller=order&act=order-detail&idCustomer=".$idCustomer);
			}
            include './../view/admin/order/order-detail.php';
			break;
			
		case 'order-cancel':
            if (isset($_GET['idCustomer'])) {
				$idCustomer=$_GET['idCustomer'];
				$order->cancelOrder($idCustomer);
				$newOrder=$order->getAllOrder();
				header("Location: index.php?ctrller=order&act=order-detail&idCustomer=".$idCustomer);
			}
            include './../view/admin/order/order-detail.php';
            break;

        case 'sendmail':
            if (isset($_GET['idCustomer'])) {
                $idCustomer=$_GET['idCustomer'];
            }
            $data=$newOrder=$order->getAllOrderDetail($idCustomer);
            $order->updateOrder($idCustomer);
            $newOrder=$order->getAllOrder();

            $cus=$order->getCustomerById($idCustomer);
            $getCustomer=$cus->fetch(pdo::FETCH_ASSOC); 

            $title ="BookStore | Chúc mừng bạn đã đặt hàng thành công!";
            $ten=$getCustomer['full_name'];
            $email=$getCustomer['email'];
            $diachi=$getCustomer['address'];
            $sdt=$getCustomer['phone'];
            $content = '<!DOCTYPE html>
					<html lang="vi">
					
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
						<meta http-equiv="X-UA-Compatible" content="IE=edge">
					</head>
					
					<body>
						<div style="font-family:Verdana;margin-top:0;margin-bottom:0;margin-left:0;margin-right:0;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;width:100%!important;background-color:#c9c9c9!important" bgcolor="#fbfafb">
							<table align="center" cellpadding="0" border="0" cellspacing="0" bgcolor="#c9c9c9" style="background-color:#c9c9c9!important">
								<tbody>
									<tr>
										<td style="padding-top:30px">
											<div style="display:none;max-height:0px;overflow:hidden">
											</div>
											<table width="660" border="0" cellpadding="0" cellspacing="0" style="width:660px;background-color:#ffffff" bgcolor="#ffffff">
												<tbody>
													<tr>
														<td bgcolor="#ffffff" style="background-color:#ffffff;padding-bottom:15px">
															<table width="660" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="background-color:#ffffff;width:660px">
					<tbody>
						<tr>
							<td bgcolor="#ffffff" width="660" valign="top" style="background:#ffffff ">
								<table align="left" width="400" border="0" cellpadding="0" cellspacing="0" style="width:400px;padding-bottom:38px">
									<tbody>
										<tr>
											<td style="padding-bottom:5px;padding-top:37px;padding-left:60px">
												<img src="http://doanquocdung.tk/Royal/logo.png" alt="Chợ Việt logo" style="width: 65%;">
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
						<tr>
							<td align="left" style="padding-bottom:20px;padding-left:60px;padding-right:60px">
								<div>
									<p style="width:540px;text-align:left;font-family:Verdana;font-size:14px;line-height:1.5;padding-top:0;padding-left:0;padding-bottom:10px;padding-right:0;margin-left:0;margin-top:0;margin-bottom:0;margin-right:0;color:#1e1f4e">Chào <strong>'.$ten.'!</strong></p>
									<p style="width:150%;text-align:left;font-family:Verdana;font-size:14px;line-height:1.5;padding-top:0;padding-left:0;padding-bottom:0;padding-right:0;margin-left:0;margin-top:0;margin-bottom:0;margin-right:0;color:#1e1f4e">Đơn hàng của bạn đã được đặt thành công. </p>
								</div>
							</td>
						</tr>
						<tr>
							<td align="left" style="padding-bottom:10px;padding-left:60px;padding-right:60px;padding-top:0px">
								<div>
									<p style="width:540px;text-align:left;font-family:Verdana;font-size:14px;line-height:1.5;padding-top:0;padding-left:0;padding-bottom:10px;padding-right:0;margin-left:0;margin-top:0;margin-bottom:0;margin-right:0;color:#1e1f4e">Thông tin chi tiết như sau:
								</div>
							</td>
						</tr>
						<tr>
							<td align="center" style="padding-bottom:50px;padding-left:60px;padding-right:60px">
								<table align="center" border="0" cellpadding="10" cellspacing="0" style="width:790px; border:solid 2px #f4f8ff;width: 100%;font-size: 12px;">
									<thead>
										<tr>
											<th scope=" row " style="background-color: rgb(179, 255, 255); border-color: rgb(221, 221, 221); height: 40px; width: 80px; ">STT</th>
											<th scope=" row " style="background-color: rgb(179, 255, 255); border-color: rgb(221, 221, 221); height: 40px; width: 80px; ">Hình ảnh</th>
											<th scope="col " style="background-color: rgb(179, 255, 255); border-color: rgb(221, 221, 221); "><strong>Sản phẩm</strong></th>
											<th scope="col " style="background-color: rgb(179, 255, 255); border-color: rgb(221, 221, 221); ">Đơn gi&aacute;<br /> (VNĐ)
											</th>
											<th scope="col " style="background-color: rgb(179, 255, 255); border-color: rgb(221, 221, 221); ">Số lượng</th>
											<th scope="col " style="background-color: rgb(179, 255, 255); border-color: rgb(221, 221, 221); ">Th&agrave;nh tiền<br /> (VNĐ)
											</th>
										</tr>
									</thead>
									<tbody>';

					?>					
                    <?php 
                    $stt=1;
                    $tongcong=0;
					foreach ($data as $item) {
						$content.='
							<tr>
								<th scope="row " style="background-color:rgb(255, 255, 255); border-color:rgb(221, 221, 221); width:100px ">'.$stt.'</th>
								<td style="background-color:rgb(255, 255, 255); border-color:rgb(221, 221, 221); width:580px ">'.$item['name'].'</td>
								<td style="background-color:rgb(255, 255, 255); border-color:rgb(221, 221, 221); width:580px ">'.$item['name'].'</td>
								<td style="background-color:rgb(255, 255, 255); border-color:rgb(221, 221, 221); text-align:center; width:100px "><strong>'.number_format($item['specialPrice']).'</strong></td>
								<td style="background-color:rgb(255, 255, 255); border-color:rgb(221, 221, 221); text-align:center; width:100px ">'.$item['qty'].'</td>
								<td style="background-color: rgba(68, 231, 84, 0.267); border-color: rgb(221, 221, 221); text-align: center; width: 100px; "><strong>'.number_format(($item['specialPrice'])*($item['qty'])).'</strong></td>
							</tr>
                        ';
                        $stt+=1;
                        $tongcong+=($item['specialPrice'])*($item['qty']);
					}
				?>					
					<?php
					$content.='
							<tr>
								<th colspan="5 " scope="row " style="border-color: rgb(221, 221, 221); width: 100px; text-align: right; vertical-align: middle; ">Th&agrave;nh tiền</th>
								<td style="background-color: rgba(68, 231, 84, 0.267); border-color: rgb(221, 221, 221); text-align: center; width: 100px; "><strong>'.number_format($tongcong).'</strong></td>
							</tr>
							<tr>
								<th colspan="5 " scope="row " style="border-color: rgb(221, 221, 221); width: 100px; text-align: right; vertical-align: middle; ">Thuế</th>
								<td style="background-color: rgba(68, 231, 84, 0.267); border-color: rgb(221, 221, 221); text-align: center; width: 100px; ">- 0</td>
							</tr>
							<tr>
								<th colspan="5 " scope="row " style="border-color: rgb(221, 221, 221); width: 100px; text-align: right; vertical-align: middle; ">Giảm gi&aacute;</th>
								<td style="background-color: rgba(68, 231, 84, 0.267); border-color: rgb(221, 221, 221); text-align: center; width: 100px; ">- 0</td>
							</tr>
							<tr>
								<th colspan="5 " scope="row " style="border-color: rgb(221, 221, 221); width: 100px; text-align: right; vertical-align: middle; "><strong>Ph&iacute; vận chuyển</strong></th>
								<td style="background-color: rgba(68, 231, 84, 0.267); border-color: rgb(221, 221, 221); text-align: center; width: 100px; ">15.000&nbsp;</td>
							</tr>
							<tr>
								<th colspan="5 " scope="row " style="border-color: rgb(221, 221, 221); width: 100px; text-align: right; vertical-align: middle; "><strong>Tổng cộng</strong></th>
								<td style="background-color: rgba(68, 231, 84, 0.267); border-color: rgb(221, 221, 221); text-align: center; width: 100px; "><strong>'.number_format($tongcong+15000).'</strong></td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>

			<tr>
				<td align="left" style="padding-bottom:10px;padding-left:60px;padding-right:60px;padding-top:0px">
					<table align="center" border="0" cellpadding="1" cellspacing="0" style="width:790px;width: 100%;font-size: 14px;">
						<tbody>
							<tr>
								<td colspan="2" style="border-color: rgb(221, 221, 221); height: 40px; width: 600px;">
									<h3><strong>Thông tin thanh toán, và địa chỉ nhận hàng.</strong></h3>
								</td>
							</tr>
							<tr>
								<td scope="row" style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 150px;">Họ v&agrave; t&ecirc;n:</td>
								<th scope="row" style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 450px; text-align: left; white-space: nowrap;">'.$ten.'</th>
							</tr>
							<tr>
								<td scope="row" style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 150px;">Số điện thoại:</td>
								<th scope="row" style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 450px; text-align: left;">'.$sdt.'</th>
                            </tr>
                            <tr>
								<td scope="row" style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 150px;">Thư điện tử:</td>
								<th scope="row" style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 450px; text-align: left;">'.$email.'</th>
							</tr>
							<tr>
								<td scope="row" style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 150px;">Địa chỉ:</td>
								<th scope="row" style="background-color: rgb(255, 255, 255); border-color: rgb(221, 221, 221); width: 450px; text-align: left;">'.$diachi.'</th>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			<tr>
			<td align="left " style="padding-bottom:30px;padding-left:60px;padding-right:60px;padding-top:10px ">
			<div>

			<p style="width:540px;text-align:left;font-family:Verdana;font-size:14px;line-height:1.5;margin-left:0;margin-top:0;margin-bottom:0;margin-right:0;padding-top:0;padding-left:0;padding-bottom:20px!important;padding-right:0;color:#817c8f;max-width:540px ">Bạn có bất kỳ câu hỏi nào? Đội ngũ hỗ trợ thân thiện của chúng tôi sẵn sàng trả lời tất cả câu hỏi bạn có. Chỉ cần nhấn nút trả lời email này hoặc liên hệ chúng tôi qua live chat trong trang quản trị.</p>
			<p style="width:540px;text-align:left;font-family:Verdana;font-size:14px;line-height:1.5;margin-left:0;margin-top:0;margin-bottom:0;margin-right:0;padding-top:0;padding-left:0;padding-bottom:5px!important;padding-right:0;color:#817c8f;max-width:540px ">Cảm ơn '.$ten.'! We love you 5000</p>

			</div>
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			<tr>
			<td align="center " style="text-align:center;padding-top:50px;padding-bottom:50px;font-family:Verdana;color:#666666;font-size:12px;line-height:18px ">
			© 2019 - 2020 BOOKSTORE Inc.
			</td>
			</tr>
			</tbody>
			</table>
			</div>
			</body>
			</html>
					';

                $nTo = "Store";
                $mTo = $getCustomer['email'];
                $diachi = 'dungdqps5520@gmail.com';
                $mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
            header("Location: index.php?ctrller=order&act=order-detail&idCustomer=".$idCustomer);
            break;
        }
            
?>