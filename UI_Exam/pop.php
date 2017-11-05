<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['confirm'] == 'Yes') {
        delete_record($_REQUEST['id']); // From GET or POST variables
    }
    redirect($_POST['referer']);
}
?>

<form action="delete.php" method="post">
    Are you sure?
    <input type="submit" name="confirm" value="Yes">
    <input type="submit" name="confirm" value="No">

    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="hidden" name="referer" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">
</form>