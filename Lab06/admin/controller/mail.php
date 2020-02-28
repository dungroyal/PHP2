<?php
    include_once 'Mail.php';
    include_once 'Mail/mime.php';

    $smtp=array();
    $smtp['host']='ssl://smtp.gmail.com';
    $smtp['port']='465';
    $smtp['auth']=true;
    $smtp['username']='doanquocdung55@gmail.com';
    $smtp['password']='doanquocdung';

    $mailer= Mail::factory('smtp',$smtp);
    $from='doanquocdung55@gmail.com';
    $to='dungdqps08542@fpt.edu.vn';
    $subject='Gửi Mail OKE';
    $headers=array('From'=>$from,'to'=>$to,'Subject'=>$subject);

    $mime= new Mail_mime();
    $body='
            <!DOCTYPE html>
            <html>
            <body>
            
            <h1>Thông tin đơn hàng</h1>
            
            <table border="0">
            <tr>
                <th>Tên sản phẩm</th>
                <th>Savings</th>
            </tr>
            <tr>
                <td>XXXX</td>
                <td>$100</td>
            </tr>
            </table>
                 <p><b>Note:</b> ThankYou!.</p>
                </body>
                </html>
                ';
    $mime->setHTMLBody($body);
    $body=$mime->get();
    $headers=$mime->headers($headers);
    $mail=$mailer-send($to,$headers,$body);
    
    if (PEAR::isError($mail)) {
        $alert="<p>".$mail->getMessage()."</p>";
    }else{
        $alert="<p>Gửi Mail thành công</p>";
    }
    include '../view/admin/mail.php';
?>