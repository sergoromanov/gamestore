<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
	$connect= mysqli_connect('127.0.0.1', 'root','','sergey_tue_17');
	$query = mysqli_query($connect, 'SELECT * FROM gamestore');
?> 
<div class="container">
<form action="post.php" method="post" >
<input name="name" type="text" >
<input name="img" type="text" >
<input name="price" type="text" >
<button>Добавить</button>
</form>
</div>
<?php 
	for($i = 0; $i < $query->num_rows; $i++) { 
?>
<?php $games=$query->fetch_assoc(); ?>
<div>

<img src="<?php  echo $games['img']?>">
<h3><?php  echo $games['name']?></h3>
<h4><?php  echo $games['price']?></h4>
<form method="post" action="korzina.php">
	<button>В корзину</button>
</form>
 <form method="post" action="delete.php">
 <button name="id" value="<?php echo $games['id'] ?>">Удалить</button>
  </form>
 <form method="post" action="change.php">
 	<button name="id" value="<?php echo $games['id'] ?>">Редактировать</button>
 </form>

</div>
<?php } ?>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
  	 </html> 
 
 
