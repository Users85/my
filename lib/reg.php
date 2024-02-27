<?php
 require "connect.php";
// $servername = "localhost";
// $username = "root";
// $password = "";
// $bd = "hell";

// Создаем подключение к базе данных
// $conn = new mysqli($servername, $username, $password, $bd);

// Проверяем успешность подключения
if ($db->connect_error) {
    die("Ошибка подключения: " . $db->connect_error);
}

// Получаем данные из формы
$email = $_POST['email'];
$password = $_POST['pass'];

// Отправляем запрос на добавление данных в базу
$sql = "INSERT INTO `user` (`email`, `pass`) VALUES ('$email', '$password')";

if ($db->query($sql) === TRUE) {
    echo "Новая запись успешно добавлена";
} else {
    echo "Ошибка: " . $db->error;
}

// header("Location:../1index.html");
// Закрываем соединение с базой данных
// $conn->close();

?>
