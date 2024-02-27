<!-- 
// 
// require 'conect.php';
// if(isset($_POST['submit'])){
//     $email = $_POST['email'];
//     $pass = $_POST['pass'];
//     $queryUser = "SELECT * FROM `user` WHERE `user`.`email` = '$email'";
//     $mbUser = mysqli_query($db, $queryUser);
//     $mbUser = mysqli_fetch_assoc($mbUser);
//     if($mbUser){
//         if($mbUser['email']==$email&&$mbUser['pass']==$pass){
//             $_SESSION['user']=['role'=>$mbUser['role'],'email'=>$mbUser['email']];
//             header('Location:../1index.html');
//         } else{
//             die('Wrong email or password'); 
//         }
// } -->

<?
    session_start();
    require "connect.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Получаем данные из формы
        $username = $_POST['email'];
        $password = $_POST['pass'];
    }
    
        // Формируем запрос к базе данных
        $query = "SELECT * FROM `user` WHERE `email` = '$username' AND `pass` = '$password'";
        // Выполняем запрос
        $result = mysqli_query($db, $query);
        $user = mysqli_fetch_assoc($result);
    
        // Проверяем, найден ли пользователь
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['user'] = [
                "id" => $user["id"],
                "email" => $user["email"],
                "role" => $user["role"]
                ];
        }

            // Если пользователь найден, сохраняем его имя в сессии
            
            // Перенаправляем на страницу приветствия
            header('Location: /');
        // } else {
        //     // Если пользователь не найден, выводим сообщение об ошибке
        //     $error = "Invalid username or password.";
        // }
    



//     $email=$_POST['email'];
//      $pass=$_POST['pass'];   

//         if($password!==$pass){
//             die("error add");
//     }else
//     if($email==null || $password==null){
//     ?>  <a href="lib/reg.php">back</a> 
//         <h1>ПОЛЯ ПУСТЫЕ </h1> 
//         <?
//         die("error input");
//     }
// $queryUser="SELECT * FROM `user`WHERE `user`.`email`='$email'";

// $mbUser =mysqli_query($bd,$queryUser);
// $mbUser=mysqli_fetch_assoc($mbUser);
//     if($mbUser){
//         ?>
//     <h1>Такой уже есть аккаунт</h1>
//         <?
//     die("error register");
//                 }else{
//         $insertUser = "INSERT INTO `user`(`email`, `pass`, `role`) VALUES('$email','$pass','$role')";
//         $add = mysqli_query($db, $insertUser);
//         ?>
//         <h1>Успешно</h1>
//         <?
//         header("Location:..lib/reg.php");
//                 }
//  ?>