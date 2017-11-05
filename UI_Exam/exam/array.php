<?php
include("config.php");
?>

 <?php session_start();


?>


<?php
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
$clickcount="";


if (isset($_POST['submit']))
{
//calculate overall score

$sub=$_POST['sub'];
$sub1=$_POST['sub1'];
$sub2=$_POST['sub2'];
$sub3=$_POST['sub3'];
$sub4=$_POST['sub4'];

$test=$_POST['test'];
$stud=$_POST['stud'];
$qno=$_POST['qno'];
$qno1=$_POST['qno1'];
$qno2=$_POST['qno2'];
$qno3=$_POST['qno3'];
$qno4=$_POST['qno4'];

$time=$_POST['time'];
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
 
//header("location:insert.php");
}
 else
 {
	echo "<script>alert('Registration unsuccessfully');</script>";
 }
}

$input = array("$sub","$sub1","$sub2","$sub3","$sub4");
$c = array_count_values($input);
$key = array_search(max($c), $c);
//echo"$key";
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
if($key=="confident")
{ 
 $clickcount= $clickcount+1;
 $_SESSION['clickcount']=$clickcount;
 //echo"$clickcount";
	//echo"confident";
}
if($key=="excitement")
{ 

 $clickcount= $clickcount+2;
 $_SESSION['clickcount']=$clickcount;
  //echo"$clickcount";
	//echo"excitement";
}
if($key=="boredom")
{ 
 $clickcount= $clickcount+3;
 $_SESSION['clickcount']=$clickcount;
	//echo"confident";
}
if($key=="Frustrated")
{ 
 $clickcount= $clickcount+4;
 $_SESSION['clickcount']=$clickcount;
	//echo"confident";
}
if($key=="confuse")
{ 
 $clickcount= $clickcount+5;
 $_SESSION['clickcount']=$clickcount;
	//echo"confident";
}
//calculate timein and  timeout difference
$date = strtotime($today);
$date1 = strtotime($time);
$timefinal= $date-$date1;
$time1=round(abs($timefinal/60));
//echo"$time1";
//echo"$count";
//calculated total percent

$conf= 0.5; $excit= 0.5; $bore= 0.5; $frust= 0.5; $confu= 0.5;

if($time1==4 || $time1==3 || $time1==2)

  {  
	 GLOBAL $conf, $bore , $confu , $frust , $excit ;
       $conf = $conf * 0.9 * 1;
       $excit = $excit * 0.9 * 1; 
       $bore = $bore * 0.9 * 0.2;
       $frust = $frust * 0.9 * 0.2;
       $confu = $confu * 0.9 * 0.4; 
	   
	  //echo "$conf","<br>", "$bore" ,"<br>" ,"$confu" , "<br>" , "$frust" ,"<br>" ,"$excit" ;
	   
	   $new = array("$conf", "$bore" , "$confu" , "$frust" , "$excit");
       $maxs = array_keys($new, max($new));
	    echo "Analysis is as Follows:<br>"  ; 
        //echo"$maxs[0]";
         
            echo "$conf - is Confident<br>";
	        echo"$excit- is Excited<br>";
         
	       echo"$bore- is Bored<br>";
         
	      echo"$frust- is Frustrated<br>";
         
	        echo"$confu - is Confused<br>";
         
          rsort($new);
         $clength = count($new);
         for($x = 0; $x < $clength; $x++) 
               {
                 //echo $new[$x];
                 //echo "<br>";
	 	 	   }
        
} 		
	if ($time1 == 1)
	{ 
	GLOBAL $conf, $bore , $confu , $frust , $excit ;
       $conf = $conf * 0.9 * 0.8;
       $excit = $excit * 0.9 * 0.8; 
       $bore = $bore * 0.9 * 0.4;
       $frust = $frust * 0.9 * 0.6;
       $confu = $confu * 0.9 * 0.4; 
	   	
	   	   $new = array("$conf", "$bore" , "$confu" , "$frust" , "$excit");
$maxs = array_keys($new, max($new));
echo ("Analysis is as Follows: <br>");
echo"$maxs[0]";

	echo "$conf- is Confident<br>";

	echo"$excit- is Excited<br>";

	echo"$bore- is Bored<br>";

	echo"$frust- is Frustrated<br>";

	echo"$confu- is Confused<br>";
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
	//echo "<br>"; 
   //echo $new[$x];
   //echo "<br>";
	   
	   
	}
	//echo "$conf", "$bore" , "$confu" , "$frust" , "$excit" ;	
}

     if  ($time1 == 0)
     {
	 GLOBAL $conf, $bore , $confu , $frust , $excit ;
       $conf = $conf * 0.9 * 0.2;
       $excit = $excit * 0.9 * 0.2; 
       $bore = $bore * 0.9 * 1;
       $frust = $frust * 0.9 * 0.8;
       $confu = $confu * 0.9 * 0.6; 
	   
	   //echo "$conf", "$bore" , "$confu" , "$frust" , "$excit" ;	
	   
	    	   $new = array("$conf", "$bore" , "$confu" , "$frust" , "$excit");
$maxs = array_keys($new, max($new));
echo("Analysis is as Follows: <br>");
//echo"$maxs[0]";

	echo "$conf- is Confident<br>";

	echo"$excit- is Excited<br>";

	echo"$bore- is Bored<br>";

	echo"$frust- is Frustrated<br>";

	echo"$confu- is Confused<br>";

rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
	   
	   
	}
		 
	
}

