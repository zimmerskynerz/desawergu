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
<div class="col-md-12">

<blockquote class="blockquote text-center">
  <p class="mb-0">Warga Penerima Program Bantuan BPNT </p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
</div>

<table class="table table-striped">
  <thead>
  
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIK</th>
      <th scope="col">NAMA</th>
      <th scope="col">ALAMAT</th>
	  <th scope="col">RT</th>
      <th scope="col">RW</th>
      <th scope="col">KECAMATAN</th>
      <th scope="col">KABUPATEN</th>
    </tr>
  </thead>
  <?php
 					 	include "config.php";
						 $sql="SELECT data_warga.*,program_bantuan.nama_bantuan
						        FROM data_warga
								LEFT JOIN program_bantuan on program_bantuan.id_bantuan= data_warga.id_bantuan WHERE nama_bantuan='BPNT'";
						  $query=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
						  $no=1;
						  while($data=mysqli_fetch_array($query)){
			  		?>
  <tbody>
    <tr>
							<td><?php echo $no; ?></td>
 							<td><?php echo $data['nik']; ?></td>
 							<td><?php echo $data['nama']; ?></td>
 							<td><?php echo $data['alamat']; ?></td>
 							<td><?php echo $data['rt']; ?></td>
 							<td><?php echo $data['rw']; ?></td>
							<td><?php echo $data['kecamatan']; ?></td>
							<td><?php echo $data['kabupaten']; ?></td>
    </tr>
     <?php $no++;} ?>
  </tbody>
</table>

</div>



</div>
</div>

       
   
   
      

</div>
</body>
</html>
			   