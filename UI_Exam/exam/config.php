<?PHP
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_NAME','exam');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("connection failed".mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("connection failed".mysql_error());

?>