<?php
if ($_POST) {
    $nama = $_POST['nama'];
    $NIK = $_POST['NIK'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $password = $_POST['password'];
    $id_jabatan = $_POST['id_jabatan'];

    if (empty($nama)) {
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='register.php';</script>";
    } elseif (empty($NIK)) {
        echo "<script>alert('NIK tidak boleh kosong');location.href='register.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('password tidak boleh kosong');location.href='register.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO tabel_pegawai (nama ,NIK , no_telp , alamat , jenis_kelamin , password , id_jabatan) value ('" . $nama . "','" . $NIK . "','" . $no_telp . "','" . $alamat . "','" . $jenis_kelamin . "','" . $password . "','" . $id_jabatan . "')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan Pegawai');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Pegawai');location.href='register.php.php';</script>";
        }
    }
}

?>