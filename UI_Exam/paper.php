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
		<center><h3><b>Content Present In Test And Its Information</b></h3></center><br><br>
		<center><table>
    <tr><td><b>Array</b></td><td>&nbsp;&nbsp;<input type="submit" value="learn" style="width:100px;height:40px" name="button1"></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Solve" style="width:100px;height:40px" name="btn1"></td></tr>
    <tr><td><b>Stack</b></td><td>&nbsp;&nbsp;<input type="submit" value="learn" style="width:100px;height:40px" name="button2"></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Solve" style="width:100px;height:40px" name="btn2"></td></tr>    
    <tr><td><b>Queue</b></td><td>&nbsp;&nbsp;<input type="submit" value="learn" style="width:100px;height:40px" name="button3"> </td><td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Solve" style="width:100px;height:40px" name="btn3"></td></tr>   
    <tr><td><b>Linked List</b></td><td>&nbsp;&nbsp;<input type="submit" value="learn" style="width:100px;height:40px" name="button4"></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Solve" style="width:100px;height:40px" name="btn4"></td></tr>  
		</table></center><br> <br>  <br>  <br>
  
		</form>
	</div>
</div>
</body>
</html>	
<?php
if(isset($_POST['button1']))
{
	header('location:arrayinfo.php');
}
if(isset($_POST['button2']))
{
	header('location:stackinfo.php');
}
if(isset($_POST['button3']))
{
	header('location:queueinfo.php');
}
if(isset($_POST['button4']))
{
	header('location:linkedinfo.php');
}
if(isset($_POST['btn1']))
{
date_default_timezone_set('Asia/Kolkata');
$today=date('h:i:s');
$_SESSION['timearr']=$today; 
	header('location:array10q.php');
}
if(isset($_POST['btn2']))
{
date_default_timezone_set('Asia/Kolkata');
$today=date('h:i:s');
$_SESSION['timesta']=$today;
	header('location:stack.php');
}
if(isset($_POST['btn3']))
{
	date_default_timezone_set('Asia/Kolkata');
$today=date('h:i:s');
$_SESSION['timeque']=$today;
	header('location:queue.php');
}
if(isset($_POST['btn4']))
{
	date_default_timezone_set('Asia/Kolkata');
$today=date('h:i:s');
$_SESSION['timelin']=$today;
	header('location:linked.php');
}

?>