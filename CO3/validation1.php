<?php
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $pass=$_POST['password'];
    $Email_id=$_POST['emailid'];
    $phonenumber=$_POST['phonenumber'];
    $uppercase=preg_match('@[A-Z]@', $pass);
    $lowercase=preg_match('@[a-z]@', $pass);
    $number=preg_match('@[0-9]@', $pass);
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
if( $pass=="" && strlen($pass) < 8){
echo "Password should be at least 8 characters in length <br>";
}
else if( !$uppercase || !$lowercase || !$number ) {
echo "password should include at least one upper case letter, one number, and one special character.<br>";
}
else{
echo "Strong password.<br>";
}
if($Email_id==""){
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

$query="INSERT INTO sample12(username,pass,Email_id,Phonenumber) VALUES('{$username}','{$pass}','{$Email_id}','{$phonenumber}')";
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

}
?>
<html>
<body>
<form action="" method="POST">
    <table border="0" cellspacing="5" cellpadding="5">
        <tr>
    <td>Username:<input type="text" name="username"><br><br></td></tr>
    <tr><td>Password:<input type="password" name="password"><br><br></td></tr>
    <tr><td>Emailid:<input type="text" name="emailid"><br><br></td></tr>
   <tr><td>Phone number:<input type="number" name="phonenumber"><br><br></td></tr>
  <tr> <td> <center><input type="submit" name="submit"></center></td></tr>
</form></table>
</body>
</html>
