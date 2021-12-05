<?php
include "koneksi.php";
// menyimpan data kedalam variabel
$id_cuti        = $_POST['id_cuti'];
$id_karyawan    = $_POST['id_karyawan'];
$nama_karyawan  = $_POST['nama_karyawan'];
$departemen     = $_POST['departemen'];
$jabatan        = $_POST['jabatan'];
$jeniscuti     = $_POST['jeniscuti'];
$tgl_cuti       = $_POST['tgl_cuti'];
// query SQL untuk insert data
$mysqli  = "INSERT INTO cuti (id_cuti,id_karyawan,nama_karyawan,departemen,jabatan,jeniscuti,tgl_cuti) VALUES ('$id_cuti', '$id_karyawan', '$nama_karyawan', '$departemen', '$jabatan', '$jeniscuti', '$tgl_cuti')";
//$query = "INSERT INTO cuti SET id_cuti='$id_cuti',id_karyawan='$id_karyawan',nama_karyawan='$nama_karyawan',departemen='$departemen',jabatan='$jabatan',jeniscuti='$jeniscuti',tgl_cuti='$tgl_cuti'";
$result  = mysqli_query($conn, $mysqli);
mysqli_close($conn);
header("location:index.php");