if ($count == 0 )

	
	{ 
     GLOBAL $conf, $bore , $confu , $frust , $excit ;
       $conf = $conf * 0.9 * 0.1;
       $excit = $excit * 0.9 * 0.1; 
       $bore = $bore * 0.9 * 0.4;
       $frust = $frust * 0.9 * 0.8;
       $confu = $confu * 0.9 * 1; 
	   
	   //echo "$conf", "$bore" , "$confu" , "$frust" , "$excit" ;	
	
	   $new = array("$conf", "$bore" , "$confu" , "$frust" , "$excit");
$maxs = array_keys($new, max($new));
//echo ("Analysis is as follows: <br>"); 
//echo"$maxs[0]";
	//echo "$conf- is Confident";


	//echo"$excit- is Excited";

	//echo"$bore- is Bored";
	//echo"$frust- is Frustrated";

	//echo"$confu- is Confused";

rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
	   
	   
	}	
   } 

   if($count == 1 )
   { 
     GLOBAL $conf, $bore , $confu , $frust , $excit ;
       $conf = $conf * 0.9 * 0.2;
       $excit = $excit * 0.9 * 0.2; 
       $bore = $bore * 0.9 * 0.6;
       $frust = $frust * 0.9 * 1;
       $confu = $confu * 0.9 * 1; 
	   
	  // echo "$conf", "$bore" , "$confu" , "$frust" , "$excit" ;	
	   	   $new = array("$conf", "$bore" , "$confu" , "$frust" , "$excit");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	//echo "$conf% confident";
}
if($maxs[0]==1)
{
	//echo"$excit% excitement";
}
if($maxs[0]==2)
{
	//echo"$bore% bored";
}
if($maxs[0]==3)
{
	//echo"$frust% Frustrated";
}
if($maxs[0]==4)
{
	//echo"$confu% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
	   
	   
	}
   } 
   if ($count == 2 )
   { 
     GLOBAL $conf, $bore , $confu , $frust , $excit ;
       $conf = $conf * 0.9 * 0.4;
       $excit = $excit * 0.9 * 0.4; 
       $bore = $bore * 0.9 * 1;
       $frust = $frust * 0.9 * 1;
       $confu = $confu * 0.9 * 1; 
	   
	  // echo "$conf", "$bore" , "$confu" , "$frust" , "$excit" ;	
	   	   $new = array("$conf", "$bore" , "$confu" , "$frust" , "$excit");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	//echo "$conf% confident";
}
if($maxs[0]==1)
{
	//echo"$excit% excitement";
}
if($maxs[0]==2)
{
	//echo"$bore% bored";
}
if($maxs[0]==3)
{
	//echo"$frust% Frustrated";
}
if($maxs[0]==4)
{
	//echo"$confu% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
	   
	   
	}
} 
	if ($count == 3 )
   { 
     GLOBAL $conf, $bore , $confu , $frust , $excit ;
       $conf = $conf * 0.9 * 0.6;
       $excit = $excit * 0.9 * 0.6; 
       $bore = $bore * 0.9 * 1;
       $frust = $frust * 0.9 * 0.1;
       $confu = $confu * 0.9 * 0.1; 
	   
	  // echo "$conf", "$bore" , "$confu" , "$frust" , "$excit" ;	
	   
	   	   $new = array("$conf", "$bore" , "$confu" , "$frust" , "$excit");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	//echo "$conf% confident";
}
if($maxs[0]==1)
{
	//echo"$excit% excitement";
}
if($maxs[0]==2)
{
	//echo"$bore% bored";
}
if($maxs[0]==3)
{
	//echo"$frust% Frustrated";
}
if($maxs[0]==4)
{
	//echo"$confu% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
	   
	   
	}
   } 
   if ($count == 4 )
   { 
     GLOBAL $conf, $bore , $confu , $frust , $excit ;
       $conf = $conf * 0.9 * 0.8;
       $excit = $excit * 0.9 * 1; 
       $bore = $bore * 0.9 * 0.1;
       $frust = $frust * 0.9 * 0.1;
       $confu = $confu * 0.9 * 0.1; 
	   
	  // echo "$conf", "$bore" , "$confu" , "$frust" , "$excit" ;	
	   
	   	   $new = array("$conf", "$bore" , "$confu" , "$frust" , "$excit");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	//echo "$conf% confident";
}
if($maxs[0]==1)
{
	//echo"$excit% excitement";
}
if($maxs[0]==2)
{
	//echo"$bore% bored";
}
if($maxs[0]==3)
{
	//echo"$frust% Frustrated";
}
if($maxs[0]==4)
{
	//echo"$confu% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
	   
	   
	}
   }

    if ($count == 5 )
   { 
     GLOBAL $conf, $bore , $confu , $frust , $excit ;
       $conf = $conf * 0.9 * 1;
       $excit = $excit * 0.9 * 0.8; 
       $bore = $bore * 0.9 * 0.1;
       $frust = $frust * 0.9 * 0.1;
       $confu = $confu * 0.9 * 0.1; 
	   
	 //  echo "$conf", "$bore" , "$confu" , "$frust" , "$excit" ;	
			   $new = array("$conf", "$bore" , "$confu" , "$frust" , "$excit");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	//echo "$conf% confident";
}
if($maxs[0]==1)
{
	//echo"$excit% excitement";
}
if($maxs[0]==2)
{
	//echo"$bore% bored";
}
if($maxs[0]==3)
{
	//echo"$frust% Frustrated";
}
if($maxs[0]==4)
{
	//echo"$confu% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
	   
	   
	} 
   }    


