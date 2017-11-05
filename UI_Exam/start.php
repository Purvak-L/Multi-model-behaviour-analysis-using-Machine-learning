<?php
include("config.php");
?>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style1.css">
<script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
</head>
<body>
<?php session_start();
?>
<div id="registration-form" style="width:700px;height:700px">
	<div class='fieldset'>
    <legend></legend>
		<form  method="post" action="">
		<center><h3><b>IA Test</b></h3></center><br><br>
		<center><table>
    <tr><td><b> </b><td><td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Start" style="width:200px;height:40px" name="btn1d"></td></tr>
	 <!-- <tr><td><b>Section B</b><td><td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Section B" style="width:200px;height:40px" name="btn2d"></td></tr>
	<tr><td><b>Section C</b><td><td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Section C" style="width:200px;height:40px" name="btn3d"></td></tr>
     <tr><td><b>Section D</b><td><td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Section D" style="width:200px;height:40px" name="btn4d"></td></tr>
	<tr><td><b>Section E</b><td><td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Section E" style="width:200px;height:40px" name="btn4m"></td></tr>
	
	
	<tr><td><b>Result</b><td><td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Result" style="width:200px;height:40px" name="res"></td></tr>	//-->
	
		</table></center><br> <br>  <br>  <br>
  
		</form>
		
	</div>
</div>
</body>
</html>	

<?php

if(isset($_POST['btn1d']))
{
date_default_timezone_set('Asia/Kolkata');
$today=date('h:i:s');
$_SESSION['timearr']=$today; 
	header('location:sectionA.php');
}
 
/*
if(isset($_POST['btn2d']))
{
date_default_timezone_set('Asia/Kolkata');
$today=date('h:i:s');
$_SESSION['timesta']=$today;
	header('location:stack6difficult.php');
}

if(isset($_POST['btn3d']))
{
	date_default_timezone_set('Asia/Kolkata');
$today=date('h:i:s');
$_SESSION['timeque']=$today;
	header('location:queue6difficult.php');
}

if(isset($_POST['btn4d']))
{
	date_default_timezone_set('Asia/Kolkata');
$today=date('h:i:s');
$_SESSION['timelin']=$today;
	header('location:linkedlist6difficult.php');
}
if(isset($_POST['btn4m']))
{
	date_default_timezone_set('Asia/Kolkata');
$today=date('h:i:s');
$_SESSION['timelin']=$today;
	header('location:linkedlist6medium.php');
}

if(isset($_POST['res']))
{
		header('location:result_display.php');
}
 */
?>