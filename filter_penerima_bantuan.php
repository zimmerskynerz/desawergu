
<?php
if(ISSET($_POST['filter'])){
	require 'config.php';
	$date = $_POST['date'];
	$query = mysqli_query($conn, "SELECT * FROM `product` WHERE MONTH(date) = '$date' ORDER BY 'date' ASC") or die(mysqli_error());
	while($fetch = mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $fetch['product_name']?></td>
			<td><?php echo $fetch['supplier']?></td>
			<td><?php echo date('M d, Y', strtotime($fetch['date']))?></td>
		</tr>	
		<?php		
	}
}
?>