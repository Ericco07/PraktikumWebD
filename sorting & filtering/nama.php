<?php 
    include "koneksi.php";

    $nim    = $_GET['nim'];
    $nama   = $_GET['nama'];
    $jk    = $_GET['jk'];
    $cari   = $_GET['cari'];

    if(($nama=="asc")&&($jk=="all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                tb_mahasiswa 
            ORDER BY nama ASC
        ");
    }

    else if(($nama=="asc")&&($jk<>"all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                tb_mahasiswa 
            WHERE jk = '$jk'
            ORDER BY nama ASC
        ");
    }

    else if(($nama=="desc")&&($jk=="all")){ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                tb_mahasiswa 
            ORDER BY nama DESC
        ");
    }

    else{ 
        $query = mysqli_query($koneksi, "
            SELECT 
                * 
            FROM
                tb_mahasiswa 
            WHERE jk = '$jk'
            ORDER BY nama DESC
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