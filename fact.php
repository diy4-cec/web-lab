<html>
<head>
<title>Factorial</title>
</head>
<body>
<h2>Factorial of a number</h2>
<form method="POST">
Enter a number:<input type="number" name="num">
<button type="submit">Check</button>
</form>

<?php
if(isset($_POST['num']))
{
 $number=$_POST['num'];
 $n=$number;
 $f=1;
 for($i=1;$i<=$n;$i++)
 {
  $f=$f*$i;
  }
 echo "Factorial of $n is $f";
}
?>

</body>
</html>
