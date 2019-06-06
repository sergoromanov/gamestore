<?php 
	$id = $_POST['id'];
	$conn = mysqli_connect('127.0.0.1', 'root', '','sergey_tue_17');
	mysqli_query($conn, "DELETE FROM gamestore WHERE id='$id'");
	header('Location: http://casualps4/');
?>