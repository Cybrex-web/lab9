<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
</form>
<body>
<?php
if(isset($_POST['btn'])){
	$x = $_POST["x"];
    $count = $_POST["count"];
	$l=1;
	$res=0;
	for ($i=0;$i<$count;$i++){
        $res+=1/($l*pow($x,$l));
        $l+=2;
    }
    $res*=2;
    echo("Ответ: " . $res);
}
	?>
<form method = "POST">
	<p>Введите значение x</p>
	<p><input type ="text" name="x" value="1"></p>
	<p>Введите количество итераций</p>
	<p><input type="text" name="count" value="5"></p>
	<p><input type="submit" name="btn"></p>
</form>
</body>
</html>