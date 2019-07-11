<?php

  $link = mysqli_connect('db','user','test',"biodata2");
  if (isset($_GET["id"])) {

    $id = $_GET["id"];
  $namaleng 	= $_POST['namaleng'];
  $jk 		= $_POST['jk'];
  $alamat 	= $_POST['alamat'];
  $no 		= $_POST['no'];
  $email 	= $_POST['email'];
 

  
  $query  = "UPDATE tbl_datadiri SET 
  namaLengkap='$namaleng', 
  jenisKelamin='$jk',
  alamat='$alamat',
  noTelp='$no',
  email='$email'
  WHERE id=$id";
  
  
 
  $result = mysqli_query($link, $query);

  
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_error($link).
       " - ".mysqli_error($link));
  }
}


header("location:index.php");

?>