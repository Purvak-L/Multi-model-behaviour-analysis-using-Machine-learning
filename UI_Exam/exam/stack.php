<?php
include("config.php");
?>

 
<?php 
session_start();


?>

<?php

$form_value="";
$form_value1="";
$q_no="";
$question="";
$option="";
$name="";
$stud="";
$student="";
$stud1="";
$count="0";
$totalsolve="0";

$qno="";
$qno1="";
$qno2="";
$qno3="";
$qno4="";
$test="";


if (isset($_POST['submit']))
{

$sub=$_POST['sub'];
$sub1=$_POST['sub1'];
$sub2=$_POST['sub2'];
$sub3=$_POST['sub3'];
$sub4=$_POST['sub4'];


$time=$_POST['time'];
$date=$_POST['date'];
$test=$_POST['test'];
$stud=$_POST['stud'];
$question=$_POST['question1'];
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
			
	         $count= $count+ "1";       
     	}
	}
	
	 if (isset($_POST['option_selected2']))
	{
		$totalsolve=$totalsolve+"1";
      if($option1==$correct1)
        {
			
	          $count= $count + "1";
			
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
	
	$_SESSION['totalsolve']="$totalsolve";
	$_SESSION['count']="$count";
	//for status of marks
	if($count==5)
	{
		$c="your score is excellent";
	}
	if($count==4)
	{
		$c="your score is confident";
	}
	if($count==3)
	{
		$c="your score is intelligent";
	}
	if($count==2)
	{
		$c="your score is confused";
	}
	if($count==1)
	{
		$c="your score is bored";
	}
	if($count==0)
	{
		$c="your score is poor";
	}
	
	date_default_timezone_set('Asia/Kolkata');
$today=date('h:i:s');
$_SESSION['time1']=$today; 
	
date_default_timezone_set('Asia/Kolkata');
$date1=date('y-m-d');
$_SESSION['date1']=$date1;

$sql="INSERT into tbexam_conduct(studentid,paper_name,date,time_in,time_out,result) VALUES('$stud','$test','$date','$time','{$_SESSION['time1']}','$count')";

{
	
 if(mysql_query($sql))
 {
 echo"<script>alert('you solve $totalsolve question\\nyour score is $count');</script>";
//header("location:sub.php");
}
 else
 {
	echo "<script>alert('Registration unsuccessfully');</script>";
 }
 
 }
$input = array("$sub","$sub1","$sub2","$sub3","$sub4");
$c = array_count_values($input);
$key = array_search(max($c), $c);

//to calculate percentage
$string = implode(';',$c);
//echo"$string";
$value=print_r(str_split("$string"),true);
//echo"$value";
$per=print_r($string[0],true);
//echo"$per";
$totalper=$per/5*100;
$add=$key." ". $totalper. '%';
$finalper= "you are $add";
$query="INSERT into final(id,test_name,Q1status,Q2status,Q3status,Q4status,Q5status,overallstatus,overallper) VALUES('$stud','$test','$sub','$sub1','$sub2','$sub3','$sub4','$key','$finalper')";
if(mysql_query($query))
{
	
}
}
//when clicked on hint1 button
if(isset($_POST['hint']))
{
$test=$_POST['test'];
$stud=$_POST['stud'];
$qno=$_POST['qno'];
$qno1=$_POST['qno1'];
$qno2=$_POST['qno2'];
$qno3=$_POST['qno3'];
$qno4=$_POST['qno4'];
	$sql="insert into hint(id,test_taken,qno,hint_select) VALUES('$stud','$test','$qno','yes')";
	
	if(mysql_query($sql))
	{
		
	}	
}
if(isset($_POST['hint1']))
{
	$test=$_POST['test'];
$stud=$_POST['stud'];
$qno=$_POST['qno'];
$qno1=$_POST['qno1'];
$qno2=$_POST['qno2'];
$qno3=$_POST['qno3'];
$qno4=$_POST['qno4'];
	$sql="insert into hint(id,test_taken,qno,hint_select) VALUES('$stud','$test','$qno1','yes')";
	
	if(mysql_query($sql))
	{
		
	}	
}
if(isset($_POST['hint2']))
{
	$test=$_POST['test'];
$stud=$_POST['stud'];
$qno=$_POST['qno'];
$qno1=$_POST['qno1'];
$qno2=$_POST['qno2'];
$qno3=$_POST['qno3'];
$qno4=$_POST['qno4'];
	$sql="insert into hint(id,test_taken,qno,hint_select) VALUES('$stud','$test','$qno2','yes')";
	
	if(mysql_query($sql))
	{
		
	}	
}

if(isset($_POST['hint3']))
{
$test=$_POST['test'];
$stud=$_POST['stud'];
$qno=$_POST['qno'];
$qno1=$_POST['qno1'];
$qno2=$_POST['qno2'];
$qno3=$_POST['qno3'];
$qno4=$_POST['qno4'];
	$sql="insert into hint(id,test_taken,qno,hint_select) VALUES('$stud','$test','$qno3','yes')";
	
	if(mysql_query($sql))
	{
		
	}	
}
if(isset($_POST['hint4']))
{
	$test=$_POST['test'];
$stud=$_POST['stud'];
$qno=$_POST['qno'];
$qno1=$_POST['qno1'];
$qno2=$_POST['qno2'];
$qno3=$_POST['qno3'];
$qno4=$_POST['qno4'];
	$sql="insert into hint(id,test_taken,qno,hint_select) VALUES('$stud','$test','$qno4','yes')";
	
	if(mysql_query($sql))
	{
		
	}	
}
if (isset($_POST['next']))
{
	header('location:paper.php');
}
?>



<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
<title></title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
</head>
<body>


		<form action="" method="post" width="500px">
		<div id="registration-form" >
	<div class='fieldset'>
    <legend>welcome <?php echo $_SESSION['name']; ?></legend>
	 <input type="hidden" name="test" value="Stack test">
	  <input type="hidden" name="time" value="<?php echo$_SESSION['timearr'];?>">
	  <input type="hidden" name="stud" value="<?php echo$_SESSION['stud'];?>">
	   <input type="hidden" name="date" value="<?php echo$_SESSION['date1'];?>">
	
	  <h3>Time Remaining<h3>
	  
<div id="clockdiv">
  
  <div>
    <span class="minutes"></span>
    <div class="smalltext">Mins</div>
  </div>
  <div>
    <span class="seconds"></span>
    <div class="smalltext">Secs</div>
  </div>
</div>
<!--<!-- css for  timer   -->
<style>
#clockdiv{
	font-family: sans-serif;
	color: #fff;
	display: inline-block;
	font-weight: 10;
	text-align: center;
	font-size: 12px;
	
}
#clockdiv >div{
	padding: 5px;
	border-radius: 7px;
	background: #456391;
	display: inline-block;
	
}

