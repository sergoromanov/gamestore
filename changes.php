<?php 
$conn = mysqli_connect('127.0.0.1', 'root', '','sergey_tue_17');
$id = $_POST['id'];
$name = $_POST['name'];
$img = $_POST['img'];
$price = $_POST['price'];
$query = mysqli_query($conn, "UPDATE gamestore SET name='" . $name . "' WHERE id='" . $id . "'");
$query = mysqli_query($conn, "UPDATE gamestore SET img='" . $img . "' WHERE id='" . $id . "'");
$query = mysqli_query($conn, "UPDATE gamestore SET price='" . $price . "' WHERE id='" . $id . "'");
header('Location: http://casualps4/');


 ?>
