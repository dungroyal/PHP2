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

    $body="Oke chưa AE :v";
    $mail=$mailer->send($to,$headers,$body);

    if (PEAR::isError($mail)) {
        $alert="<p>".$mail->getMessage()."</p>";
    }else{
        $alert="<p>Gửi Mail thành công</p>";
    }
    include '../view/admin/mail.php';
?>