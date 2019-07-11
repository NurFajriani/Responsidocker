<?php
  // buat koneksi dengan database mysql
  $host = "localhost";
  $user = "root";
  $pass = "";
  $name = "biodata2";
 $link = mysqli_connect('db','user','test','biodata2');

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$link){
    die ("Koneksi dengan database gagal: ".mysql_connect_errno().
    " - ".mysql_connect_error());
  }
?>