<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $conn = mysqli_query($koneksi, "SELECT * FROM tbtamu WHERE No='$id'");
    $data = mysqli_fetch_array($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku Tamu</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
    }

    h2 {
      text-align: center;
    }

    label {
      display: block;
      margin: 10px 0 5px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Buku Tamu</h2>
  <form action="" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" value="<?php echo $data['nama']?>">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $data['email']?>">

    <label for="pesan">Pesan:</label>
    <input id="pesan" name="pesan" rows="4" value="<?php echo $data['pesan']?>"></input>

    <button type="submit">simpan</button>
  </form>
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

</div>

</body>
</html>

