<?php
include("config.php");
?>

 <?php session_start();


?>
 
<?php

// variable declarations 
$key="";
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
$time1="";
$total="";
$total1="";
$total2="";
$total3="";
$total4="";
$total6 = "";
$clickcount="";
$q1="";
$q2="";
$q3="";
$q4="";
$q5="";
$q6="";
$confusion="5";


if (isset($_POST['submit']))
{
//calculate overall score, answered correctly, $count maintains correct answers

 
$sub=$_POST['sub'];
$sub1=$_POST['sub1'];
$sub2=$_POST['sub2'];
$sub3=$_POST['sub3'];
$sub4=$_POST['sub4'];
$sub6 = $_POST['sub6'];

$test=$_POST['test'];
$stud=$_POST['stud'];
$qno=$_POST['qno'];
$qno1=$_POST['qno1'];
$qno2=$_POST['qno2'];
$qno3=$_POST['qno3'];
$qno4=$_POST['qno4'];
$qno6=$_POST['qno6'];

$time=$_POST['time'
];
$date=$_POST['date'];
 
 
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
$option6 =$_POST['option_selected6'];
$correct6=$_POST['corr_opt6'];

//$confusion=$_POST['conf'];
	


     if (isset($_POST['option_selected1']))
	{
		$totalsolve=$totalsolve+"1";
      if($option==$correct)
        {
			
	         $count= $count+ "1";  
				$q1 = "1";
     	}
		else $q1 ="0";
	}
	
	 if (isset($_POST['option_selected2']))
	{
		$totalsolve=$totalsolve+"1";
      if($option1==$correct1)
        {
			
	          $count= $count + "1";
			  $q2 = "1";
			
	    }
		else $q2 = "0";
	}	
	if (isset($_POST['option_selected3']))
	{
		$totalsolve=$totalsolve+"1";
      if($option2==$correct2)
        {
		
	          $count = $count + "1";
			  $q3 ="1";
			
	    }
		else $q3 ="0";
	}
	if (isset($_POST['option_selected4']))
	{
		$totalsolve=$totalsolve+"1";
		if($option3==$correct3)
        {
			
	          $count = $count + "1";
			  $q4 ="1";
			
	    }
		else $q4 ="0";
	}
	if (isset($_POST['option_selected5']))
	{
		$totalsolve=$totalsolve+"1";
		
		if($option4==$correct4)
        {
			
	          $count = $count + "1";
			  $q5 = "1";
			
	    }
		else $q5 ="0";
	}
	if (isset($_POST['option_selected6']))
	{
		$totalsolve=$totalsolve+"1";
		if($option6==$correct6)
        {
			
	          $count = $count + "1";
			  $q6= "1";
			
	    }
		else $q6 ="0";
	}
	 
	//enter in database per question choice and answered
	
	$sql="insert into answer_record(s_id,test_type,qno,option_entered,correct_option,res) VALUES('$stud','$test','$qno','$option','$correct','$q1')";
		if(mysql_query($sql))
	{
	
	}	
	$sql="insert into answer_record(s_id,test_type,qno,option_entered,correct_option,res) VALUES('$stud','$test','$qno1','$option1','$correct1','$q2')";
		if(mysql_query($sql))
	{
	
	}	
	$sql="insert into answer_record(s_id,test_type,qno,option_entered,correct_option,res) VALUES('$stud','$test','$qno2','$option2','$correct2','$q3')";
		if(mysql_query($sql))
	{
	
	}	
	$sql="insert into answer_record(s_id,test_type,qno,option_entered,correct_option,res) VALUES('$stud','$test','$qno3','$option3','$correct3','$q4')";
		if(mysql_query($sql))
	{
	
	}	
	$sql="insert into answer_record(s_id,test_type,qno,option_entered,correct_option,res) VALUES('$stud','$test','$qno4','$option4','$correct4','$q5')";
		if(mysql_query($sql))
	{
	
	}	
	$sql="insert into answer_record(s_id,test_type,qno,option_entered,correct_option,res) VALUES('$stud','$test','$qno6','$option6','$correct6','$q6')";
		if(mysql_query($sql))
	{
	
	}	
	
	
	$_SESSION['totalsolve']="$totalsolve";
	$_SESSION['count']="$count";
	//for status of marks
	/*if($count==5)
	{
		$c="your score is excellent";
	}
	 else if($count==4)
	{
		$c="your score is confident";
	}
	else if($count==3)
	{
		$c="your score is intelligent";
	}
	else if($count==2)
	{
		$c="your score is confused";
	}
	else if($count==1)
	{
		$c="your score is bored";
	}
	else if($count==0)
	{
		$c="your score is poor";
	} */
	// record time and date of examination
	date_default_timezone_set('Asia/Kolkata');
$today=date('h:i:s');
$_SESSION['time1']=$today; 


date_default_timezone_set('Asia/Kolkata');
$date1=date('y-m-d');
$_SESSION['date1']=$date1;

// insert into table tbexam_conduct



$sql= "INSERT into tbexam_conduct(studentid,paper_name,date,time_in,time_out,result,confusion_input) VALUES('$stud','$test','$date','$time','{$_SESSION['time1']}','$count','$confusion')";

{
	
 if(mysql_query($sql))
 {
	 
 echo"<script>alert('you solved $totalsolve questions\\n Q1 Q2 Q3 Q4 Q5 Q6 $q1 $q2 $q3 $q4 $q5 $q6 \\n your score is $count');</script>";
 
header("location:sectionB.php");
}
 else
 {
	echo "<script>alert('Registration unsuccessfully');</script>";
 }
}


//calculate timein and  timeout difference
$date = strtotime($today);
$date1 = strtotime($time);
$timefinal= $date-$date1;
$time1=round(abs($timefinal/60));

} 

