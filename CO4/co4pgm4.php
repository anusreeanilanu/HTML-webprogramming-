<html>
<head>
</head>
<body>
<?php
$students=array("Anju","Gayathri","Anjali","Sruthi","Priya","Arya");
echo"Array sorted using asort function: <br>";
asort($students);
 print_r($students);
 echo"<br>";
 echo"Array sorted using arsort function: <br>";
 arsort($students);
 print_r($students);
 echo"<br>";

?>
</body>
</html>