/* if ($_SESSION['clickcount'] == 1)
{
	{
     GLOBAL $conf, $bore , $confu , $frust , $excit ;
       $conf = $conf * 0.9 * 0.5;
       $excit = $excit * 0.9 * 0.1; 
       $bore = $bore * 0.9 * 0.1;
       $frust = $frust * 0.9 * 0.1;
       $confu = $confu * 0.9 * 0.1; 
	   
	  // echo "$conf", "$bore" , "$confu" , "$frust" , "$excit" ;	
	   
	   	   $new = array("$conf", "$bore" , "$confu" , "$frust" , "$excit");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo "$conf% confident";
}
if($maxs[0]==1)
{
	echo"$excit% excitement";
}
if($maxs[0]==2)
{
	echo"$bore% bored";
}
if($maxs[0]==3)
{
	echo"$frust% Frustrated";
}
if($maxs[0]==4)
{
	echo"$confu% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
	   
	   
	}
 	}
	if ($_SESSION['clickcount'] == 2)
{
     GLOBAL $conf, $bore , $confu , $frust , $excit ;
       $conf = $conf * 0.9 * 0.1;
       $excit = $excit * 0.9 * 0.5; 
       $bore = $bore * 0.9 * 0.1;
       $frust = $frust * 0.9 * 0.1;
       $confu = $confu * 0.9 * 0.1; 
	   
	 //  echo "$conf", "$bore" , "$confu" , "$frust" , "$excit" ;	
	   
	   
	   	   $new = array("$conf", "$bore" , "$confu" , "$frust" , "$excit");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo "$conf% confident";
}
if($maxs[0]==1)
{
	echo"$excit% excitement";
}
if($maxs[0]==2)
{
	echo"$bore% bored";
}
if($maxs[0]==3)
{
	echo"$frust% Frustrated";
}
if($maxs[0]==4)
{
	echo"$confu% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
	   
	   
	}
} 	
if ($_SESSION['clickcount'] == 3)
{
     GLOBAL $conf, $bore , $confu , $frust , $excit ;
       $conf = $conf * 0.9 * 0.1;
       $excit = $excit * 0.9 * 0.1; 
       $bore = $bore * 0.9 * 0.5;
       $frust = $frust * 0.9 * 0.1;
       $confu = $confu * 0.9 * 0.1; 
	   
	 //  echo "$conf", "$bore" , "$confu" , "$frust" , "$excit" ;	
	   
	   	   $new = array("$conf", "$bore" , "$confu" , "$frust" , "$excit");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo "$conf% confident";
}
if($maxs[0]==1)
{
	echo"$excit% excitement";
}
if($maxs[0]==2)
{
	echo"$bore% bored";
}
if($maxs[0]==3)
{
	echo"$frust% Frustrated";
}
if($maxs[0]==4)
{
	echo"$confu% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
	   
	   
	}
} 	
if ($_SESSION['clickcount'] == 4)
{
     GLOBAL $conf, $bore , $confu , $frust , $excit ;
       $conf = $conf * 0.9 * 0.1;
       $excit = $excit * 0.9 * 0.1; 
       $bore = $bore * 0.9 * 0.1;
       $frust = $frust * 0.9 * 0.5;
       $confu = $confu * 0.9 * 0.1; 
	   
	 //  echo "$conf", "$bore" , "$confu" , "$frust" , "$excit" ;	
	   
	   	   $new = array("$conf", "$bore" , "$confu" , "$frust" , "$excit");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo "$conf% confident";
}
if($maxs[0]==1)
{
	echo"$excit% excitement";
}
if($maxs[0]==2)
{
	echo"$bore% bored";
}
if($maxs[0]==3)
{
	echo"$frust% Frustrated";
}
if($maxs[0]==4)
{
	echo"$confu% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
	   
	   
	}
} 	

  	if($_SESSION['clickcount'] == 5)
{
     GLOBAL $conf, $bore , $confu , $frust , $excit ;
       $conf = $conf * 0.9 * 0.1;
       $excit = $excit * 0.9 * 0.1; 
       $bore = $bore * 0.9 * 0.1;
       $frust = $frust * 0.9 * 0.1;
       $confu = $confu * 0.9 * 0.5; 
	   
	  // echo "$conf", "$bore" , "$confu" , "$frust" , "$excit" ;	
	   	   $new = array("$conf", "$bore" , "$confu" , "$frust" , "$excit");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo "$conf% confident";
}
if($maxs[0]==1)
{
	echo"$excit% excitement";
}
if($maxs[0]==2)
{
	echo"$bore% bored";
}
if($maxs[0]==3)
{
	echo"$frust% Frustrated";
}
if($maxs[0]==4)
{
	echo"$confu% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
	   
	   
	}
	   
} 
}	
	 */