if(isset($_POST['hintq1']))
{ 
  
$total=$total+1;
$_SESSION['$total']=$total;
$test=$_POST['test'];
$stud=$_POST['stud'];
$qno=$_POST['qno'];
$qno1=$_POST['qno1'];
$qno2=$_POST['qno2'];
$qno3=$_POST['qno3'];
$qno4=$_POST['qno4'];
$qno6=$_POST['qno6'];

  

	$sql="insert into hint(id,test_taken,qno,hint_select) VALUES('$stud','$test','$qno','yes')";
	
	if(mysql_query($sql))
	{
		
	}	
		
}
if(isset($_POST['hintq2']))
{
	$total1=$total1+1;
	
	$_SESSION['$total1']=$total1;
$test=$_POST['test'];
$stud=$_POST['stud'];
$qno=$_POST['qno'];
$qno1=$_POST['qno1'];
$qno2=$_POST['qno2'];
$qno3=$_POST['qno3'];
$qno4=$_POST['qno4'];
$qno6=$_POST['qno6'];

	$sql="insert into hint(id,test_taken,qno,hint_select) VALUES('$stud','$test','$qno1','yes')";
	{
	$total="0";
	if(mysql_query($sql))
	{
	}	
	}	
}
if(isset($_POST['hintq3']))
{
	$total2=$total2+"1";
	$_SESSION['$total2']=$total2;
	$test=$_POST['test'];
$stud=$_POST['stud'];
$qno=$_POST['qno'];
$qno1=$_POST['qno1'];
$qno2=$_POST['qno2'];
$qno3=$_POST['qno3'];
$qno4=$_POST['qno4'];
$qno6=$_POST['qno6'];

	$sql="insert into hint(id,test_taken,qno,hint_select) VALUES('$stud','$test','$qno2','yes')";
	{
	if(mysql_query($sql))
	{
	}	
	}	
}

