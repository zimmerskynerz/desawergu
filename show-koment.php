
<?php 

?>


<!-- tampilkan komentar -->
	<?php 
include 'config.php';
?>
  
  <link href="admin-kom/css/bootstrap.min.css" rel="stylesheet">
 <div class="panel-body">
      <ul class="list-group">
		<?php
        @$id_post=$_GET['id_post'];
		$skomentar = "SELECT * from komentar where id_post='$id_post' ";
		$selectkmt = mysqli_query($GLOBALS["___mysqli_ston"], $skomentar);
		while($select_result = mysqli_fetch_array($selectkmt))
		{
		$idk					= $select_result['idk'] ;
		$nama					= $select_result['nama'] ;
		$web					= $select_result['web'] ;
		$komentar				= $select_result['komentar'] ;
		$judulk					= $select_result['judulk'] ;
		$tglk					= $select_result['tglk'] ;
        $avatar					= $select_result['avatar'] ;
		echo"

                    <li class='list-group-item'>
                        <div class='row'>
                            <div class='col-xs-2 col-md-1'>
                                <img src='$avatar' class='img-circle img-responsive' alt='avatar user' /></div>
                            <div class='col-xs-10 col-md-11'>
                                <div>
                                    <div><span class='label label-info'>$judulk</span></div>
                                    <div class='mic-info'>
                                        oleh: <a href='$web'>$nama</a> tanggal: $tglk
                                    </div>
                                </div>
                                <div class='comment-text'>
                                    $komentar
                                </div>               
							
                            </div>
                        </div>
                    </li>
            ";}  ?>      
                </ul>                
            </div>
        </div>
    </div>
	<!-- komentar selesai -->