#clockdiv div >span{
	padding: 5px;
	border-radius: 3px;
	background: #c4d5ef;
	display: inline-block;
	align:right;
}

.smalltext{
padding-top: 3px;
font-size: 8px;
}        


</style>
<!--<!-- Javascript for  timer   -->
<script>
function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 10);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    return {
    'total': t,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

     minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 10 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);
</script>    		
	<center><h2>Stack Test</center></h2>
        
			<div>
			<input type="hidden" name="qno" value="Q1">
			<input type="text" name="question1" value="1.On which principle does stack work?">
			<input type="submit"  name="hint" value="Hint" style="width:10%; height:40px ;color:#ffffff;border-radius:10px;border:none"><br>
				<input type="radio" name="option_selected1" value="stckQ1A">A: FILO   <br>
				<input type="radio" name="option_selected1" value="stckQ1B">B: FIFO  <br>
				<input type="radio" name="option_selected1" value="stckQ1C">C: LILO  <br>
				<input type="radio" name="option_selected1" value="stckQ1D">D: LIFO/FILO <br><br>
				<input type="hidden" name="corr_opt1" value="stckQ1D">
				<input type="hidden" name="sub" id="add" value="">
			<?php
			 if(isset($_POST['sub']))
				$_SESSION['sub']=$_POST['sub'];
			?>
								
