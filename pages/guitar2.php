<?php
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM guitar WHERE id={$id}";
		$query_p=mysqli_query($con, $sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['price']);
			
		}else{
			$message="Guitar ID is invalid";
		}
	}
}
?>

<?php
if(isset($message)){
	echo "<h2>$message</h2>";	
}
?>
	 <?php
include("../controller/dbconnect.php");
  $query="select * from guitar";
  $run=mysql_query($query);
while($row=mysql_fetch_array($run)){
  $id=$row['id'];
  $name = $row['name'];
    $price = $row['price'];
  $image_name = $row['image'];
  ?>
  <table bgcolor="cyan" width="200px">
<tr>
 <td width="100px" align = "center">Name :<?php echo $name; ?>  </br></br>
 Price ($):<?php echo $price; ?></br></br>
<img src="../images/<?php echo $image_name; ?>" width="70px" height="70px"></br>
</br>
 <a href="guitar_list.php?page=guitar2&action=add&id=<?php echo $row['id']; ?>"> Add to Cart</a>
</tr>
<?php } ?>
</table>
  