if(isset($_POST['hintq4']))
{
	$total3=$total3+"1";
	$_SESSION['$total3']=$total3;
$test=$_POST['test'];
$stud=$_POST['stud'];
$qno=$_POST['qno'];
$qno1=$_POST['qno1'];
$qno2=$_POST['qno2'];
$qno3=$_POST['qno3'];
$qno4=$_POST['qno4'];
$qno6=$_POST['qno6'];

	$sql="insert into hint(id,test_taken,qno,hint_select) VALUES('$stud','$test','$qno3','yes')";
	{
	if(mysql_query($sql))
	{
	}	
	}	
}
if(isset($_POST['hintq5']))
{
	$total4=$total4+"1";
	$_SESSION['$total4']=$total4;
	$test=$_POST['test'];
$stud=$_POST['stud'];
$qno=$_POST['qno'];
$qno1=$_POST['qno1'];
$qno2=$_POST['qno2'];
$qno3=$_POST['qno3'];
$qno4=$_POST['qno4'];
$qno6=$_POST['qno6'];

	$sql="insert into hint(id,test_taken,qno,hint_select) VALUES('$stud','$test','$qno4','yes')";
	{
	if(mysql_query($sql))
	{
	}	
	}	
}

if(isset($_POST['hintq6']))
{
	$total6=$total6+"1";
	$_SESSION['$total6']=$total6;
	$test=$_POST['test'];
$stud=$_POST['stud'];
$qno=$_POST['qno'];
$qno1=$_POST['qno1'];
$qno2=$_POST['qno2'];
$qno3=$_POST['qno3'];
$qno4=$_POST['qno4'];
$qno6=$_POST['qno6'];
 
	$sql="insert into hint(id,test_taken,qno,hint_select) VALUES('$stud','$test','$qno6','yes')";
	{
	if(mysql_query($sql))
	{
	}	
	}	
	


//$totalhint=$_SESSION['$total']+$_SESSION['$total1'];
//echo"$totalhint";


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
	 <input type="hidden" name="test" value="Section A">
	  <input type="text" name="time" value="<?php echo$_SESSION['timearr'];?>">
	  <input type="hidden" name="stud" value="<?php echo$_SESSION['stud'];?>">
	   <input type="hidden" name="date" value="<?php echo$_SESSION['date1'];?>">
	
	  <h3>Time Remaining</h3>
	  
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
  var minutes = Math.floor((t / 1000 / 60) % 5);
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

var deadline = new Date(Date.parse(new Date()) + 5 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);

</script>    		
	<center><h2>IA Test</center></h2>
         
			<div>
			<input type="hidden" name="qno" value="Q1M">
			<input type="text" name="question1" value="1.Level 3">
			     <input type = "checkbox" name = "hintq1" onclick = "Hello1()"  value = "hintq1"> <b> Hint Q 1</b> <br>
				 <script type = "text/JavaScript">
				function Hello1() {
					alert("Hint Q 1");
					}
				</script>
				
				<input type="radio" name="option_selected1" value="arrQ1A">A: <br> 
		   				<input type="radio" name="option_selected1" value="arrQ1B">B:    <br>
				<input type="radio" name="option_selected1" value="arrQ1C">C:  <br>
				<input type="radio" name="option_selected1" value="arrQ1D">D: <br><br>
				<input type="hidden" name="corr_opt1" value="arrQ1D">
				 <input type="hidden" name="sub" id="add" value="">
				 
				
			<?php
			 if(isset($_POST['sub']))
				$_SESSION['sub']=$_POST['sub'];
			
			?>
			
			
								
</div>
<script type="text/javascript">
    setTimeout(function () {
   window.location.href= 'sectionB.php'; // the redirect goes here
},300000); 
alert(time)// 5 sec
</script>

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
 // $('#clicked').text(count5); // update text
 

	
});
</script>
		<div>
		<input type="hidden" name="qno1" value="Q2M">
			<input type="text" name="question2" value="2.Level 3">
			
				<input type = "checkbox" name = "hintq2" onclick = "Hello2()"  value = "hintq2"> <b>Hint Q 2 </b> <br>
				 <script type = "text/JavaScript">
				function Hello2() {
					alert("Hint Q 2");
					}
				</script>
			
				<input type="radio" name="option_selected2" value="arrQ2A">A: <br>
				<input type="radio" name="option_selected2" value="arrQ2B">B:     <br>
				<input type="radio" name="option_selected2" value="arrQ2C">C:    <br>
				<input type="radio" name="option_selected2" value="arrQ2D">D: <br><br>
				<input type="hidden" name="corr_opt2" value="arrQ2C">
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
 
	// window.alert(count1);
});
</script>
			<div>
			<input type="hidden" name="qno2" value="Q3E">
			<input type="text" name="question3" value="3.Level 3">
			
			<input type = "checkbox" name = "hintq3" onclick = "Hello3()"  value = "hintq3" ><b> Hint Q 3 </b><br>
				 <script type = "text/JavaScript">
				function Hello3() {
					alert("Hint Q 3");
					}
				</script>
			
				<input type="radio" name="option_selected3" value="arrQ3A">A:      <br>
				<input type="radio" name="option_selected3" value="arrQ3B">B: <br>
				<input type="radio" name="option_selected3" value="arrQ3C">C: <br>
				<input type="radio" name="option_selected3" value="arrQ3D">D: <br><br>
				<input type="hidden" name="corr_opt3" value="arrQ3A">
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

	
	//window.alert(count2);
});
</script>	
			
			<div>
			<input type="hidden" name="qno3" value="Q4M">
			<input type="text" name="question4" value="4.Level 3">
			
			<input type = "checkbox" name = "hintq4" onclick = "Hello4()"  value = "hintq4" > <b>Hint Q 4</b> <br>
				 <script type = "text/JavaScript">
				function Hello4() {
					alert("Hint Q 4");
					}
				</script>
			
				<input type="radio" name="option_selected4" value="arrQ4A">A: <br>
				<input type="radio" name="option_selected4" value="arrQ4B">B:<br>
				<input type="radio" name="option_selected4" value="arrQ4C">C: <br>
				<input type="radio" name="option_selected4" value="arrQ4D">D: <br><br>
				<input type="hidden" name="corr_opt4" value="arrQ4C">
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

	//window.alert(count3);
});
</script>
			<div>
			<input type="hidden" name="qno4" value="Q5D">
			<input type="text" name="question5" value="5.Level 3">
			
			<input type = "checkbox" name = "hintq5" onclick = "Hello5()"  value = "hintq5" > <b>Hint Q 5 </b><br>
				 <script type = "text/JavaScript">
				function Hello5() {
					alert("Hint Q 5");
					}
				</script>
				<input type="radio" name="option_selected5" value="arrQ5A">A:  <br>
				<input type="radio" name="option_selected5" value="arrQ5B">B: <br>
				<input type="radio" name="option_selected5" value="arrQ5C">C: <br>
				<input type="radio" name="option_selected5" value="arrQ5D"> D: <br><br>
				<input type="hidden" name="corr_opt5" value="arrQ5B">
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

	//window.alert(count4);
});
  
