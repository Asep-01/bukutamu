<?php
    if (isset($_POST['simpan']))
    {
        $nama   = $_POST['nama'];
        $email  = $_POST['email'];
        $pesan  = $_POST['pesan'];

        mysqli_query ($koneksi, "UPDATE tbtamu SET nama='$nama', 
        email='$email', pesan='$pesan'  where id='$id'")
        or die (mysqli_error($koneksi));
    
        echo "<div align='center'><h5>Silahkan Tunggu, Data Sedang diupdate...</h5></div>";
        echo "<meta http-equiv='refresh' content='1;url=http://localhost/input_buku_tamu/lihat_buku.php'>";
    }
?>
