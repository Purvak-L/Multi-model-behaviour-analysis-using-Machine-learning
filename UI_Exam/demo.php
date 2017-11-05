<?php
include("config.php");
?>
<html>
<head>
<title></title>
<script>
						
function myFunction()
{       
if (isset($_POST['yes']))  
{	
        movie= Session["Value"].ToString();
        ds = c1.getrecord("select opt1 from tbexam_options where movie_name='" + movie + "' ");
        review = ds.Tables[0].Rows[0]["reviews"].ToString();
        string final =txtcomments.Text +","+ review ;
        if (txtcomments.Text!="")
        {
            c1.update("update tbcomments set reviews=('" + final + "') where movie_name='"+ movie +"'");
            Response.Write("<script type=\"text/javascript\">alert('Comments Added Successfully !');</script>");
        }
        else
        {
            Response.Write("<script type=\"text/javascript\">alert('Please Insert Comments !');</script>");
        }
        txtcomments.Text = "";
	
}		
          
	
			

</script>

                    
</head>
<form action="" method="post" width="500px">
            <input type="text" name="stud" value="1"><br><br>
			<input type="text" name="question1" value="1.On which principle does stack work?"><br><br>
				<input type="radio" name="option_selected1" id="yes" onclick="myFunction();" value="A">A: FILO   <br>
				<input type="radio" name="option_selected1" id="no" value="B">B: FIFO  <br>
				<input type="radio" name="option_selected1" id="1"value="C">C: LILO  <br>
				<input type="radio" name="option_selected1" id="2"value="D">D: LIFO/FILO <br><br>
				<input type="submit" name="submit" value="submit">
	</form>
	</body>
</html>

<?php
$stud="";
$question1="";
$option_selected1="";
$stud=$_POST['stud'];
$question=$_POST['question1'];
$option =$_POST['option_selected1'];
if (isset($_POST['submit'])) 
		{
             $sql="INSERT into tbexam_options(studentid,q_no,opt1,opt2,opt3,opt4) VALUES('$stud','$question','$option','','','')";
 
          if(mysql_query($sql))
				{
					echo"Registration successfully";
	
				}
			else
				{
				echo "Registration unsuccessfully";
				}	
         
		}		

?>
