<?php
$host = 'localhost'; // адрес сервера 
$database = 'time'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
?>


<?php
require_once 'bd.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
	or die("Ошибка " . mysqli_error($link));

// выполняем операции с базой данных
	
// закрываем подключение
mysqli_close($link);
?>


<?php
require_once 'bd.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) 
	or die("Ошибка " . mysqli_error($link));

// выполняем операции с базой данных
$query ="SELECT * FROM phones";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
	echo "Выполнение запроса прошло успешно";
}

// закрываем подключение
mysqli_close($link);
?>