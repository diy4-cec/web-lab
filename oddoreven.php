<!doctype html>
<html>
<head>
<title>Odd Or Even</title>
</head>
<body>
<h2>Check Odd or Even</h2>
<form method="GET">
Enter a number:<input type="number" name="n">
<button type="submit">Check</button>
</form>
<br>
<?php
if(isset($_GET['n']))
{
$n=$_GET['n'];
if($n%2==0)
 { 
 echo"It is an even number";
 }
else
 {
 echo"It is an odd number";
 }
}
?>
</body>
</html>
