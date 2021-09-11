<!DOCTYPE html>
<html>
<head>
	<title>profil</title>
</head>
<body>
	<h1>KONSER AMAL INDAHNYA BERBAGI</h1>
	<hr size = "5px" color="black">
	<br>
	<table>
		<tr>
			<td>Nama Pemesan</td>
			<td>:</td>
			<td><?php echo $_POST["nama"]; ?></td>
		</tr>
		<tr>
			<td>Kode Studio</td>
			<td>:</td>
			<td><?php echo $_POST["kode"]; ?></td>
		</tr>
		<tr>
		<td>Bintang Tamu</td>
			<td>:</td>
			<td><?php 
			$kode = $_POST['kode'];
			if ($kode == "studio1") {
				echo "Opik";
			}else{
				echo "Raihan";
			}
			
			?></td>
		</tr>
		<tr>
			<td>Jenis Kelas</td>
			<td>:</td>
			<td><?php echo $_POST["jenis"]; ?></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td><?php 
				$jenis = $_POST['jenis'];
				if ($jenis == "VIP") {
					echo "50000";
					$harga = 50000;
				}elseif ($jenis == "FESTIVAL") {
					echo "25000";
					$harga = 25000;
				}
			?></td>
		</tr>
		<tr>
			<td>Jumlah Beli</td>
			<td>:</td>
			<td><?php echo $_POST["jumlah"]; ?></td>
		</tr>
		<tr>
			<td>Total</td>
			<td>:</td>
			<td><?php 
			$jumlah = $_POST['jumlah'];
			$total = $jumlah * $harga;
			echo $total;
			?></td>
		</tr>
		<tr>
			<td><h3><a href="latihanform.php">INPUT KEMBALI</a></h3></td>
		</tr>
	</table>


</body>
</html>