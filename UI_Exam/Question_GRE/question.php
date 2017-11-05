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
			<label name="question">1.The number 0.127 is how much greater than 1/8?<br></label><br>
				<input type="radio" name="option_selected1" value="A">A:  ½      <br>
				<input type="radio" name="option_selected1" value="B">B: 2/10    <br>
				<input type="radio" name="option_selected1" value="C">C:  1/50  <br>
				<input type="radio" name="option_selected1" value="D">D: 1/500  <br><br>
				<input type="hidden" name="corr_opt1" value="D">
			</div>
			<div>
			<label name="question">2.x = y - (50/y), where x and y are both > 0 
If the value of y is doubled in the equation above, the value of x will?<br></label><br>
				<input type="radio" name="option_selected1" value="A">A: stay the same    <br>
				<input type="radio" name="option_selected1" value="B">B:  increase four fold    <br>
				<input type="radio" name="option_selected1" value="C">C: double    <br>
				<input type="radio" name="option_selected1" value="D">D:  increase to more than double<br><br>
				<input type="hidden" name="corr_opt1" value="D">
			</div>
			<div>
	 
	 <div>
			<label name="question">3.The number of degrees that the hour hand of a clock moves through between noon and 2.30 in the afternoon of the same day is<br></label><br>
				<input type="radio" name="option_selected1" value="A">A:  720      <br>
				<input type="radio" name="option_selected1" value="B">B:  180 <br>
				<input type="radio" name="option_selected1" value="C">C: 75<br>
				<input type="radio" name="option_selected1" value="D"> D: 65<br><br>
				<input type="hidden" name="corr_opt1" value="C">
			</div>
			
			<div>
			<label name="question">4. If an object travels at five feet per second, how many feet does it travel in one hour?  <br></label><br>
				<input type="radio" name="option_selected1" value="A">A:   1400<br>
				<input type="radio" name="option_selected1" value="B">B:  1600<br>
				<input type="radio" name="option_selected1" value="C">C:  80<br>
				<input type="radio" name="option_selected1" value="D">D: 18000   <br><br>
				<input type="hidden" name="corr_opt1" value="D">
			</div>
			
			<div>
			<label name="question">5. ( v2 - v3 )² =?<br></label><br>
				<input type="radio" name="option_selected1" value="A">A:5 - 2v6     <br>
				<input type="radio" name="option_selected1" value="B">B: 5 - v6 <br>
				<input type="radio" name="option_selected1" value="C">C: 1 - 2v6 <br>
				<input type="radio" name="option_selected1" value="D"> D:1 <br><br>
				<input type="hidden" name="corr_opt1" value="A">
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


