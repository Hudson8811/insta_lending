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
$myaddr = "rudenscky2011@yandex.ru";





if (isset($_POST['call-control']) && $_POST['call-control'] == 0){
    
    $number = $_POST['phone'];
    $name = $_POST['name'];

    $headers = "MIME-Version: 1.0\r\n";
    $headers = "Content-Type: text/plain;charset=utf-8";
    $headers = "From:";
    $subj = "=?utf-8?b?".base64_encode('Получить консультацию')."?=";
    $text = " \nТелефон: ".$number."\nИмя: ".$name;
    mail($myaddr, $subj, $text, $headers);
    echo "";
    
    } else {echo "Нет ПОСТА";} 
    ?>
</body>
</html>