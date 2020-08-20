<?php 
$result = mail('test@example.com', 'テストだよ', '届いてるかな？', 'From: from@example.com');
var_dump($result);
exit;

$to = 'sphdm244@gmail.com';
$subject = '本登録をお願いします。';
$message = 'URLから本登録をお願いします。';
$from = 'test@gmail.com';
$header = "From: ".$from."\r\n";
mb_language('Japanese');
mb_internal_encoding("UTF-8");
$result = mb_send_mail($to,$subject,$message,$header);
var_dump($result);//false
exit;
