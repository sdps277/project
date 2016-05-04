<?php
include("../controller/dbconnect.php");
header("location: faq.php");
$delete_id = $_GET['del'];
$delete_query ="delete from comment where id='$delete_id'";
if(mysql_query($delete_query)){
echo "<script>alert('Deleted');</script>";
}
?>