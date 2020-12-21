<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="berita/css/bootstrap.min.css" rel="stylesheet">
	<link href="berita/css/style.css" rel="stylesheet">
    <script src="berita/js/jquery-3.2.1.js"></script>
    <script src="berita/js/bootstrap.min.js"></script>
	<head>
<body>
<div class="jumbotron">

<div class="row">
  
  <center><div class="title" style="margin-left: ;"><h3>Jika Anda Belum Menjadi Member Kami, Silahkan Daftar Disini...</h3></div></center>
           <form class="form-horizontal" method="post" action="proses_user_penerima.php" enctype="multipart/form-data">
<table style="font-style: oblique; font-weight: bold; margin-left: 140px;">
<tr>
<td width="150">Nama</td>
<td width="30">:</td>
<td width="550"><input type="text" name="nama" size="30" class="required" placeholder="Nama Anda" /></td>
</tr>
<tr>
<td width="150">NIK</td>
<td width="30">:</td>
<td width="550"><input type="text" name="NIK" id="NIK" size="30" class="required" placeholder="Masukkan NIK" /></td>
</tr>
<tr>
<td width="150">Password</td>
<td width="30">:</td>
<td width="550"><input type="Password" name="password" size="30" class="required" minlength="3" placeholder="Password " /></td>
</tr>
<tr>
<td width="150">Jenis Kelamin</td>
<td width="30">:</td>
<td width="550"><select name="pilihan" class="form-control">
                              <option value="Laki-Laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
							  </select></td>
</tr>
<tr>
<td width="150">Alamat</td>
<td width="30">:</td>
<td width="550"><textarea name="alamat" size="30"  minlength="3" placeholder="Alamat" /></textarea></td>
</tr>

<tr>
<td width="150">Telepon</td>
<td width="30">:</td>
<td width="550"><input type="text" name="telepon" size="30" class="required email" minlength="3" placeholder="Telepon" /></td>
</tr>

<tr>
<td width="150"></td>
<td width="30"></td>
<td width="550">
<input class="button" type="submit" value="Daftar"/>
</td>
</tr>
</table>
</form>
</div>

       
   
   
      

</div>
</body>
</html>
			   