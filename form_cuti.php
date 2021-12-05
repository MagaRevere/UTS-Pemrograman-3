<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Form Permintaan Cuti</title>
</head>

<body>
  <div class="container">
    <div class="row mt-4">
      <div class="col">
        <center>
          <h2>Form Permintaan Cuti</h2>
          <hr>
        </center>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row mt-3">
      <div class="col-md-6">
        <form method="post" action="simpan.php">

          <div class="mb-3">
            <label for="id_cuti" class="form-label">ID Cuti</label>
            <input type="text" class="form-control" id="id_cuti" name="id_cuti">
            <div id="idcutiwarn" class="form-text">Tidak Boleh Lebih Dari 8 Karakter</div>
          </div>

          <div class="mb-3">
            <label for="id_karyawan" class="form-label">ID Karyawan</label>
            <input type="text" class="form-control" id="id_karyawan" name="id_karyawan">
            <div id="idkarwarn" class="form-text">Tidak Boleh Lebih Dari 8 Karakter</div>
          </div>

          <div class="mb-3">
            <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
            <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan">
          </div>

          <div class="mb-3">
            <label class="form-label">Departemen</label>
            <select class="form-select" name="departemen" id="departemen" aria-label="Default select example">
              <option selected>Pilih Departmen Anda</option>
              <option value="HRD">HRD</option>
              <option value="Produksi">Produksi</option>
              <option value="Marketing">Marketing</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Jabatan</label>
            <select class="form-select" name="jabatan" id="jabatan" aria-label="Default select example">
              <option selected>Pilih Jabatan Anda</option>
              <option value="Manager">Manager</option>
              <option value="SPv">SPv</option>
              <option value="Leader">Leader</option>
              <option value="Staff">Staff</option>
              <option value="Admin">Admin</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Jenis Cuti</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" value="Cuti Biasa" name="jeniscuti" id="jenis1" checked>
              <label class="form-check-label">
                Cuti Biasa
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" value="Cuti Khusus" name="jeniscuti" id="jenis2">
              <label class="form-check-label">
                Cuti Khusus
              </label>
            </div>
          </div>

          <div class="mb-3">
            <label for="tgl_cuti" class="form-label">Tanggal Cuti</label>
            <input type="date" class="form-control" id="tgl_cuti" name="tgl_cuti">
          </div>



          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
          <a href="index.php"><button type="button" class="btn btn-secondary float-end">Kembali</button></a>
        </form>
        <br>

      </div>
      <hr>
      <br>
      <div>
        <div>



          <!-- Optional JavaScript; choose one of the two! -->

          <!-- Option 1: Bootstrap Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

          <!-- Option 2: Separate Popper and Bootstrap JS -->
          <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->