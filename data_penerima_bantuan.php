
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

<div class="row">
  
  
<article class="card-post">
	<div class="container">
		 <div class="row">
		 <div class="col-md-12">
<div class="jumbotron">

<h1>Data Penerima Bantuan Desa Kayen</h1>

<form method="POST" class="form-inline" action="">
			<select name="bulan" class="form-control">
				<option value="">Pilih Bulan</option>
				<option value="1">January</option>
				<option value="2">February</option>
				<option value="3">March</option>
				<option value="4">April</option>
				<option value="5">May</option>
				<option value="6">June</option>
				<option value="7">July</option>
				<option value="8">August</option>
				<option value="9">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
			</select>
			<select class="form-control" name="nama_bantuan">
			<option value="">Pilih Jenis Bantuan</option>
		    <option value="RTLH">RTLH</option>
				<option value="MCK">MCK</option>
				<option value="BPNT">BPNT</option>
 
  </select>
  
           <div class="form-group">
		   
		   <input type="text" class="form-control" placeholder="Masukkan No KK" name="no_kk">
		   
		   </div>
			<button class="btn btn-danger" name="filter"><span class="glyphicon glyphicon-search"></span> Search</button>
			
		</form>
		<br style="clear:both;"/><br />
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Nama Warga</th>
					<th>Nama Bantuan</th>
					<th>No KK </th>
					<th>Bulan</th>
				</tr>
			</thead>
			<tbody>
<?php

    if(ISSET($_POST['filter'])){
	require 'config.php';
	@$date = $_POST['bulan'];
	@$bantuan = $_POST['nama_bantuan'];
	@$no_kk = $_POST['no_kk'];
	$query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT laporan.*,
				           program_bantuan.nama_bantuan
						   ,data_warga.nama,
						    data_warga.no_kk
						        FROM laporan
	                            LEFT JOIN data_warga on data_warga.id_warga= laporan.id_warga 
								LEFT JOIN program_bantuan on program_bantuan.id_bantuan= laporan.id_bantuan						
	                        WHERE MONTH(bulan) = '$date' and nama_bantuan= '$bantuan' or no_kk='$no_kk'");
	while($fetch = mysqli_fetch_array($query)){
		?>
		<tr> 
			<td><?php echo $fetch['nama']?></td>
			<td><?php echo $fetch['nama_bantuan']?></td>
			<td><?php echo $fetch['no_kk']?></td>
			<td><?php echo date('M d, Y', strtotime($fetch['bulan']))?></td>
		</tr>	
		<?php		
	}
}
?>
			</tbody>
		</table>


  </div>         
</div>
</div>
</div>

  </body>
</html>


















 


 			   
                     
  
            