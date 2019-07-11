<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <h1>Input Data</h1>
    <div class="container">
      <form id="id" action="input_proses.php" method="post">
        <fieldset>
        <legend>Input Data Diri</legend>
          <p>
            <label for="id">ID : </label>
            <input type="text" name="id" id="id" placeholder=" ">
          </p>
		  <p>
            <label for="nim">Nama Lengkap : </label>
            <input type="text" name="namaleng" id="namaleng" placeholder=" ">
          </p>
          <p>
            <label for="fakultas" >Jenis Kelamin : </label>
              <select name="jk" id="jenisKelamin">
                <option value="Laki-Laki">Laki-Laki </option>
                <option value="Perempuan">Perempuan</option>
              </select>
          </p>
          <p>
            <label for="jurusan">Alamat : </label>
            <input type="text" name="alamat" id="alamat">
          </p>
          <p >
            <label for="ipk">No Telp : </label>
            <input type="text" name="no" id="no" placeholder=" ">
          </p>
		  <p >
            <label for="ipk">E-mail : </label>
            <input type="text" name="email" id="email" placeholder=" ">
          </p>

        </fieldset>
        <p>
          <input type="submit" name="input" value="Tambah Data">
        </p>
      </form>
    </div>
  </body>
</html>