/*	
}



if($time1==0 && $count==2 && $_SESSION['clickcount']==1)
{
$timediff=((0.8+0+0+0.8)/4)*100;
//echo"$timediff";
$hintclick=((0.8+0+0+1)/4)*100;
//echo"$hintclick";
$result1=((0.4+0.6+1+0)/4)*100;
//echo"$result1";
$result2=((0.6+0.8+0+0)/4)*100;
//echo"$result2";
$result3=((0.4+1+0+0)/4)*100;
//echo"$result3";

$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo "$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}
if($time1==4 && $count==5 && $_SESSION['clickcount']==1)     //case1
{
$timediff=((1+1+1+1)/4)*100;
//echo"$timediff";
$hintclick=((1+0.8+0+0)/4)*100;
//echo"$hintclick";
$result1=((0.2+0+0+0)/4)*100;
//echo"$result1";
$result2=((0.2+0+0+0)/4)*100;
//echo"$result2";
$result3=((0.4+0+0.6+0)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}

if($time1==3 && $count==4 && $_SESSION['clickcount']==2) //case2
{
$timediff=((1+0.8+0+0)/4)*100;
//echo"$timediff";
$hintclick=((1+1+1+1)/4)*100;
//echo"$hintclick";
$result1=((0.2+0+0+0)/4)*100;
//echo"$result1";
$result2=((0.2+0+0.6+0)/4)*100;
//echo"$result2";
$result3=((0.4+0+0.8+0)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}

if($time1==2 && $count==3 && $_SESSION['clickcount']==3)  //case3
{
$timediff=((1+0.6+0+0)/4)*100;
//echo"$timediff";
$hintclick=((1+0.6+0+0)/4)*100;
//echo"$hintclick";
$result1=((0.2+1+0.6+1)/4)*100;
//echo"$result1";
$result2=((0.2+0+0.8+0)/4)*100;
//echo"$result2";
$result3=((0.4+0+1+0)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}
if($time1==1 && $count==0 && $_SESSION['clickcount']==4)  //case4
{
$timediff=((0.8+0+0+0)/4)*100;
//echo"$timediff";
$hintclick=((0.8+0+1+0)/4)*100;
//echo"$hintclick";
$result1=((0.4+0.4+0+0)/4)*100;
//echo"$result1";
$result2=((0.6+0.8+0.6+1)/4)*100;
//echo"$result2";
$result3=((0.4+1+0.8+0)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}
if($time1==0 && $count==1  && $_SESSION['clickcount']==5)  //case5
{
$timediff=((0.2+0.2+1+0)/4)*100;
//echo"$timediff";
$hintclick=((0.2+0.2+0+0)/4)*100;
//echo"$hintclick";
$result1=((1+0.4+0+0)/4)*100;
//echo"$result1";
$result2=((0.8+0.8+0+0)/4)*100;
//echo"$result2";
$result3=((0.6+1+0.6+1)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}
if($time1==3 && $count==2 && $_SESSION['clickcount']==4)   //case6
{
$timediff=((1+0.4+0+0)/4)*100;
//echo"$timediff";
$hintclick=((1+0.4+0+0)/4)*100;
//echo"$hintclick";
$result1=((0.2+1+1+0)/4)*100;
//echo"$result1";
$result2=((0.2+1+1+1)/4)*100;
//echo"$result2";
$result3=((0.4+1+1+0)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}
if($time1==2 && $count==4 && $_SESSION['clickcount']==3)   //case7
{
$timediff=((1+0.8+0+0)/4)*100;
//echo"$timediff";
$hintclick=((1+1+0+0)/4)*100;
//echo"$hintclick";
$result1=((0.2+0+0.6+1)/4)*100;
//echo"$result1";
$result2=((0.2+0+0.8+0)/4)*100;
//echo"$result2";
$result3=((0.4+0+1+0)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}
if($time1==1 && $count==0 && $_SESSION['clickcount']==4)    //case8
{
$timediff=((0.8+0+1+0)/4)*100;
//echo"$timediff";
$hintclick=((0.8+0+0+0)/4)*100;
//echo"$hintclick";
$result1=((1+0.4+0.8+0)/4)*100;
//echo"$result1";
$result2=((0.8+0.8+0.1+1)/4)*100;
//echo"$result2";
$result3=((0.6+1+1+0)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}
if($time1==0 && $count==0 && $_SESSION['clickcount']==5)    //case9
{
$timediff=((0.2+0+0+0)/4)*100;
//echo"$timediff";
$hintclick=((0.2+0+0+0)/4)*100;
//echo"$hintclick";
$result1=((1+0.4+1+0)/4)*100;
//echo"$result1";
$result2=((0.8+0.8+1+0)/4)*100;
//echo"$result2";
$result3=((0.6+1+1+1)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}

if($time1==4 && $count==3 && $_SESSION['clickcount']==1)    //case10
{
$timediff=((1+0.6+1+1)/4)*100;
//echo"$timediff";
$hintclick=((1+0.6+0+0)/4)*100;
//echo"$hintclick";
$result1=((0.2+1+0+0)/4)*100;
//echo"$result1";
$result2=((0.2+0+0+0)/4)*100;
//echo"$result2";
$result3=((0.4+0+0.6+0)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}
if($time1==3 && $count==1 && $_SESSION['clickcount']==3)   //case11
{
$timediff=((1+0.2+0+1)/4)*100;
//echo"$timediff";
$hintclick=((1+0.2+1+0)/4)*100;
//echo"$hintclick";
$result1=((0.2+0.6+0+0)/4)*100;
//echo"$result1";
$result2=((0.2+1+0.6+0)/4)*100;
//echo"$result2";
$result3=((0.4+1+0.8+0)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}
if($time1==2 && $count==2 && $_SESSION['clickcount']==2)//case12
{   
$timediff=((1+0.4+0+0)/4)*100;
//echo"$timediff";
$hintclick=((1+0.4+0+1)/4)*100;
//echo"$hintclick";
$result1=((0.2+1+0.6+0)/4)*100;
//echo"$result1";
$result2=((0.2+1+0.8+0)/4)*100;
//echo"$result2";
$result3=((0.4+1+1+0)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}
if($time1==1 && $count==4 && $_SESSION['clickcount']==4)  //case13
{
$timediff=((0.8+0.8+0+0)/4)*100;
//echo"$timediff";
$hintclick=((0.8+1+0+0)/4)*100;
//echo"$hintclick";
$result1=((0.4+0+0.8+0)/4)*100;
//echo"$result1";
$result2=((0.6+0+0.1+1)/4)*100;
//echo"$result2";
$result3=((0.4+0+1+0)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}
if($time1==4 && $count==5 && $_SESSION['clickcount']==1)   //case14
{
$timediff=((1+1+0+1)/4)*100;
//echo"$timediff";
$hintclick=((1+0.8+0+0)/4)*100;
//echo"$hintclick";
$result1=((0.2+0+1+0)/4)*100;
//echo"$result1";
$result2=((0.2+0+1+0)/4)*100;
//echo"$result2";
$result3=((0.4+0+1+0)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}
if($time1==3 && $count==3 && $_SESSION['clickcount']==4)     //case15
{
$timediff=((1+0.6+0+0)/4)*100;
//echo"$timediff";
$hintclick=((1+0.6+0+0)/4)*100;
//echo"$hintclick";
$result1=((0.2+1+1+0)/4)*100;
//echo"$result1";
$result2=((0.2+0+1+1)/4)*100;
//echo"$result2";
$result3=((0.4+0+1+0)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}
if($time1==2 && $count==2 && $_SESSION['clickcount']==3)   //case16
{
$timediff=((1+0.4+0+0)/4)*100;
//echo"$timediff";
$hintclick=((1+0.4+1+0)/4)*100;
//echo"$hintclick";
$result1=((0.2+1+0+1)/4)*100;
//echo"$result1";
$result2=((0.2+1+0.6+0)/4)*100;
//echo"$result2";
$result3=((0.4+1+0.8+0)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}
if($time1==1 && $count==2 && $_SESSION['clickcount']==3)  //case17
{
$timediff=((0.8+0.4+0+0)/4)*100;
//echo"$timediff";
$hintclick=((0.8+0.4+0+0)/4)*100;
//echo"$hintclick";
$result1=((0.4+1+0.6+1)/4)*100;
//echo"$result1";
$result2=((0.6+1+0.8+0)/4)*100;
//echo"$result2";
$result3=((0.4+1+1+0)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}
if($time1==0 && $count==1 && $_SESSION['clickcount']==4)    //case18
{
$timediff=((0.2+0.2+0+0)/4)*100;
//echo"$timediff";
$hintclick=((0.2+0.2+1+0)/4)*100;
//echo"$hintclick";
$result1=((1+0.6+0+0)/4)*100;
//echo"$result1";
$result2=((0.8+1+0.6+1)/4)*100;
//echo"$result2";
$result3=((0.6+1+0.8+0)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}
if($time1==3 && $count==5 && $_SESSION['clickcount']==1)   //case19
{
$timediff=((1+1+0+1)/4)*100;
//echo"$timediff";
$hintclick=((1+0.8+0+0)/4)*100;
//echo"$hintclick";
$result1=((0.2+0+0.8+0)/4)*100;
//echo"$result1";
$result2=((0.2+0+0.1+0)/4)*100;
//echo"$result2";
$result3=((0.4+0+1+0)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}
if($time1==4 && $score==4 && $_SESSION['clickcount']==1)   //case20
{
$timediff=((1+0.8+0+1)/4)*100;
//echo"$timediff";
$hintclick=((1+1+1+0)/4)*100;
//echo"$hintclick";
$result1=((0.2+0+0+0)/4)*100;
//echo"$result1";
$result2=((0.2+0+0.6+0)/4)*100;
//echo"$result2";
$result3=((0.4+0+0.8+0)/4)*100;
//echo"$result3";
$new = array("$timediff","$hintclick","$result1","$result2","$result3");
$maxs = array_keys($new, max($new));
//echo"$maxs[0]";
if($maxs[0]==0)
{
	echo"$timediff% confident";
}
if($maxs[0]==1)
{
	echo"$hintclick% excitement";
}
if($maxs[0]==2)
{
	echo"$result1% bored";
}
if($maxs[0]==3)
{
	echo"$result2% Frustrated";
}
if($maxs[0]==4)
{
	echo"$result3% confused";
}
rsort($new);
$clength = count($new);
for($x = 0; $x < $clength; $x++) 
{
   // echo $new[$x];
    //echo "<br>";
}
}     */



