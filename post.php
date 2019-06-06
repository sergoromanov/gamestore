<?php 
$name = $_POST['name'];
$img = $_POST['img'];
$price = $_POST['price'];
$connect= mysqli_connect('127.0.0.1', 'root','','sergey_tue_17');
$sql= "INSERT INTO gamestore (name,img,price) VALUES ('" . $name . "', '" . $img . "', '" . $price . "')";
mysqli_query($connect, $sql);
header('Location: http://casualps4/');
 ?>