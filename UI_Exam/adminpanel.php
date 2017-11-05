  <?PHP
    include("config.php");
	?>

<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<div id="registration-form" style="width:900px;height:1200px">
	<div class='fieldset'>
    <legend>Admin Panel</legend>
		<form  method="post" action="" style="width:900px;height:1200px">
		<a href="admindash.php">Back</a>
	<center><table>
	<tr>
	<td><input type="text" name="id" placeholder="search id" style="width:70%;height:40px"/></td>
	<td><input type="submit" name="search" value="search" style="width:100%;height:40px"/></td>
	</tr>
	</table>
	</center>
	
	<?php
 if(isset($_POST['search']))
 {
 ?>
 <table width="100%" border="1">
        <tr> 
          <td><strong><font color="">ID</font></strong></td>
          <td><strong><font color="">Test_Name</font></strong></td>
          <td><strong><font color="">Q1status</font></strong></td>
          <td><strong><font color="">Q2status</font></strong></td>
          <td><strong><font color="">Q3status</font></strong></td>
          <td><strong><font color="">Q4status</font></strong></td>
		  <td><strong><font color="">Q5status</font></strong></td>
		  <td><strong><font color="">Overallstatus</font></strong></td>
		   <td><strong><font color="">Overallper</font></strong></td>
        </tr>
		<?php
 }?>
 
<?php
$id1=$_POST['id'];
if(isset($_POST['search']))
{
	
	 $sql = "SELECT * FROM final where id='$id1'";
    //echo $sql;exit;
    $result = mysql_query($sql);
    while($row=mysql_fetch_array($result))
    {
 ?>
 
        <tr> 
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['test_name']; ?></td>
          <td><?php echo $row['Q1status']; ?></td>
          <td><?php echo $row['Q2status']; ?></td>
		  <td><?php echo $row['Q3status']; ?>
		  </td><td><?php echo $row['Q4status']; ?></td>
		  <td><?php echo $row['Q5status']; ?></td>
		   <td><?php echo $row['overallstatus']; ?></td>
		   <td><?php echo $row['overallper']; ?></td>
  <?php
  }
}
  ?>
  
	<table width="100%" border="1">
        <tr> 
          <td><strong><font color="">ID</font></strong></td>
          <td><strong><font color="">Test_Name</font></strong></td>
          <td><strong><font color="">Q1status</font></strong></td>
          <td><strong><font color="">Q2status</font></strong></td>
          <td><strong><font color="">Q3status</font></strong></td>
          <td><strong><font color="">Q4status</font></strong></td>
		  <td><strong><font color="">Q5status</font></strong></td>
		  <td><strong><font color="">Overallstatus</font></strong></td>
		   <td><strong><font color="">Overallper</font></strong></td>
        </tr>
		

  
<?php
	 $sql = "SELECT * FROM final";
    //echo $sql;exit;
    $result = mysql_query($sql);
    while($row=mysql_fetch_array($result))
    {
 ?>
        <tr> 
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['test_name']; ?></td>
          <td><?php echo $row['Q1status']; ?></td>
          <td><?php echo $row['Q2status']; ?>
		  </td><td><?php echo $row['Q3status']; ?>
		  </td><td><?php echo $row['Q4status']; ?></td>
		  <td><?php echo $row['Q5status']; ?></td>
		 <td><?php echo $row['overallstatus']; ?></td> 
		  <td><?php echo $row['overallper']; ?></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <?php
  
}
  ?>
  
 </table>
 
 </form>
</div>
</div>
</body>
</html>	
