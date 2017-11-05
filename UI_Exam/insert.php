

<html>
<head>
<title></title>
<?php
session_start();?>

<body>
<input type="text" name="student" value="<?php echo $_SESSION['stud'];?>">
</body>
</html>
<?php
//Insert Data
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "exam";

$stud=$_SESSION['stud'];
echo"$stud";
try
{

 $conn = new PDO("mysql:host=$hostname;dbname=$databasename",$username, $password);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 if(isset($_POST["option_selected1"]))
 {
 $query = "INSERT INTO option_selected1(id,option_selected1) VALUES ((select id from tb_id where id='$stud'),:option_selected1)";
echo"$query";
 $statement = $conn->prepare($query);
 $statement->execute(
 array(
 'option_selected1' => $_POST["option_selected1"],
 
 )
 );
 $count = $statement->rowCount();
 if($count > 0)
 {
 echo"Data Inserted Successfully..!";
 
 }
 else
 {
 echo "Data Insertion Failed";
 }
 }

}
catch(PDOException $error)
{
 echo $error->getMessage();
}
?>
