<!DOCTYPE html>
<html>
<head>
	<title>profil</title>
</head>
<body>
	<form action="much.php" method="POST">
	<h1> KONSER AMAL INDAHNYA BERBAGI</h1>
	<hr size = "5px" color="black">
	<br>
	<table>
		<tr>
			<td>Nama Pemesan</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Kode Studio</td>
			<td>:</td>
			<td><select name="kode">
				<option name="kode" value="studio1">STUDIO 1</option>
				<option name="kode" value="studio2">STUDIO 2</option>
			</select></td>
		</tr>
		<tr>
			<td>Jenis Kelas</td>
			<td>:</td>
			<td><input type="radio" name="jenis" value="VIP">VIP
				<input type="radio" name="jenis" value="FESTIVAL">FESTIVAL</td>
		</tr>
		<tr>
			<td>Jumlah Tiket</td>
			<td>:</td>
			<td><input type="text" name="jumlah"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="Tampil">
				<input type="reset" name="reset" value="Batal"></td>
		</tr>
	</table>


</form>
</body>
</html>