</script>
			<div>
			<input type="hidden" name="qno6" value="Q6E">
			<input type="text" name="question6" value="6. Level 3">
			<input type = "checkbox" name = "hintq6" onclick = "Hello6()"  value = "hintq6" ><b> Hint Q 6 </b><br>
				 <script type = "text/JavaScript">
				function Hello6() {
					alert("Hint Q 6");
					}
				</script>
			
				<input type="radio" name="option_selected6" value="arrQ6A">A:      <br>
				<input type="radio" name="option_selected6" value="arrQ6B">B: <br>
				<input type="radio" name="option_selected6" value="arrQ6C">C:<br>
				<input type="radio" name="option_selected6" value="arrQ6D"> D: <br><br>
				<input type="hidden" name="corr_opt6" value="arrQ6A">
				 <input type="hidden" name="sub6" id="add6" value="">
			<?php
			 if(isset($_POST['sub6']))
				$_SESSION['sub6']=$_POST['sub6'];
			?>
			</div>
			<script>
			//click count function 
var count6 = 0
$('input[name=option_selected6]').click(function() {
	
  count6++
 
});  

</script>
			<div>
			<center><input type="submit" name="submit" value="Submit" style="width:120px;align:left;height:45px"></center><br><br>
			
			</div>
			
			
			<legend></legend>
		</form>
		
	</div>
</div>
</body>
</html>

