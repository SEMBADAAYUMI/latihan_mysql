<?php
require"fungsion.php";
// mysqli_connect("localhost", "root", "", "phpdasar");
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");
// $result = mysqli_query($conn, "SELECT * FROM pegawaipatklin");
// var_dump($result);
// $peg = mysqli_fetch_row($result);
// $peg = mysqli_fetch_assoc($result);
// while ( $peg = mysqli_fetch_assoc($result)) {
// var_dump($peg);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style2.css">
<body>
<H1>REKAPITULASI DAFTAR JAGA IDUL FITRI</H1>
<a href="input.php">INPUT DATA</a>
<br><br>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>NIP</td>
        <td>Shift</td>
        <td>Tanggal Jaga</td>
      </tr>
    <?php while( $row = mysqli_fetch_assoc($result)) : ?> 
      <tr>
        <td><?= $row["No"]; ?></td>
        <td><?= $row["Nama"]; ?></td>
        <td><?= $row["NIP"]; ?></td>
        <td><?= $row["Shift"]; ?></td>
        <td><?= $row["Tanggal"]; ?></td>
      </tr>
      <?php endwhile; ?>
    </table>
</html>