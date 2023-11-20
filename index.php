<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?v2" type="text/css">

    <?php
    include_once("function/helper.php");
    include_once("function/koneksi.php");

    // menerapkan notifikasi menggunakan $_GET 
    $page = isset($_GET['page']) ? $_GET['page'] : false;
    $notif = isset($_GET["notif"]) ? $_GET["notif"] : false;
    $email = isset($_GET["email"]) ? $_GET["email"] : false;
    $nama = isset($_GET["nama"]) ? $_GET["nama"] : false;
    $alamat = isset($_GET["alamat"]) ? $_GET["alamat"] : false;


    ?>
    <title>Form Pendaftaran</title>

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php ">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL . "index.php?page=data" ?>">Show Data</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row mt-3 ">
            <div class="col mt-5 mb-5 content">
                <?php
                // menampilkna notifikasi
                if ($notif == "berhasil") {
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                            Selamat, Data berhasil ditambahkan!
                         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                        
                        <script>
                            alert('Pendaftaran berhasil, silahkan cek email anda.');
                        </script>
                        ";
                } elseif ($notif == "email") {
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            Maaf, email yang kamu inputkan sudah terdaftar.
                         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                }

                ?>
                <?php
                $filename = "$page.php";
                if (file_exists($filename)) {
                    include_once($filename);
                } else {

                    include_once("form_pendaftaran.php");
                }
                ?>
            </div>
        </div>
    </div>

    <!--start footer -->
    <footer class="bg-light fixed-bottom ">
        <div class="row">
            <div class="col">
                <div class="text-center m-4">
                    Copyright@Diki Setiawan <?php echo date("Y") ?>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- 
    < !--Option 2: Separate Popper and Bootstrap JS < !-- < script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"> -->
    <!-- </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            -->
</body>

</html>