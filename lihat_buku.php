<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku Tamu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
  crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" width="40px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dasbord.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Data Pengguna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lihat_buku.php">Data Buku</a>
        </li>
      </ul>
      <form class="d-flex" action="logout.php">
        <button class="btn btn-outline-success" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>
</head>
<body>
<div>
<h2 class="contoh">DATA BUKU TAMU</h2>
<table class="table table-bordered contoh">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pesan</th>
        <th>Aksi</th>           
      </tr>
        <?php
        include 'koneksi.php';
        $sql = "SELECT*FROM tbtamu";
        $query = mysqli_query ($koneksi, $sql);
        $No=1;
        while ($data=mysqli_fetch_array($query)){?>
        <tr>
            <td><?= $No++; ?></td>
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['email'];?></td>
            <td><?php echo $data['pesan'];?></td>
            <td>
            <a href="hapus.php?id=<?php echo $data['No'];?>" 
            onclick="return confirm('Yakin Mau Hapus .?')">
                <span class="text"></span>Hapus</Details> </span>
            </a>
            </td>
        </tr>
        <?php } ?>
            </table>
            <form method="post" action="dasbord.php" class="contoh">
                <button type="submit" class="btn btn-outline-primary">Tambah</button>
            </form>
</div>
</body>
</html>