<?php
include("config.php");
?>
<?php
session_start();
?>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<div id="registration-form" style="width:400px;height:400px">
	<div class='fieldset'>
    <legend>Student Login</legend>
		<form  method="post" action="">
			<div class='row'>
				<input type="text" placeholder="Student Id" name='stud' required="required">
			
			</div>
			<?php
			 if(isset($_POST['stud']))
				$_SESSION['stud']=$_POST['stud'];
			?>
			<div class='row'>
				<input type="text" placeholder="Name"  name='name' required="required">
			
			</div>
			<?php 
			if(isset($_POST['name']))
				$_SESSION['name']=$_POST['name'];
			?>
			
				<center><input type="submit" value="Login" name='login' ></center><br>
			
			<a href="register.php">Register Here</a>
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
$student=$_POST[stud];
$name=$_POST[name];
$sql="select * from tbstudent where studentid='$student'and name='$name'";

$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) 
{
    echo "Success!";
	$query="insert into tb_id(id)VALUES('$student')";
	$result=mysql_query($query);
     header('location:paper.php');
	
} 
else
{
    echo "<script>alert('Register yourself')</script>";
}
}
?>

