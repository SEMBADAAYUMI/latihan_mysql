<?php
// mysqli_connect("localhost", "root", "", "phpdasar");
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
$result = mysqli_query($conn, "SELECT * FROM pegawaipatklin");

//  function query(){
//     mysqli_query(mysqli_connect("localhost", "root", "", "phpdasar"));
    //  $rows = [];
    //  $row = mysqli_fetch_assoc($result);
    // while (query){
    //      $rows = $row; # code...
    //  }}
//     $rows = $row;
    
// }
// return $row;

