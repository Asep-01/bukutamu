<?php

$nama  = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

include 'koneksi.php';
$id = $_GET['id'];
$sql = "UPDATE tbtamu SET nama='$nama', email='$email', pesan='$pesan' where No='$id'
or die (mysqli_error($koneksi))";

$query = mysqli_query ($koneksi, $sql);
if ($query){
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Disimpan');
        window.location='lihat_buku.php';
    </script>
    <?php
}
?>