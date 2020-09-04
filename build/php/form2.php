<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="minimum-scale=1.0, target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="320">
<title>Title here</title>
<link rel="stylesheet" type="text/css" href="css/global.css">
<link rel="stylesheet" type="text/css" href="css/calk.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/adaptive.css">
</head>
<body>
<?php
$myaddr = "rudenscky2011@yandex.ru";





if (isset($_POST['call-control']) && $_POST['call-control'] == 0){
    
    $number = $_POST['number'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $confident = $_POST['confident'];

    $headers = "MIME-Version: 1.0\r\n";
    $headers = "Content-Type: text/plain;charset=utf-8";
    $headers = "From: info@vash_domen.ru $from";
    $subj = "=?utf-8?b?".base64_encode('Заказать звонок')."?=";
    $text = " \nТелефон: ".$number."\nИмя: ".$name."\nПочта: ".$email;
    mail($myaddr, $subj, $text, $headers, $from);
    echo "";
    
    } else {echo "Нет ПОСТА";} 
    ?>
</body>
</html>