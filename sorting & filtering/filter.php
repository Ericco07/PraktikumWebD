<?php 
    include "koneksi.php";

    $nim    = $_GET['nim'];
    $nama   = $_GET['nama'];
    $jk    = $_GET['jk'];
    $cari   = $_GET['cari'];

    if($jk=="all"){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                tb_mahasiswa 
        ");
    }

    else{ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                tb_mahasiswa 
            WHERE jk = '$jk'
        ");
    }
?>
<?php 
    include "koneksi.php";
    while($data = mysqli_fetch_array($query)){
?>
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
<?php } ?>