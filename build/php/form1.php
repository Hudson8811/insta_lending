<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Inst</title>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
<?php
$myaddr = "rudenscky2011@yandex.ru, hudson88@yandex.ru"

if(isset($_POST['call-control']) && $_POST['call-control'] == 0){

    $number = $_POST['phone'];
    $name = $_POST['name'];
    $service = $_POST['service'];

    $headers = "MIME-Version: 1.0\r\n";
    $headers = "Content-Type: text/plan;charset=utf-8";
    $headers = "From: info@vash_domen.ru $from";
    $subj = "=?utf-8?b?".base64_encode('Получить консультацию'."?=");
    $text = " \nТелефон: ".$number. " \nИмя: ".$name." \nУслуга: ".$service;
    mail($myaddr, $subj, $text, $headers, $from);
    echo "<div style=\"background-image:url();background-position:top;margin-top:40px;\"></div><div style=\"width:auto; height: 240px; color: #111111; text-align:center; font-family: 'Arial';
 font-size: 18px; line-height: 18px;\"><div style=\"margin: 40; text-align:center;font-weight:bold;padding:10px;margin-left:0px;background:#fff;color:#000;line-height:26px;\"><p><span style='display:block; font-size:48px; margin-top:50px; line-height:48px;'>Спасибо!</span>
<p style='margin-top:-20px;'>Ваша заявка отправлена!</p>
<p style='margin-top:-20px;'>Мы свяжемся с Вами в кратчайшие сроки!</p></div></div>";
} else{echo "Нет ПОСТА";
}

?>
</body>
</html>