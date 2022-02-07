<html>
<head><title>employee</title>
</head>
<body>
<form action="" method="POST">
    <center>

<table border="0" cellpadding="5" cellspacing="5">
    <tr>
        <td>Enter the Employee Id</td>
        <td><input type="text" name="emp_id"></td>
    </tr>
    <tr>
        <td>Enter the Employee name</td>
        <td><input type="text" name="emp_name"></td>
    </tr>
    <tr>
        <td>Enter the Job_name</td>
        <td><input type="text" name="job_name"></td>
    </tr>
    <tr>
        <td>Enter the Manager Id</td>
        <td><input type="text" name="manager_id"></td>
    </tr>
    <tr>
        <td>Enter the Salary</td>
        <td><input type="text" name="salary"></td>
    </tr>
    <tr>
    <td><center><input type="submit" name="submit" value="submit"></center></td>
</tr>
</table>
<?php
if(isset($_POST['submit']))
{
    $emp_id=$_POST['emp_id'];
    $emp_name=$_POST['emp_name'];
    $job_name=$_POST['job_name'];
    $manager_id=$_POST['manager_id'];
    $salary=$_POST['salary'];
    $conn=mysqli_connect("localhost","root","","empdb");
    if($conn)
    {
        echo("sucessfully connected");
        echo "<br>";
    }
    else
    {
       echo("error");
       echo"<br>";
    }
    $query="INSERT INTO emp_tb(emp_id,emp_name,job_name,manager_id,salary) VALUES('{$emp_id}','{$emp_name}','{$job_name}','{$manager_id}','{$salary}')";
if(mysqli_query($conn,$query))
{
    echo("Sucessfully inserted");
    echo"<br>";
}
else
{
 echo("inserton failed");
 echo"<br>";
}

}
 
?>
 <?php
 if(isset($_POST['submit']))
 {
     $conn=mysqli_connect("localhost","root","","empdb");
     ?>
     <table border="1" cellpadding="5" cellspacing="5">
         <th>Employee_name</th>
         <th>Salary</th></tr>
         <?php
     $search="SELECT emp_name,salary FROM emp_tb WHERE salary>35000";
     $res=mysqli_query($conn,$search);
     while($result=mysqli_fetch_assoc($res))
     {
         ?>
        <tr>
         <td><?php echo $result["emp_name"];?></td>
        <td><?php echo $result["salary"];?></td>
        </tr>
        <?php

     }
    }


?>
</form>
</center>
</body>
</html>