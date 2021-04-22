<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	
	$name = $_POST['name'];
	
	$tel = $_POST["tel"];
	$message = $_POST['message'];
	$error = '';
	if(!$name) {$error .= 'Укажите свое имя. ';}
	
	
	if(!$message || strlen($message) < 1) {$error .= 'Введите сообщение. ';}
	if(!$error) {
		$address = "polik19195@gmail.com"; // ВНИМАНИЕ! Здесь указываем адрес электронной почты, на которую будут приходить письма
		$sitename = "Greenway";
		$sub = "Сообщение от клиента $name с сайта Greenway";
		$mes = "Имя клиента: ".$name."\n\nТелефон клиента: " .$tel."\n\nСообщение: ".$message."\n\n";
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$sitename");
		if($send) {echo 'OK';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>