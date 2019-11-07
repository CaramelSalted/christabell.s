<?php
$name = $_POST['name'];
$inst = $_POST['inst'];
$tel = $_POST['tel'];

echo $name;
echo "<br>";
echo $inst;
echo "<br>";
echo $tel;

if (mail("ktrnwb@ya.ru", "Заявка с сайта", "Имя:".$name.", Instagram: ".$inst."\n Телефон: ".$tel,"From: example@mail.ru \r\n"))
 {     echo "Cообщение успешно отправлено"; 
} else { 
    echo "При отправке сообщения возникли ошибки";
}?>