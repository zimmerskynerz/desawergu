<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<head>
<body>
<div class="jumbotron">
<table class="table table-striped">
 					<thead>
 						<tr>
						    <th>No</th>
						 
						    <th>NIK</th>
 							<th>No KK</th>
 							<th>NAMA</th>
 							<th>ALAMAT</th>
 							
 						</tr>
 					</thead>
 					 <?php
 					 	include "config.php";
						  $sql="SELECT COALESCE(nama) AS nama, 
									COALESCE(alamat) AS alamat,
									COALESCE(nik, 'Jumlah Keluarga / KK') AS nik,
									COALESCE(no_kk, 'Jumlah Keluarga / KK') AS no_kk,
									count(no_kk) AS no_kk 
							FROM `data_warga` 
							GROUP BY no_kk,nama WITH ROLLUP";
								
						  $query=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
						  $no=1;
						  while($data=mysqli_fetch_array($query)){
			  		?>
 					<tbody>
 						<tr>
 							<td><?php echo $no; ?></td>
				
 							<td><?php echo $data['nik']; ?></td>
 							<td><?php echo $data['no_kk']; ?></td>
							<td><?php echo $data['nama']; ?></td>
 							<td><?php echo $data['alamat']; ?></td>
							
 							
 							
 						</tr>
 						 <?php $no++;} ?>
 						
 						
 					</tbody>
 					
 				</table>
   
   
      

</div>
</body>
</html>
			   
                     
  
            