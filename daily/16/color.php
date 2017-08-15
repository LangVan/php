<?php
	var_dump($_GET);
	@$bgcolor=$_GET['color'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body bgcolor="<?php echo $bgcolor?>">
	<form action="demo.php" method="get">
		<select name="color" >
			<option value="red">红色</option>
			<option value="blue">蓝色</option>
			<option value="green">绿色</option>
			<option value="orange">橙色</option>
			<option value="pink">粉红色</option>
		</select>
		<input type="submit">
	</form>
</body>
</html>