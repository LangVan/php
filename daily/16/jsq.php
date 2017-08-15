<?php
	//var_dump($_POST);

	@$num1 = $_POST['num1'];
	@$yunsuan = $_POST['yunsuan'];
	@$num2 = $_POST['num2'];
	if($yunsuan == 0){
		$sum = $num1+$num2;
		$fuhao = '+';
	}
	if($yunsuan == 1){
		$sum = $num1 - $num2;
		$fuhao = '-';
	}
	if($yunsuan == 2){
		$sum = $num1 *$num2;
		$fuhao = '*';
	}
	if($yunsuan ==3){
		$sum = $num1/$num2;
		$fuhao = '/';
	}
	//echo $sum;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="demo.php" method="post">
		第一个数:<input type="text" name="num1"/><br/>
		<input type="radio" name="yunsuan" value="0">+
		<input type="radio" name="yunsuan" value="1">-
		<input type="radio" name="yunsuan" value="2">*
		<input type="radio" name="yunsuan" value="3">/<br/>
		第二个数: <input type="text" name="num2"><br/>
		<input type="submit">		
	</form>
	<b><?php echo $num1.' '.$fuhao.' '.$num2.'='.$sum?></b>

</body>
</html>