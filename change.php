<meta charset="utf-8">
<?php 
	$id = $_POST['id'];
	$conn = mysqli_connect('127.0.0.1', 'root', '','sergey_tue_17');
	$query = mysqli_query($conn, "SELECT * FROM gamestore WHERE id='" . $id . "'");
  	$new =  $query->fetch_assoc();
?>
<form action="changes.php" method="POST">
	<input type="text" name="name" value="<?php echo $new['name'] ?>">
	<input type="text" name="img" value="<?php echo $new['img'] ?>">
	<input type="text" name="price" value="<?php echo $new['price'] ?>">
	<button name="id" value="<?php echo $new['id']; ?>">Редактировать</button>
</form>