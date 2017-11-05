<?php
include("config.php");
?>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style1.css">
<script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because chrome dont insert 1st hash to history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
</head>
<body>

<div id="registration-form" style="width:400px;height:400px">
	<div class='fieldset' >
    <legend>Dashboard</legend>
		<form  method="post" action="" style="width:400px;height:200px">
		<center><table>
			<tr>
			<td><a href="login.php"><img src="images/stud2.png" alt="student login" width="50%"></a></td>
			<td><a href="admin.php"><img src="images/admin1.png" alt="student login" width="70%"></a></td>
			</tr>
			<tr>
			<td><label>STUDENT LOGIN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
			<td><label>ADMIN LOGIN&nbsp;&nbsp;&nbsp;</label></td>
			</tr>
			
			</table></center>
		</form>
	</div>
</div>
</body>
</html>	