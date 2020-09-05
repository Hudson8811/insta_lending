<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="minimum-scale=1.0, target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="320">
<title>Title here</title>
</head>
<body>
<?php
$myaddr = "smm.prosto@mail.ru";





if (isset($_POST['call-control']) && $_POST['call-control'] == 0){
    
    $number = $_POST['phone'];
    $name = $_POST['name'];
    $service = $_POST['service']

    $headers = "MIME-Version: 1.0\r\n";
    $headers = "Content-Type: text/plain;charset=utf-8";
    $headers = "From: info@vash_domen.ru $from";
    $subj = "=?utf-8?b?".base64_encode('Получить консультацию')."?=";
    $text = " \nТелефон: ".$number."\nИмя: ".$name."\nУслуга: ".$service;
    mail($myaddr, $subj, $text, $headers, $from);
    echo "";
    } else {echo "Нет ПОСТА";} 
    ?>
</body>
</html>