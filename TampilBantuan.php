
           
<?php
$q = intval($_GET['q']);

require_once "config.php";

$sql="SELECT * FROM laporan WHERE id_laporan = '".$q."'";
$result = mysqli_query($sql);
echo "<table>
<tr>
<th>id_bantuan</th>
<th>id_warga</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id_bantuan'] . "</td>";
    echo "<td>" . $row['id_warga'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
   
      

