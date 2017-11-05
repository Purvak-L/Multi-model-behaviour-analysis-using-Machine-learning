
<?php
include("config.php");
?>

<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<div id="registration-form">
	<div class='fieldset'>
    <legend>Registration</legend>
		<form  method="post" action="">
			<div class='row'>
				<label for='studentid'>Student Id</label>
				<input type="text" placeholder="Student Id" name='studentid' required="required">
			</div>
			 <?php
			 // if(isset($_POST['studentid']))
				// $_SESSION['stud']=$_POST['studentid'];
			// ?>
			<div class='row'>
				<label for="name">Name</label>
				<input type="text" placeholder="Name"  name='name' required="required">
			</div>
			<?php 
			//if(isset($_POST['name']))
				//$_SESSION['name']=$_POST['name'];
			?>
			<div class='row'>
				<label for="class">Class</label>
				<input type="text" placeholder="Class" name='class'required="required">
			</div>
			<div class='row'>
				<label for="branch">Branch</label>
				<input type="text" placeholder="Branch" name='branch' required="required">
				</div>
			
			<center><input type="submit" name="submit" value="Register"></center>
		</form>
	</div>
</div>
</body>
</html>




<?php

if (isset($_POST['submit']))

{
	
$date1="";
$stud=$_POST['studentid'];
$name=$_POST['name'];
$class=$_POST['class'];
$branch=$_POST['branch'];

$query = "INSERT INTO tbstudent(studentid,name,class,branch) VALUES ('$stud','$name','$class','$branch')";


 if(mysql_query($query))
 {
 echo "<script>alert('Registration successfully');</script>";
 header('location:login.php');
/*  date_default_timezone_set('Asia/Kolkata');
$today=date('h:i:s');
$_SESSION['time']=$today; */


 }
 else
 {
	echo "<script>alert('Registration unsuccessfully');</script>";
 }


}
?>
