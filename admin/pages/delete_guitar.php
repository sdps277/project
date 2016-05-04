<?php
include("../../controller/dbconnect.php");
header("location: guitar_list.php");
$delete_id = $_GET['del'];
$delete_query ="delete from guitar where id='$delete_id'";
if(mysql_query($delete_query)){
echo "<script>alert('Deleted');</script>";
}
?>