		<?php		
		include "config.php";
		$cariavt = "SELECT avtr from avatarr order by rand() limit 1";
		$avauser = mysqli_query($GLOBALS["___mysqli_ston"], $cariavt);
		while($select_result = mysqli_fetch_array($avauser))
		{
		$avtr	= $select_result['avtr'] ;		
		}
		?>
		

<?php
include "config.php";
@$post=$_GET['id_post'];
$nama	 		= $_POST['nama'] ;
$web	 		= $_POST['web'] ;
$komentar		= $_POST['komentar'] ;
$judulk			= $_POST['judulk'] ;
$email			= $_POST['email'] ;
$tglk			= date('d-m-Y');


$query_insert = "insert into komentar (post,nama, web, email,judulk,komentar,tglk,avatar)values(
'$post',
'$nama', 
'$web', 
'$email',
'$judulk',
'$komentar',
'$tglk',
'$avtr'

);";

$insert = mysqli_query($GLOBALS["___mysqli_ston"], $query_insert);	
if($insert)
	{
		echo"<META HTTP-EQUIV=Refresh CONTENT='3; URL=index.php'>";
		include"terimakasih-komentar.php";
		
        }
else
	{
	echo "Gagal update ... ";
	}
?>