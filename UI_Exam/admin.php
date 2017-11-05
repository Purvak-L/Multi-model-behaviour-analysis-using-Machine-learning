<?php
include("config.php");
?>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<div id="registration-form" style="width:400px;height:400px">
	<div class='fieldset'>
    <legend>Admin Login</legend>
		<form  method="post" action="">
			<div class='row'>
				<input type="text" placeholder="Admin Id" name='name' required="required">
			
			</div>
			
			<div class='row'>
				<input type="password" placeholder="Password"  name='pass' width="40px" required="required">
			
			</div>
			
			<div class='row'>
				<center><input type="submit" value="Login"  name='login' ></center>
			</div>
		</form>
	</div>
</div>
</body>
</html>	
<?php
$stud="";
$name="";
if(isset($_POST['login']))
{
$name=$_POST[name];
$pass=$_POST[pass];
$sql="select * from admin where name='$name'and pass='$pass'";

$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) 
{

	$result=mysql_query($query);
     header('location:admindash.php');
	
} 
else
{
    echo "<script>alert('Register yourself')</script>";
}
}
?>

