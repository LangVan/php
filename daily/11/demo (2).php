<?php
	//传递方式  get  post
	//请记住  url传值 他的传输方式就是get方式  
	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body bgcolor="<?php echo @$_GET['color']?>">
		<a href="demo.php?color=blue">蓝色</a><br/>
		<a href="demo.php?color=greenyellow">荧光黄</a><br/>
		<a href="demo.php?color=green">绿色</a><br/>
		<a href="demo.php?color=red">红色</a><br/>
		<a href="demo.php?color=white">白色</a><br/>
		<a href="demo.php?color=khaki">卡其色</a><br/>
		<a href="demo.php?color=purple">紫色</a><br/>
		<a href="demo.php?color=yellowgreen">黄绿色</a><br/>
		<a href="demo.php?color=pink">粉色</a><br/>
		<a href="demo.php?color=teal">鸭绿色</a><br/>
</body>
</html>