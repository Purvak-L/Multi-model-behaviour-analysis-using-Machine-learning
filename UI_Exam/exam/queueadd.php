<?PHP
    include("config.php");
	?>

<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<div id="registration-form" style="width:900px;height:400px">
	<div class='fieldset'>
    <legend>Admin Panel</legend>
		<form  method="post" action="" style="width:900px;height:400px">
		<a href="admindash.php">Back</a>
       <center> <table width="70%" border="1">
        <tr> 
          <td><strong><font color="">ID</font></strong></td>
          <td><strong><font color="">Question</font></strong></td>
          
        </tr>

<?php
	 $sql = "SELECT * FROM queuequestion";
    //echo $sql;exit;
    $result = mysql_query($sql);
    while($row=mysql_fetch_array($result))
    {
 ?>
        <tr style="height:50px"> 
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['question']; ?></td>
          
		 
  <?php
  
}
  ?>
  
 </table></center>
 </form>
</div>
</div>
</body>
</html>	
