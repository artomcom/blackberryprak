<?php


$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];

$db=mysqli_connect("localhost", "root", "root", "register-bd"); 
 
/* Записываем данные из формы в БД */
$sql = "INSERT INTO users(email, name, message) VALUES ('$name', '$email', '$message')";
$result=mysqli_query($db, $sql) or die("Ошибка в запросе!".mysql_error());
$db=mysqli_connect("localhost", "root", "root", "register-bd");

/* Выбираем данные */
$sql="SELECT name, email, message FROM users";
$result=mysqli_query($db, $sql);

/* Разбираем данные и выводим под формой*/
while ($line=mysqli_fetch_row($result)) {
echo "<b>Имя:</b>".$line[0]."<br>";
echo "<b>Email:</b>".$line[1]."<br>";
echo "<b>Сообщение:</b>".$line[2]."<br>";
}


?>
