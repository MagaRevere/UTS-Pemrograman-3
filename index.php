<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data Cuti Karyawan</title>
</head>

<body>

    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <center>
                    <h2>Data Cuti Karyawan</h2>
                    <hr>
                </center>
                <a href="form_cuti.php"><button type="button" class="btn btn-primary">Izin Cuti</button></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID Cuti</th>
                            <th scope="col">ID Karyawan</th>
                            <th scope="col">Nama Karyawan</th>
                            <th scope="col">Departemen</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Jenis Cuti</th>
                            <th scope="col">Tanggal Cuti</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "koneksi.php";
                        $data = mysqli_query($conn, "SELECT * FROM cuti");
                        $nomor = 1;
                        while ($d = mysqli_fetch_array($data)) { ?>
                            <tr>
                                <th scope="row"><?php echo $nomor++ ?></th>
                                <td><?php echo $d['id_cuti']; ?></td>
                                <td><?php echo $d['id_karyawan']; ?></td>
                                <td><?php echo $d['nama_karyawan']; ?></td>
                                <td><?php echo $d['departemen']; ?></td>
                                <td><?php echo $d['jabatan']; ?></td>
                                <td><?php echo $d['jeniscuti']; ?></td>
                                <td><?php echo $d['tgl_cuti']; ?></td>
                            </tr>
                        <?php }; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>