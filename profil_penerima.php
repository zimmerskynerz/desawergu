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
  
  
<div class="col-md-7">
<!-- start: Table -->
				<form role="form" name="ad" method = "POST" action="">
            <div class="title"><h3>Detail Profil</h3></div>
<table class="table table-hover table-condensed">
			
                    
			    <?php
				//MENAMPILKAN DETAIL KERANJANG BELANJA//
                include 'config.php';	
			    $no = 1;
                //mysql_select_db($database_conn, $conn);
                $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from user_penerima where id_penerima='$id_penerima'");
                 while ($data = mysqli_fetch_array($query)) { 	//menampung data hasil dari perintah query di atas dengan perulangan
?>
                
               <img src="gambar/<?php echo $data['gambar']; ?>" height="150" width="120" class="card-img-center" alt="...">
                 <tr><td>Nama</td><td>:</td><td><center><?php echo $data['nama']; ?></center></td><tr>
				  <tr><td>NIK</td><td>:</td><td><center><?php echo $data['NIK']; ?></center></td><tr>
			 <tr><td>Password</td><td>:</td><td><center><?php echo $data['password']; ?></center></td><tr>
              <tr><td>Gender</td><td>:</td><td><center><?php echo $data['gender']; ?></center></td><tr>
			   <tr><td>Alamat</td><td>:</td><td><center><?php echo $data['alamat']; ?></center></td><tr>
            <tr><td>Nama</td><td>:</td><td><center><?php echo $data['telepon']; ?></center></td><tr>
			
				
				 
				 
				<tr> <td><a href="ubah_profil_penerima.php?id_penerima=<?php echo $data['id_penerima'];?>" class="btn btn-xs btn-danger">EDIT</a></center></td>
						</div></p>
            </div>
        <td>
		
                </tr>
			 <?php $no++;  } ?>
					
                        
			
                
    </form>

</table>
			
				
			<!-- end: Table -->
</div>

<div class="col-md-5">
 <div class="title"><h3>Informasi Bantuan</h3></div>
<table class="table table-hover table-condensed">
			
                    
			    <?php
				//MENAMPILKAN DETAIL KERANJANG BELANJA//
                include 'config.php';	
			    $no = 1;
                //mysql_select_db($database_conn, $conn);
                $query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from data_warga where id_warga='$id_warga'");
                 while ($data = mysqli_fetch_array($query)) { 	//menampung data hasil dari perintah query di atas dengan perulangan
?>
                
               <img src="gambar/<?php echo $data['gambar']; ?>" height="150" width="120" class="card-img-center" alt="...">
                 <tr><td>Nama</td><td>:</td><td><center><?php echo $data['nama']; ?></center></td><tr>
				  <tr><td>Nik</td><td>:</td><td><center><?php echo $data['nik']; ?></center></td><tr>
			 <tr><td>Password</td><td>:</td><td><center><?php echo $data['password']; ?></center></td><tr>
              <tr><td>NO kk</td><td>:</td><td><center><?php echo $data['no_kk']; ?></center></td><tr>
			   <tr><td>RT</td><td>:</td><td><center><?php echo $data['rt']; ?></center></td><tr>
            <tr><td>RW</td><td>:</td><td><center><?php echo $data['rw']; ?></center></td><tr>
			
				
				 
				 
				<tr> <td><a href="ubah_profil_penerima.php?id_penerima=<?php echo $data['id_penerima'];?>" class="btn btn-xs btn-danger">EDIT</a></center></td>
						</div></p>
            </div>
        <td>
		
                </tr>
			 <?php $no++;  } ?>
					
                        
			
                
    </form>

</table>
</div>
			

</div>

       
   
   
      

</div>
</body>
</html>
			   