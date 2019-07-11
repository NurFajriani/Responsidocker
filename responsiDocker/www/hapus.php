<?php
  $link = mysqli_connect('db','user','test',"biodata2");

  if (isset($_GET["id"])) {

    $id = $_GET["id"];

    $query = "DELETE FROM tbl_datadiri WHERE id=$id ";
    $hasil_query = mysqli_query($link, $query);

    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($link).
           " - ".mysqli_error($link));
    }
  }
  // melakukan redirect ke halaman index.php
  header("location:index.php");
?>