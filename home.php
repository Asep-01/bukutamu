<?php
  include 'koneksi.php';
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
      height: 100vh;
    }

    nav {
      background-color: white;
      display: flex;
      list-style-type: none;
      justify-content: space-between;
      padding: 1rem;
      
    }

    nav ul {
      display: flex;
      list-style: none;
      gap: 15px;
      align-items: center;
    }

    nav ul li a {
      text-decoration: none;
      color: black;
      font-weight: 600;
      padding: 8px;
    }

    .nav-bar img{
      max-width: 50px;
    }

    nav ul li a:hover {
      border-bottom: 1px solid #0000005B;
    }


    h2 {
      text-align: center;
    }

    label {
      display: block;
      margin: 10px 0 5px;
    }

    form {
      margin: 3rem;
      padding: 100;
    }
    input {
      display: flex;
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
<nav>
    <div class="nav-bar">
      <img src="img/logo.png" alt="">
    </div>
    <ul>
    <li>
      <a href="home.php">Home</a>
    </li>
    <li>
      <a href="#">Data Pengguna</a>
    </li>
    <li>
      <a href="lihat_buku.php">Data Buku</a>
    </li>
    <li>
      <a href="logout.php">Logout</a>
    </li>
    </ul>
</nav>

<div class="container">
  <h2>Selmat Datang Di Website Kami</h2>
</div>

</body>
</html>
