<?php 
require 'koneksi.php';

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$nama = $_SESSION["username"];
$type = $_SESSION["role"];

?>
<html>
<head>
	<title></title>
	<style type="text/css">
	/*{
		margin: 0;
		padding: 0;
	} */
	.logo {
		margin-left: 190px;
		background-color: white;
		border-color:  #e6e6e6;
		border-width: 2px;
		border-style: solid;
		border-radius: 50px 0px 0px;
		height: 300px;
		width: 200px;
	}
	.layout {
		background-image: url("unud.jpeg");
		background-repeat: no-repeat;
		width: 2000px;
		height: 340px;
		margin-left: 397px;
		margin-top: -304px;
	}
	.home {
		background-color: blue;
		padding: 2px 2px;
		color: white;
		text-align: center;
		height: 35px;
		width: 100px;
		margin-left: 397px;
		text-decoration: none;

	}
	.home:hover {
		background-color:#0000b3;
		text-decoration: none;
	}
	.tentang {
		background-color: blue;
		padding: 2px 2px;
		color: white;
		text-align: center;
		height: 35px;
		width: 100px;
		margin-left: 497px;
		margin-top: -39px;
	}
	.tentang:hover {
		background-color:#0000b3;
	}
	.profil {
		background-color: blue;
		padding: 2px 2px;
		color: white;
		text-align: center;
		height: 35px;
		width: 100px;
		margin-left: 597px;
		margin-top: -39px;
	}
	.profil:hover {
		background-color:#0000b3;
	}
	.kontak{
		background-color: blue;
		text-decoration: none;
		padding: 2px 2px;
		color: white;
		text-align: center;
		height: 35px;
		width: 100px;
		margin-left: 697px;
		margin-top: -39px;
	}

	.kontak:hover {
		background-color:#0000b3;
		text-decoration: none;
	}
	.text {
		margin-top: 6px;
		text-decoration: none;
	}

	.visi {
		background-color: white;
		font-family: calibri;
		margin-left: 397;
		height: 100%;
		width: 100%;
	}
.log {
		margin-left: 1270px;
	}

	</style>
</head>
<body>
<div class="log"><font style="font-size: 16px; font-weight: bold;"><a href="logout.php">Logout</a></font><br></div>
<div class="logo"><img src="logo.png" width="220px" height="220px"></div>
<div class="layout"></div>
<a href="index.php.html"><div class="home"><div class="text">HOME</div></div></a>
<a href="tentang.php"><div class="tentang"><div class="text">TENTANG</div></div></a>
<a href="profil.php"><div class="profil"><div class="text">PROFIL</div></div></a>
<a href="kontak.php"><div class="kontak"><div class="text">KONTAK</div></div></a>
<div class="visi">
<br>
	<font color="blue"><b>Profil Pengajar Universitas Udayana</b></font><br><br>
<table border="0" width="250px">
	<tr>
	<td colspan="3"><center><img src="user.png" width="150px" height="150px"></td>

	</tr>

	<tr>
	<td width="400px">Nama</td>
	<td>:</td>
	<td>Ericco</td>
	</tr>

	<tr>
	<td>Kode Pengajar</td>
	<td>:</td>
	<td>100053100134</td>
	</tr>

	<tr>
	<td>Informasi Pengajar</td>
	<td>:</td>
	<td>Dosen Ilkom</td>
	</tr>

	<tr>
	<td>Alamat</td>
	<td>:</td>
	<td>Jimbaran, Bali</td>
	</tr>

		
</table><br><br>

<table border="0" width="250px">
	<tr>
	<td colspan="3"><center><img src="user.png" width="150px" height="150px"></td>

	</tr>

	<tr>
	<td width="400px">Nama</td>
	<td>:</td>
	<td>Gregorius</td>
	</tr>

	<tr>
	<td>Kode Pengajar</td>
	<td>:</td>
	<td>100053104368</td>
	</tr>

	<tr>
	<td>Informasi Pengajar</td>
	<td>:</td>
	<td>Dosen Kimia</td>
	</tr>

	<tr>
	<td>Alamat</td>
	<td>:</td>
	<td>Denpasar, Bali</td>
	</tr>

		
</table><br><br>

<table border="0" width="250px">
	<tr>
	<td colspan="3"><center><img src="user.png" width="150px" height="150px"></td>

	</tr>

	<tr>
	<td width="400px">Nama</td>
	<td>:</td>
	<td>Jansen</td>
	</tr>

	<tr>
	<td>Kode Pengajar</td>
	<td>:</td>
	<td>100056794750</td>
	</tr>

	<tr>
	<td>Informasi Pengajar</td>
	<td>:</td>
	<td>Dosen Farmasi</td>
	</tr>

	<tr>
	<td>Alamat</td>
	<td>:</td>
	<td>Buleleng, Bali</td>
	</tr>

		
</table>
</div>

	</body>
</html>