$query="INSERT into final(id,test_name,Q1status,Q2status,Q3status,Q4status,Q5status,overallstatus,overallper) VALUES('$stud','$test','$sub','$sub1','$sub2','$sub3','$sub4','$key','$finalper')";
if(mysql_query($query))
{
	
}

}
if(isset($_POST['hint']))
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
	$sql="insert into hint(id,test_taken,qno,hint_select) VALUES('$stud','$test','$qno','yes')";
	
	if(mysql_query($sql))
	{
		
	}	
}
if(isset($_POST['hint1']))
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
	$sql="insert into hint(id,test_taken,qno,hint_select) VALUES('$stud','$test','$qno1','yes')";
	$total="0";
	if(mysql_query($sql))
	{
		
	}	
}
if(isset($_POST['hint2']))
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
	$sql="insert into hint(id,test_taken,qno,hint_select) VALUES('$stud','$test','$qno2','yes')";
	
	if(mysql_query($sql))
	{
		
	}	
}

if(isset($_POST['hint3']))
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
	$sql="insert into hint(id,test_taken,qno,hint_select) VALUES('$stud','$test','$qno3','yes')";
	
	if(mysql_query($sql))
	{
		
	}	
}
if(isset($_POST['hint4']))
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
	$sql="insert into hint(id,test_taken,qno,hint_select) VALUES('$stud','$test','$qno4','yes')";
	
	if(mysql_query($sql))
	{
		
	}	
}
//$totalhint=$_SESSION['$total']+$_SESSION['$total1'];
//echo"$totalhint";
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
	 <input type="hidden" name="test" value="Array test">
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
	<center><h2>Array Test</center></h2>
        
			<div>
			<input type="hidden" name="qno" value="Q1">
			<input type="text" name="question1" value="1.The memory address of the first element of an array is called__?">
			<input type="submit"  name="hint" value="Hint" style="width:10%; height:40px ;color:#ffffff;border-radius:10px;border:none"><br>
		   <input type="radio" name="option_selected1" value="arrQ1A">A: Floor address<br> 
		   
				<input type="radio" name="option_selected1" value="arrQ1B">B: Foundation address   <br>
				<input type="radio" name="option_selected1" value="arrQ1C">C: First address <br>
				<input type="radio" name="option_selected1" value="arrQ1D">D: Base address<br><br>
				<input type="hidden" name="corr_opt1" value="arrQ1D">
				 <input type="hidden" name="sub" id="add" value="">
			<?php
			 if(isset($_POST['sub']))
				$_SESSION['sub']=$_POST['sub'];
			
			?>
								
