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



<div id="result" style="width:400px;height:400px">
	<div class='fieldset'>
    <legend>Result</legend>
		<form  method="post" action="">
			<div class='row'>
				<input type="text" placeholder="Student Id" name='stud' required="required">
			
			</div>
			<?php
			 if(isset($_POST['stud']))
				$_SESSION['stud']=$_POST['stud'];

			?>
						
				<input type="submit" value="enter" name='enter' ><br>
				
			
		
			<legend></legend>
		</form>
			
		</form>
	</div>
</div>
</body>
</html>	
<?php
$student="";
$stud="";
$name="";
$space=" ";

if(isset($_POST['enter']))
{
$student=$_POST['stud'];

$sql="select * from answer_record where s_id='$student'";

$result=mysql_query($sql);
// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);
// If result matched $username  table row must be 1 row

//$count=$result->num_rows;

$num=mysql_numrows($result);

echo "<b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Question wise result<br></b>";
$i=0;
while ($i < $num) {
	echo "<b> $space &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp$space </b> ";
$field1= mysql_result($result,$i,"s_id");
$field2=mysql_result($result,$i,"test_type");
$field3=mysql_result($result,$i,"res");
echo "<b> $field1 &nbsp &nbsp $field2  &nbsp &nbsp &nbsp $field3 </b> <br>";
$i++;}
 

$sql="select * from tbexam_conduct where studentid='$student'";

$total=mysql_query($sql);
$num=mysql_numrows($total);
echo "<b>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Total Score  <br></b>";
$tot=0; 
$i=0;
while ($i < $num) {
$fieldt=mysql_result($total,$i,"paper_name");
$fieldr= mysql_result($total,$i,"result");

echo "&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
echo "<b>$fieldt &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp $fieldr   <br></b>";
$tot=$tot+$fieldr;
$i++;}

echo " <b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Total &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp $tot <br> </b> ";

 
}


?>
