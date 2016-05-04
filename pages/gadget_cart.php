<div id="content" class="three_quarter"> 
<?php
	if(isset($_POST['submit'])){
		if(!empty($_SESSION['gadget_cart'])){
		foreach($_POST['quantity'] as $key => $val){
			if($val==0){
				unset($_SESSION['gadget_cart'][$key]);
			}else{
				$_SESSION['gadget_cart'][$key]['quantity']=$val;
			}
		}
		}
	}
?>
<h1>View Gadget Cart </h1>
<form method="post" action="gadget_list.php?page2=gadget_cart">
<table>
	<tr>
    	<th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Subtotal</th>
	</tr>
    <?php
    $sql = "SELECT * FROM gadget WHERE id IN(";
			foreach($_SESSION['gadget_cart'] as $id => $value){
			$sql .=$id. ",";
			}
			$sql=substr($sql,0,-1) . ") ORDER BY id ASC";
			$query = mysqli_query($con, $sql);
			$totalprice=0;
			if(!empty($query)){
			while($row = mysqli_fetch_array($query)){
				$subtotal= $_SESSION['gadget_cart'][$row['id']]['quantity']*$row['price'];
				$totalprice += $subtotal;
	?>
	<tr>
		<td><?php echo $row['name']; ?></td>
        <td><input type="text" name="quantity[<?php echo $row['id']; ?>]" size="6" value="<?php echo $_SESSION['gadget_cart'][$row['id']]['quantity']; ?>"> </td>
        <td><?php echo "$" .$row['price']; ?></td>
        <td><?php echo "$" .$_SESSION['gadget_cart'][$row['id']]['quantity']*$row['price']. ".00"; ?></td>       
	</tr>
    <?php
			}
			}else{
	?>
			<tr><td colspan="4"><?php echo "<i>Add gadget to your cart."; ?></td></tr>
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