<?php
$a="";
$b="";
$result="";
if(isset($_POST['add']))
{
	$a=intval($_POST['no1']);
	$b=intval($_POST['no2']);
	$result=$a+$b;
}
if(isset($_POST['sub']))
{
	$a=intval($_POST['no1']);
	$b=intval($_POST['no2']);
	$result=$a-$b;
}
if(isset($_POST['mul']))
{
	$a=intval($_POST['no1']);
	$b=intval($_POST['no2']);
	$result=$a*$b;
}
if(isset($_POST['div']))
{
	$a=intval($_POST['no1']);
	$b=intval($_POST['no2']);
	$result=@($a/$b);
}
?>
<?php echo "Result is=".$result; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>CALCULATOR</title>
	</head>
	<body bgcolor= "yellow">

<div style="position:absolute; left:650; top:300">
	<form action="calculator.php" method="post">
<table border="1" bgcolor= "blue" cellpadding="5">
<tr>
<td><font color="pink" size="4">Enter first No.</font></td>
<td><input type= "text" name="no1"></td>
</tr>
<tr>
<td><font color= "pink" S1ze="4"> Enter Second No.</font></td>
<td><input type="text" name="no2"></td>
</tr>
<tr>
<td><input type="submit" name="add" value="Add"></td>
<td><input type="submit" name="sub" value="Sub"></td>
</tr>
<tr>
<td><input type="submit" name="mul" value="Mul"></td>
<td><input type="submit" name="div" value="Div"></td>
</tr>
</table>
</form>
</div>
<div style="position:absolute; left:600; top:380">
<font color="red" size="5">




<font>
</div>


	</body>
</html>
