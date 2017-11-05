<?php
include("config.php");
?>


<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<?php
session_start();
$totalsolve="";
$count="";
?>
<div id="registration-form" style="width:400px;height:400px">
	<div class='fieldset'>
    <legend></legend>
		<form  method="post" action="">
		Q1: <?php echo $_SESSION['sub']; ?><br><br>
		Q2: <?php echo $_SESSION['sub1']; ?><br><br>
		Q3: <?php echo $_SESSION['sub2']; ?><br><br>
		Q4: <?php echo $_SESSION['sub3']; ?><br><br>
		Q5: <?php echo $_SESSION['sub4']; ?><br><br>
		your solve <?php echo $_SESSION['totalsolve'];?> question <br><br>
		your score is  <?php echo $_SESSION['count'];?><br><br>
		</form>
	</div>
</div>
</body>
</html>	