</div>
<script type="text/javascript">
    setTimeout(function () {
   window.location.href= 'paper.php'; // the redirect goes here
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
			<input type="text" name="question2" value="2.Two dimensional arrays are also called __?">
			<input type="submit"  name="hint1" value="Hint" style="width:10%; height:40px ;color:#ffffff;border-radius:10px;border:none"><br>
				<input type="radio" name="option_selected2" value="arrQ2A">A: Tables arrays   <br>
				<input type="radio" name="option_selected2" value="arrQ2B">B: Matrix arrays    <br>
				<input type="radio" name="option_selected2" value="arrQ2C">C: Both of above   <br>
				<input type="radio" name="option_selected2" value="arrQ2D">D: None of above<br><br>
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
			<input type="text" name="question3" value="3.Array is an example of ________ data structure">
			<input type="submit"  name="hint2" value="Hint" style="width:10%; height:40px ;color:#ffffff;border-radius:10px;border:none"><br>
				<input type="radio" name="option_selected3" value="arrQ3A">A:  Linear Data Structure       <br>
				<input type="radio" name="option_selected3" value="arrQ3B">B: Non Linear Data Structure  <br>
				<input type="radio" name="option_selected3" value="arrQ3C">C: Dsitributed Data Structure<br>
				<input type="radio" name="option_selected3" value="arrQ3D">D: None of these<br><br>
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
			<input type="text" name="question4" value="4.An array elements are always stored in ________ memory locations">
			<input type="submit"  name="hint3" value="Hint" style="width:10%; height:40px ;color:#ffffff;border-radius:10px;border:none"><br>
				<input type="radio" name="option_selected4" value="arrQ4A">A: Random  <br>
				<input type="radio" name="option_selected4" value="arrQ4B">B:Linear   <br>
				<input type="radio" name="option_selected4" value="arrQ4C">C: Sequential <br>
				<input type="radio" name="option_selected4" value="arrQ4D">D: None of these   <br><br>
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
			<input type="text" name="question5" value="5.Linear arrays are also called ?">
			<input type="submit"  name="hint4" value="Hint" style="width:10%; height:40px ;color:#ffffff;border-radius:10px;border:none"><br>
				<input type="radio" name="option_selected5" value="arrQ5A">A: Straight Array     <br>
				<input type="radio" name="option_selected5" value="arrQ5B">B: One dimensional Array<br>
				<input type="radio" name="option_selected5" value="arrQ5C">C: Vertical Array<br>
				<input type="radio" name="option_selected5" value="arrQ5D"> D: Horizontal Array<br><br>
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

