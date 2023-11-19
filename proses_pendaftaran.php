<?php
include_once("function/helper.php");
include_once("function/koneksi.php");

// menghindari SQL injection
$nama = mysqli_real_escape_string($koneksi, $_POST["nama"]);
$email = mysqli_real_escape_string($koneksi, $_POST["email"]);
$alamat = mysqli_real_escape_string($koneksi, $_POST["alamat"]);


$query = mysqli_query($koneksi, "SELECT * FROM registrations WHERE email='$email' ");

// validasi jika email sudah digunakan sebelumnya
if (mysqli_num_rows($query) == 1) {
    header("location:" . BASE_URL . "index.php?notif=email");
} else {
    mysqli_query($koneksi, "INSERT INTO registrations(nama,email,alamat)
                                        VALUES ('$nama','$email','$alamat')");
    header("location:" . BASE_URL . "index.php?notif=berhasil&email=$email");
}