</div>
<script>
$(document).ready(function(){
 $('input[type="radio"]').click(function(){
 var option_selected1 = $(this).val();
 $.ajax({
 url:"insert.php",
 method:"POST",
 data:{option_selected1:option_selected1},
 success: function(data){
 $('#result').html(data);
 }
 });
 });
});

</script>
<script>
var count5 = 0
$('input[name=option_selected1]').click(function() {
	
  count5++
 // $('#clicked').text(count); // update text
	if(count5=="5")
	{ 
		document.getElementById('add').value = "boredom";
		
	}
	if(count5=="4")
	{
		document.getElementById('add').value = "Frustrated";  
	}
   if(count5=="3")
	{
		document.getElementById('add').value= "confuse";  
	}
	if(count5=="2")
	{
		document.getElementById('add').value= "excitement";  
	}
	if(count5=="1")
	{
		document.getElementById('add').value = "confident";  
	}
});
</script>
		<div>
		<input type="hidden" name="qno1" value="Q2">
			<input type="text" name="question1" value="2.Can stack be described as a pointer?">
			<input type="submit"  name="hint1" value="Hint" style="width:10%; height:40px ;color:#ffffff;border-radius:10px;border:none"><br>
				<input type="radio" name="option_selected2" value="stckQ2A">A: Yes <br>
				<input type="radio" name="option_selected2" value="stckQ2B">B: No<br>
				<input type="radio" name="option_selected2" value="stckQ2C">C: Cant decide<br>
				<input type="radio" name="option_selected2" value="stckQ2D">D: Depends<br><br>
				<input type="hidden" name="corr_opt2" value="stckQ2A">
                 <input type="hidden" name="sub1" id="add1" value="">
			<?php
			 if(isset($_POST['sub1']))
				$_SESSION['sub1']=$_POST['sub1'];
			?>
</div>
<script>
var count1 = 0
$('input[name=option_selected2]').click(function() {
	
  count1++
  //$('#clicked1').text(count); // update text
	if(count1=="5")
	{ count1="0";
		document.getElementById('add1').value = "boredom";
	}
	if(count1=="4")
	{
		document.getElementById('add1').value = "Frustrated";  
	}
   if(count1=="3")
	{
		document.getElementById('add1').value = "confuse";  
	}
	if(count1=="2")
	{
		document.getElementById('add1').value = "excitement";  
	}
	if(count1=="1")
	{
		document.getElementById('add1').value= "confident";  
	}
});
</script>
			<div>
			<input type="hidden" name="qno2" value="Q3">
			<input type="text" name="question1" value="3.What is the result of the following operation Top (Push (S, X))?">
			<input type="submit"  name="hint2" value="Hint" style="width:10%; height:40px ;color:#ffffff;border-radius:10px;border:none"><br>
				<input type="radio" name="option_selected3" value="stckQ3A">A: X <br>
				<input type="radio" name="option_selected3" value="stckQ3B">B:Null<br>
				<input type="radio" name="option_selected3" value="stckQ3C">C:S<br>
				<input type="radio" name="option_selected3" value="stckQ3D">D:None of these<br><br>
				<input type="hidden" name="corr_opt3" value="stckQ3A">
				 <input type="hidden" name="sub2" id="add2" value="">
			<?php
			 if(isset($_POST['sub2']))
				$_SESSION['sub2']=$_POST['sub2'];
			?>
	</div>
	<script>
