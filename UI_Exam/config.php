<?PHP
define('DB_HOST','172.17.14.236');
define('DB_USER','%');
define('DB_NAME','exam');
//define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,'%','') or die("connection failed".mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("connection failed".mysql_error());
 

?>