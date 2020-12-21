<?php
@session_start();
 ?>
 <link href="default.css" rel="stylesheet" type="text/css">
 <h1>Add Post</h1>
<form action="input-post.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="author">
<table>
<tr><td width="46">Subject</td><td width="3">:</td><td width="348"><input name="subjek" type="text"></td></tr>
<tr><td>Isi</td><td>:</td><td>
  <textarea name="isi" id="post" cols="45" rows="5"></textarea>
<tr><td width="46">Images</td><td width="3">:</td><td width="348"> <input type="file" name="gambar"></td></tr> 
</td></tr>
<tr><td></td><td></td><td><input type="submit" value="Add Post(s)"></td></tr>
</table></form>

<?php
@session_start();
include 'config.php';
$updir="gambar/";
@$upfile=$updir.basename($_FILES['gambar']['name']);
@$file=($_FILES['gambar']['name']);
move_uploaded_file(@$_FILES['gambar']['tmp_name'],@$upfile);
@$subjek=$_POST['subjek'];
@$isi=$_POST['isi'];
@$author=$_SESSION['username'];
@$tanggal=$_POST['tanggal'];
mysqli_query($GLOBALS["___mysqli_ston"], "Insert into post values ('','$subjek','$isi','$author','$file','$tanggal')");

?>
<?php

