<?php
// mysqli_connect("localhost", "root", "", "phpdasar");
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// $result = mysqli_query($conn, "SELECT * FROM pegawaipatklin");
if( isset($_POST["submit"]) ){
  $Nama = $_POST["nama"];
  $NIP = $_POST["nip"];
  $Shift = $_POST["Shift"];
  $Tanggal = $_POST["Tanggal"];
  $query = "INSERT INTO pegawaipatklin VALUES ('', '$Nama', '$NIP', '$Shift', '$Tanggal')";
  mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style3.css">
<body>
  <h1>INPUT DATA</h1>
  <form action="" method="POST">
    
    <li>
      <label for="nama">Nama Lengkap</label>
      <div>
        <input type="text" name="nama" id="nama" required/>
      </div>
    </li>
    <br>
    <li>
      <label for="nip">NIP/NPS</label>
      <div>
        <input type="text" name="nip" id="nip" required/>
      </div>
    </li>
    <br>
    <li>
      <label for="Shift">Shift Jaga</label>
      <div>
        <input type="number" name="Shift" id="Shift" required placeholder="masukkan angka 1,2,3"/>
      </div>
    </li>
    <br>
    <li>
      <label for="Tanggal">Tanggal Jaga</label>
      <div>
        <input type="text" name="Tanggal" id="Tanggal" required placeholder="dd-mm-yyy"/>
      </div>
    </li>
    <button type="submit" name="submit">KIRIM</button>
    <button>
    <a href="index.php">Lihat Rekapitulasi</a>
    </button>
    
    
    
    </form>
    
</body>
</html>