var count2 = 0
$('input[name=option_selected3]').click(function() {
  count2++
 // $('#clicked2').text(count); // update text
	if(count2=="5")
	{ count2="0";
		document.getElementById('add2').value = "boredom";
	}
	if(count2=="4")
	{
		document.getElementById('add2').value = "Frustrated";  
	}
   if(count2=="3")
	{
		document.getElementById('add2').value = "confuse";  
	}
	if(count2=="2")
	{
		document.getElementById('add2').value = "excitement";  
	}
	if(count2=="1")
	{
		document.getElementById('add2').value = "confident";  
	}
});
</script>	
			
			<div>
			<input type="hidden" name="qno3" value="Q4">
			<input type="text" name="question1" value="4.The largest element of an array index is called its __?">
			<input type="submit"  name="hint3" value="Hint" style="width:10%; height:40px ;color:#ffffff;border-radius:10px;border:none"><br>
				<input type="radio" name="option_selected4" value="stckQ4A">A:lower bound  <br>
				<input type="radio" name="option_selected4" value="stckQ4B">B:range <br>
				<input type="radio" name="option_selected4" value="stckQ4C">C:upper bound<br>
				<input type="radio" name="option_selected4" value="stckQ4D">D:none of these <br><br>
				<input type="hidden" name="corr_opt4" value="stckQ4C">
				 <input type="hidden" name="sub3" id="add3" value="">
			<?php
			 if(isset($_POST['sub3']))
				$_SESSION['sub3']=$_POST['sub3'];
			?>
					</div>
			<script>
var count3 = 0
$('input[name=option_selected4]').click(function() {
	
  count3++
 // $('#clicked3').text(count); // update text
	if(count3=="5")
	{ 
		document.getElementById('add3').value = "boredom";
		count3="0";
	}
	if(count3=="4")
	{
		document.getElementById('add3').value = "Frustrated";  
	}
   if(count3=="3")
	{
		document.getElementById('add3').value = "confuse";  
	}
	if(count3=="2")
	{
		document.getElementById('add3').value = "excitement";  
	}
	if(count3=="1")
	{
		document.getElementById('add3').value = "confident";  
	}
});
</script>
			<div>
			<input type="hidden" name="qno4" value="Q5">
			<input type="text" name="question1" value="5.Which is/are the application(s) of stack? ">
			<input type="submit"  name="hint4" value="Hint" style="width:10%; height:40px ;color:#ffffff;border-radius:10px;border:none"><br>
				<input type="radio" name="option_selected5" value="stckQ5A">A: Function calls  <br>
				<input type="radio" name="option_selected5" value="stckQ5B">B: Large number Arithmetic<br>
				<input type="radio" name="option_selected5" value="stckQ5C">C: Evaluation of arithmetic expressions<br>
				<input type="radio" name="option_selected5" value="stckQ5D">D:All of the above<br><br>
				<input type="hidden" name="corr_opt5" value="stckQ5B">
				 <input type="hidden" name="sub4" id="add4" value="">
			<?php
			 if(isset($_POST['sub4']))
				$_SESSION['sub4']=$_POST['sub4'];
			?>
			</div>
			<script>
var count4 = 0
$('input[name=option_selected5]').click(function() {
	
  count4++
  //$('#clicked4').text(count); // update text
	if(count4=="5")
	{ 
		document.getElementById('add4').value = "boredom";
		count4="0";
	}
	if(count4=="4")
	{
		document.getElementById('add4').value = "Frustrated";  
	}
   if(count4=="3")
	{
		document.getElementById('add4').value = "confuse";  
	}
	if(count4=="2")
	{
		document.getElementById('add4').value = "excitement";  
	}
	if(count4=="1")
	{
		document.getElementById('add4').value = "confident";  
	}
});
</script>
			<div>
			<center><input type="submit" name="submit" value="Submit" style="width:120px;align:left;height:45px"></center><br><br>
			</div>
			<div>
			<center><input type="submit"  name="next" value="Next Test" style="width:125px;align:right;height:45px"></center><br><br>
			</div>
			<legend></legend>
		</form>
		
	</div>
</div>
</body>
</html>


