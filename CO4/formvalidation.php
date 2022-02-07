<?php
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $emailid=$_POST['emailid'];
    $phonenumber=$_POST['phonenumber'];
    $uppercase=preg_match('@[A-Z]@', $password);
    $lowercase=preg_match('@[a-z]@', $password);
    $number=preg_match('@[0-9]@', $password);
    $number1=preg_match('@[0-9]@', $phonenumber);
    $conn=mysqli_connect("localhost","root","","sample1");
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
if($username==""){
echo "please fill the username <br>";
}
if( $password=="" && strlen($password) < 8){
echo "Password should be at least 8 characters in length <br>";
}
else if( !$uppercase || !$lowercase || !$number ) {
echo "password should include at least one upper case letter, one number, and one special character.<br>";
}
else{
echo "Strong password.<br>";
}
if($emailid==""){
echo "please fill the email id<br>";
}
if($phonenumber==""){
echo " please fill the phone number<br>";
}
else if(strlen($phonenumber)<10){
echo "please fill correct phone number <br> "; 
}
else{
echo "phone number is correct<br>";
}
}
$query="INSERT INTO sample12(username,pass,emailid,phonenumber) VALUES('{$username}','{$password}''{$emailid}''{$phonenumber}')";
if(mysqli_query($conn,$query))
{
    echo("Sucessfully connected");
    echo"<br>";
}
else
{
 echo("inserton failed");
 echo"<br>";
}
$search="SELECT * FROM sample12";
$data=mysqli_query($conn,$search);
while($res=mysqli_fetch_assoc($data))
{
    echo $res['username'],' ';
    echo $res['pass'],' ';
    echo $res['emailid'],' ';
    echo $res['phonenumber'],' ';
    
}
?>
<html>
<body>
<form action="" method="POST">
    <table>
        <tr>
    <td>Username:<input type="text" name="username"><br><br></td></tr>
    <tr><td>Password:<input type="password" name="pass"><br><br></td></tr>
   <tr><td>Phone number:<input type="number" name="phonenumber"><br><br></td></tr>
   <tr><td>Emailid:<input type="text" name="emailid"><br><br></td></tr>
 <tr> <td> <center><input type="submit" name="submit"></center></td></tr>
</form></table>
</body>
</html>
