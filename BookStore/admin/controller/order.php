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
            include './../view/admin/order/order-detail.php';
            break;

        // case 'sendmail':
        //     if (isset($_GET['idCustomer'])) {
        //         $idCustomer=$_GET['idCustomer'];
        //     }

        //     $data=$newOrder=$order->getAllOrderDetail($idCustomer);
        //     $order->updateOrder($idCustomer);
        //     $newOrder=$order->getAllOrder();

        //     $cus=$order->getCustomerById($idCustomer);
        //     $getCustomer=$cus->fetch(pdo::FETCH_ASSOC); 

        //     $title ="Thôi tin đơn hàng.";
        //     $ten=$getCustomer['full_name'];
        //     $email=$getCustomer['email'];
        //     $diachi=$getCustomer['address'];
        //     $sdt=$getCustomer['phone'];
        //     $content = '
        //     <!DOCTYPE html>
        //         <html lang="en">
        //         <head>
        //             <meta charset="UTF-8">
        //             <meta name="viewport" content="width=device-width, initial-scale=1.0">
        //             <title>Mail</title>
        //         </head>
        //         <body>
        //             <table>
        //             <tr>
        //             <th>Tên sản phẩm</th>
        //             <th>Đơn giá</th>
        //             <th>Số lượng</th>
        //             <th>Thành tiền</th>
        //             </tr>
        //                 ';
        //                 $tongcong=0;
        //             foreach ($data as $items) {
        //                 $tongcong+=$items['price']*$items['qty'];
        //                 $content.='
        //                 <tr>
        //                     <td>'.$items['name'].'</td>
        //                     <td>'.number_format($items['price']).'</td>
        //                     <td>'.$items['qty'].'</td>
        //                     <td>'.number_format($items['price']*$items['qty']).' đ</td>
        //                 </tr>
        //                 ';
        //             }
        //             $content.= '
        //             <tr>
        //                 <th></th>
        //                 <th></th>
        //                 <th>Tổng cộng</th>
        //                 <th>'.number_format($tongcong).'</th>
        //             </tr>';

        //             $content.= '
        //             </table>
        //         </body>

        //         </html>
        //     ';

        //         $nTo = "Store";
        //         $mTo = $getCustomer['email'];
        //         $diachi = 'dungdqps5520@gmail.com';
        //         $mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
        //         if($mail==1){
        //         echo $erro = '<p>Đã gửi thành công thông tin đơn hàng cho <strong>'.$ten.'</strong></p>';
        //     }else{ 
        //         echo $erro = 'Có lỗi!';
        //     }
        //     include '../view/admin/order.php';
        //     break;
        }
            
?>