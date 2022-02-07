<html>
<head>
</head>
<body>
<?php
$player=array("Virat Kohli","Rohit Sharma","K L Rahul","Mohammed Shaml","Jayant Yadav","M S Dhoni","Dinesh Karthik" );
echo "<table border='1' width='90'><tr><th>Number</th><th>Name</th></tr>";
foreach($player as $i=>$v)
{
    echo"<tr><td>$i</td><td>$v</tr></tr>";
}
echo "</table>";
?>
</body>
</html>