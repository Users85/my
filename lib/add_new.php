<?php
require "connect.php";

$img1 = $_FILES['img1'];
$img2 = $_FILES['img2'];
$img3 = $_FILES['img3'];
$img4 = $_FILES['img4'];
$category = $_POST['category'];
$article = $_POST['article'];
$rubrica = $_POST['rubrica'];
$count = $_POST['count'];

$name1 = '../uploads/'.$img1['name'];
$tmp = $img1['tmp_name'];
move_uploaded_file($tmp, $name1);

$name2 = '../uploads/'.$img2['name'];
$tmp = $img2['tmp_name'];
move_uploaded_file($tmp, $name2);

$name3 = '../uploads/'.$img3['name'];
$tmp = $img3['tmp_name'];
move_uploaded_file($tmp, $name3);

$name4 = '../uploads/'.$img4['name'];
$tmp = $img4['tmp_name'];
move_uploaded_file($tmp, $name4);

$srom = "INSERT INTO `admin` (`img1`, `img2`, `img3`, `img4`, `category`, `article`, `rubrica`, `count`) 
VALUES ('$name1', '$name2', '$name3', '$name4', '$category', '$article', '$rubrica', '$count')";
$upd = mysqli_query($db, $srom);
header('Location: ../7index.html');
