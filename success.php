<body bgcolor=c6fa56>
<br><br><br><br><br><br><br><br><br><br><br><br>
<h1 align=center>successfully registered!!</h1>
<h3 align=center>go to login page!!&nbsp&nbsp<a href=login.html>login</a></h3>
</body>
<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$email=$_POST['email'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root',null,'userdb');
$qry="insert into userdata values('$fname','$lname','$age','$email','$password')";

if(mysqli_query($con,$qry))
	Echo "";
else
	echo "error!!";
?>	
