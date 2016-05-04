<?php
include("../../controller/dbconnect.php");
header("location: gadget_list.php");
$delete_id = $_GET['del'];
$delete_query ="delete from gadget where id='$delete_id'";
if(mysql_query($delete_query)){
echo "<script>alert('Deleted');</script>";
}
?>