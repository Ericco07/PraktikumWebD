<!DOCTYPE html>
<html>
<head>
	<title>PAGINASI</title>
</head>
<body>
<div class="isi">
<h1>PAGINASI</h1>
<div class="formkot">
<?php

// -----------------------------------------------------------Koneksi------------------------------------------------------------------------
$koneksi = mysqli_connect("localhost","root","","simak") or die(mysqli_error());

// -----------------------------------------------------------Baca------------------------------------------------------------------------
	$halaman = 4;
  	$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  	$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  	$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
  	$total = mysqli_num_rows($result);
  	$pages = ceil($total/$halaman);  
  	$sql = "SELECT * FROM mahasiswa LIMIT $mulai, $halaman";
	$query = mysqli_query($koneksi, $sql);          
	$no =$mulai+1;
	echo "<table class='tabel'>";
	echo "<tr>
			<th>NO</th>
			<th>ID</th>
			<th>NAMA LENGKAP</th>
			<th>NAMA USER</th>
			<th>NIM</th>
			<th>JENIS KELAMIN</th>
			<th>TEMPAT LAHIR</th>
			<th>TANGGAL LAHIR</th>
			<th>ASAL SEKOLAH</th>
			<th>JURUSAN</th>
			<th>PASSWORD</th>
		  </tr>";
	
	while($data = mysqli_fetch_array($query)){
		?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $data['id']; ?></td>
				<td><?php echo $data['namalengkap']; ?></td>
				<td><?php echo $data['namauser']; ?></td>
				<td><?php echo $data['nim']; ?></td>
				<td><?php echo $data['kelamin']; ?></td>
				<td><?php echo $data['tempat']; ?></td>
				<td><?php echo $data['tanggal']; ?></td>
				<td><?php echo $data['asal']; ?></td>
				<td><?php echo $data['jurusan']; ?></td>
				<td><?php echo $data['pass']; ?></td>
			</tr>
		<?php
		$no++;
	}
	echo "</table>";

?><div class="pagination">
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
 
  <?php } ?>
 
</div></div></div><br><br>
</body>
</html>