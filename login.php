<body bgcolor=c6fa56>
<br><br><br><br><br><br><br><br><br><br><br><br>
<h1 align=center>
<?php
$email=$_POST['email'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root',null,'userdb');
$qry="select * from userdata where email='$email' and password='$password'";
$x=mysqli_query($con,$qry);
if(mysqli_num_rows($x))
echo "User is available!";
else
echo "User not found!";	
?>
</h1>
<h3 align=center>go to login page!!&nbsp&nbsp<a href=login.html>login</a></h3>
</body>