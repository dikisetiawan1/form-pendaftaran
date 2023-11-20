<?php
include_once("function/helper.php");
include_once("function/koneksi.php");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';



// menghindari SQL injection
$nama = mysqli_real_escape_string($koneksi, $_POST["nama"]);
$email = mysqli_real_escape_string($koneksi, $_POST["email"]);
$alamat = mysqli_real_escape_string($koneksi, $_POST["alamat"]);

if (isset($_POST['submit'])) {

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'senadasetia101@gmail.com';
    $mail->Password = 'vnftmdsjgrvazoby';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('senadasetia101@gmail.com');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = "Konfirmasi pendaftaran!";
    $mail->Body = "HI, " . $nama . " Selamat Pendaftaran kamu telah berhasil!";

    $mail->send();
}
$query = mysqli_query($koneksi, "SELECT * FROM registrations WHERE email='$email' ");

// validasi jika email sudah digunakan sebelumnya
if (mysqli_num_rows($query) == 1) {
    header("location:" . BASE_URL . "index.php?notif=email&email=$email&nama=$nama&alamat=$alamat");
} else {
    mysqli_query($koneksi, "INSERT INTO registrations(nama,email,alamat)
                                        VALUES ('$nama','$email','$alamat')");
    header("location:" . BASE_URL . "index.php?notif=berhasil&email=$email&nama=$nama&alamat=$alamat");
}
