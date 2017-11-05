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

<div id="registration-form" style="width:400px;height:400px">
	<div class='fieldset'>
    <legend>Admin Panel</legend>
		<form  method="post" action="">
			<center><table>
			<tr style="height:50px">
			<td><a href="adminpanel.php">Student Score</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td><a href="insertque.php">Insert question</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td><a href="arrayadd.php">Array Test</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>&nbsp;&nbsp;
			<tr style="height:50px">
			<td><a href="stackadd.php">Stack Test</a></td>
			<td><a href="queueadd.php">Queue Test</a></td>
			<td><a href="linkedadd.php">Linked Test</a></td>
			</tr>
			</table></center>
</form>
</div>
</div>
</body>
</html>	
