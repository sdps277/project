<?php
include_once '../controller/dbconnect.php';
if(!isset($_SESSION['user']))
{
 header("Location: login.php");
}
require("../controller/db.php");
if(isset($_GET['page'])){
  $pages=array("guitar2","cart");
  if(in_array($_GET['page'],$pages)){
    $page=$_GET['page'];
  }else{
    $page="guitar2";
  }
}else{
  $page="guitar2";
}
?>
<div id="content" class="three_quarter"> 
<?php
	if(isset($_POST['submit'])){
		if(!empty($_SESSION['cart'])){
		foreach($_POST['quantity'] as $key => $val){
			if($val==0){
				unset($_SESSION['cart'][$key]);
			}else{
				$_SESSION['cart'][$key]['quantity']=$val;
			}
		}
		}
	}
?>
<h1>View Guitar Cart </h1>
<form method="post" action="guitar_list.php?page=cart">
<table>
	<tr>
    	<th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Subtotal</th>
	</tr>
    <?php
    $sql = "SELECT * FROM guitar WHERE id IN(";
			foreach($_SESSION['cart'] as $id => $value){
			$sql .=$id. ",";
			}
			$sql=substr($sql,0,-1) . ") ORDER BY id ASC";
			$query = mysqli_query($con, $sql);
			$totalprice=0;
			if(!empty($query)){
			while($row = mysqli_fetch_array($query)){
				$subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['price'];
				$totalprice += $subtotal;
	?>
	<tr>
		<td><?php echo $row['name']; ?></td>
        <td><input type="text" name="quantity[<?php echo $row['id']; ?>]" size="6" value="<?php echo $_SESSION['cart'][$row['id']]['quantity']; ?>"> </td>
        <td><?php echo "$" .$row['price']; ?></td>
        <td><?php echo "$" .$_SESSION['cart'][$row['id']]['quantity']*$row['price']. ".00"; ?></td>       
	</tr>
            
    <?php
			}
			}else{
	?>
			<tr><td colspan="4"><?php echo "<i>Add guitar to your cart."; ?></td></tr>
    <?php
			}
	?>
    <tr>
    	<td colspan="3">Total Price: <h1><?php echo "$" ."$totalprice". ".00"; ?></h1><td>
    </tr>
</table>
<br/><button type="submit" name="submit">Update Cart</button>
</form>
<br/><p>To remove an item, set quantity to 0.</p>
</div>