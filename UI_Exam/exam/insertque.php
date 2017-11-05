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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>

<div id="registration-form" style="width:400px;height:400px">
	<div class='fieldset'>
    <legend>Insert Question</legend>
		<form  method="post" action="">
		<a href="admindash.php">Back</a><br/><br/>
			<div class='row'>
			Test Name :<select name="name" value="">
<option name ="array" value="array">Array</option>
<option value="stack">Stack</option>
<option value="queue">Queue</option>
<option value="linked">Linked</option>
</select><br><br>
			 <input type="text" placeholder="Insert question" name='que' value=""><br><br>
		     <center><input type="submit"  name='submit' value="submit"></center>
			</div>
</form>
</div>
</div>
</body>
</html>		
<?php
$que="";

if(isset($_POST['submit']))
{
$que=$_POST['que'];
$drop=$_POST['name'];
	if($drop=="array")
{

$sql="insert into arrayque(question) VALUES('$que')";
mysql_query($sql);
{
	
}
}
}
?>	
<?php
$que="";

if(isset($_POST['submit']))
{
$que=$_POST['que'];
$drop=$_POST['name'];
	if($drop=="stack")
{

$sql="insert into stackquestion(question) VALUES('$que')";
mysql_query($sql);
{
	
}
}
}
?>	
<?php
$que="";

if(isset($_POST['submit']))
{
$que=$_POST['que'];
$drop=$_POST['name'];
	if($drop=="queue")
{

$sql="insert into queuequestion(question) VALUES('$que')";
mysql_query($sql);
{
	
}
}
}
?>	
<?php
$que="";

if(isset($_POST['submit']))
{
$que=$_POST['que'];
$drop=$_POST['name'];
	if($drop=="linked")
{

$sql="insert into linkedquestion(question) VALUES('$que')";
mysql_query($sql);
{
	
}
}
}
?>	
