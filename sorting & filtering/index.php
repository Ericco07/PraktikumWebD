<!DOCTYPE html>
<html>
<head>
	<title>Sorting dan Filtering</title>
	
</head>
<body>
<div class="isi">
<center><h1>Praktikum Web</h1>
<h3>"Sorting dan Filtering"</h3><br><br><br>
<div class="formulir">
<table border="0">
<tr>
<td width="200px">
<b><a>NIM</a></b>
    <select id="nim" class="select">
        <option value="asc">Semua</option>
        <option value="asc">Urutkan Ascending</option>
        <option value="desc">Urutkan Descending</option>
    </select>
   </td>

<td width="170px">

<b><a>Nama</a></b>
    <select id="nama" class="select">
        <option value="asc">Semua</option>
        <option value="asc">Urutkan A-Z</option>
        <option value="desc">Urutkan Z-A</option>
    </select>
     </td>
<td width="230px">
<b><a>Jenis Kelamin</a></b>
	<select id="jk" class="select">
        <option value="all">Semua</option>
        <option value="Perempuan">Perempuan</option>
        <option value="Laki-laki">Laki-laki</option>
    </select>
     </td>
 
<td width="200px">
<b><a>Pencarian</a></b>
    <input type="text" class="select" id="cari" style="width:225px;" placeholder="Cari Nama/NIM"><br><br>
     </td>
   </tr>
    </table>
<?php

$koneksi = mysqli_connect("localhost","root","","simak") or die(mysqli_error());

	echo "<table class='tabel'>";
	echo "<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>Fakultas</th>
		  </tr>";?>
	<tbody id="tabel">
	<?php
	$sql = "SELECT * FROM tb_mahasiswa";
	$query = mysqli_query($koneksi, $sql);
	while($data = mysqli_fetch_array($query)){?>
			<tr>
				<td><?php echo $data['nim']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['jk']; ?></td>
				<td><?php echo $data['tempat_lahir']; ?></td>
				<td><?php echo $data['tanggal_lahir']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td><?php echo $data['email']; ?></td>
				<td><?php echo $data['fakultas']; ?></td>
			</tr>
		<?php
	}
	echo "</table>";?></tbody>
 
</div></div></div><br><br>
</body>
<script src="jquery.js"></script>
    <!-- Pencarian -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#cari").keyup(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var nama  = $("#nama").val();
          if (cari != ""){
            $("#tabel").html("<tr><td colspan=10></td></tr>") 
            $.ajax({
              type:"get",
              url:"pencarian.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          }
          else
          {
            $.ajax({
              url:"pencarian.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&nama="+nama,
              cache: false,
              success: function(msg){
                $("#tabel").html(msg);
              }
            });
          }
        });
      });
    </script>
    <!-- Filter -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#jk").change(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var nama  = $("#nama").val();
          $("#tabel").html("<tr><td colspan=10></td></tr>")  
          $.ajax({
              type:"get",
              url:"filter.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
    <!-- Sorting Nama -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#nama").change(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var nama  = $("#nama").val();
          $("#tabel").html("<tr><td colspan=10></td></tr>")  
          $.ajax({
              type:"get",
              url:"nama.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
    <!-- Sorting Nim -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#nim").change(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var nama  = $("#nama").val();
          $("#tabel").html("<tr><td colspan=10></td></tr>")  
          $.ajax({
              type:"get",
              url:"nim.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
</html>