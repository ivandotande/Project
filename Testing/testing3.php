<?php
include '../PHP/connection.php';
?>

<h3>Form Pencarian Dengan PHP - WWW.MALASNGODING.COM</h3>
 
<form action="../Testing/testing3.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>No</th>
        <th>Nama</th>
        <th>Search</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($conn,"SELECT * FROM inventory_data WHERE part_name LIKE '%".$cari."%'");				
	}else{
		$data = mysqli_query($conn, "SELECT * FROM inventory_data");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $d['part_id']; ?></td>
        <td><?php echo $url =$d['part_name']; ?></td>
        <?php 
        $Eurl ="http://google.com/search?q=+$url";
        ?>
        <td><a href ="<?php echo $Eurl?>">Search</a></td>
	</tr>
	<?php } ?>
</table>