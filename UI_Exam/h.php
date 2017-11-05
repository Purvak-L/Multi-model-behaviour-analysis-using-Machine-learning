<form method="post" target="_self"> 
<?php 

if(isset($_POST['hide']) &&  ($_POST['hide']) =='hide'){ 
   echo "SUBMIT IS DISABLED"; 
  } else { 
   echo "<input name=\"hide\" type=\"hidden\" value=\"hide\">"; 
   echo "<input type=\"submit\" value=\"Send\">"; 
   } 
   ?>