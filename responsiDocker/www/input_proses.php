<?php
// memanggil file koneksi.php untuk melakukan koneksi database

  $link = mysqli_connect('db','user','test',"biodata2");

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
  $id = $_POST['id'];
  $namaleng = $_POST['namaleng'];
  $jk = $_POST['jk'];
  $alamat = $_POST['alamat'];
  $no = $_POST['no'];
  $email = $_POST['email'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO tbl_datadiriSET
			id = $id,
			namaLengkap = '$namaleng',
			jenisKelamin = '$jk',
			alamat = '$alamat',
			noTelp = '$no',
			email = '$email'
			";
  $result = mysqli_query($link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:index.php");
?>