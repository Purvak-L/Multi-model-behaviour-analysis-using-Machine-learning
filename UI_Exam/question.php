<?php
include("config.php");
?>

 


<?php

$form_value="";
$form_value1="";
$q_no="";
$question="";
$option="";
$name="";
$stud="";
$_SESSION="";
$student="";
$stud1="";
$count="0";
$totalsolve="0";



if (isset($_POST['submit']))
{
	
$date="";
$time="";
$time=$_POST['time'];
$date=$_POST['date'];
$stud=$_POST['student'];
$question=$_POST['q_no'];
$option =$_POST['option_selected1'];
$correct=$_POST['corr_opt1'];
$option1 =$_POST['option_selected2'];
$correct1=$_POST['corr_opt2'];
$option2 =$_POST['option_selected3'];
$correct2=$_POST['corr_opt3'];
$option3 =$_POST['option_selected4'];
$correct3=$_POST['corr_opt4'];
$option4 =$_POST['option_selected5'];
$correct4=$_POST['corr_opt5'];

     if (isset($_POST['option_selected1']))
	{
		$totalsolve=$totalsolve+"1";
      if($option==$correct)
        {
			
	         $count = $count + "1";       
     	}
	}
	
	 if (isset($_POST['option_selected2']))
	{
		$totalsolve=$totalsolve+"1";
      if($option1==$correct1)
        {
			
	          $count = $count + "1";
			
	    }
	}	
	if (isset($_POST['option_selected3']))
	{
		$totalsolve=$totalsolve+"1";
      if($option2==$correct2)
        {
		
	          $count = $count + "1";
			
	    }
	}
	if (isset($_POST['option_selected4']))
	{
		$totalsolve=$totalsolve+"1";
		if($option3==$correct3)
        {
			
	          $count = $count + "1";
			
	    }
	}
	if (isset($_POST['option_selected5']))
	{
		$totalsolve=$totalsolve+"1";
		if($option4==$correct4)
        {
			
	          $count = $count + "1";
			
	    }
	}
	

	
date_default_timezone_set('Asia/Kolkata');
$today1=date('h:i:s');
$_SESSION['time1']=$today1;

$query = "INSERT INTO tbexam_options(studentid,q_no,option_selected)VALUES('$stud','$question','$totalsolve')";
{
	
$sql="INSERT into tbexam_conduct(studentid,date,time_in,time_out,result) VALUES('$stud','$date','$time','{$_SESSION['time1']}','$count')";
 if(mysql_query($query))
 {
 if(mysql_query($sql))
 {
 echo"<script>alert('you solve $totalsolve question and your score is $count');</script>";
	
 }
 else
 {
	echo "<script>alert('Registration unsuccessfully');</script>";
 }
 
 }
}
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
<title></title>
</head>
<body>
<?php session_start();
date_default_timezone_set('Asia/Kolkata');
$date1=date('y-m-d');
$_SESSION['date1']=$date1;

?>
<div id="registration-form" >
	<div class='fieldset'>
    <legend>welcome <?php echo $_SESSION['name']; ?></legend>
	  
		<form action="" method="post" width="500px">
		<input type="hidden" name="time" width="20%" value="<?php echo $_SESSION['time'];?>">
	 <input type="hidden" name="date" width="20%" value="<?php echo $_SESSION['date'];?>">
         <input type="hidden" name="student" value="<?php echo $_SESSION['stud'];?>"><br>
			<div>
			<label name="question">1.The memory address of the first element of an array is called__?<br></label><br>
				<input type="radio" name="option_selected1" value="A">A: Floor address     <br>
				<input type="radio" name="option_selected1" value="B">B: Foundation address   <br>
				<input type="radio" name="option_selected1" value="C">C: First address <br>
				<input type="radio" name="option_selected1" value="D">D: Base address<br><br>
				<input type="hidden" name="corr_opt1" value="D">
			</div>
			<div>
			<label name="question">2.Two dimensional arrays are also called __?<br></label><br>
				<input type="radio" name="option_selected1" value="A">A: Tables arrays   <br>
				<input type="radio" name="option_selected1" value="B">B: Matrix arrays    <br>
				<input type="radio" name="option_selected1" value="C">C: Both of above   <br>
				<input type="radio" name="option_selected1" value="D">D: None of above<br><br>
				<input type="hidden" name="corr_opt1" value="C">
			</div>
			<div>
	 
	 <div>
			<label name="question">3.Array is an example of ________ data structure<br></label><br>
				<input type="radio" name="option_selected1" value="A">A:  Linear Data Structure       <br>
				<input type="radio" name="option_selected1" value="B">B: Non Linear Data Structure  <br>
				<input type="radio" name="option_selected1" value="C">C: Dsitributed Data Structure<br>
				<input type="radio" name="option_selected1" value="D"> D: None of these<br><br>
				<input type="hidden" name="corr_opt1" value="A">
			</div>
			
			<div>
			<label name="question">4.An array elements are always stored in ________ memory locations.  <br></label><br>
				<input type="radio" name="option_selected1" value="A">A: Random  <br>
				<input type="radio" name="option_selected1" value="B">B:Linear   <br>
				<input type="radio" name="option_selected1" value="C">C: Sequential <br>
				<input type="radio" name="option_selected1" value="D">D: None of these   <br><br>
				<input type="hidden" name="corr_opt1" value="C">
			</div>
			
			<div>
			<label name="question">5.Linear arrays are also called ?<br></label><br>
				<input type="radio" name="option_selected1" value="A">A: Straight Array     <br>
				<input type="radio" name="option_selected1" value="B">B: One dimensional Array<br>
				<input type="radio" name="option_selected1" value="C">C: Vertical Array<br>
				<input type="radio" name="option_selected1" value="D"> D: Horizontal Array<br><br>
				<input type="hidden" name="corr_opt1" value="B">
			</div>
			<div>
			<div>
			<center><input type="submit" name="submit" value="submit"></center>
			</div>
		</form>
	</div>
</div>
</body>
</html>


