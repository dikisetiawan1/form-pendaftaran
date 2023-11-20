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
    $notif = isset($_GET["notif"]) ? $_GET["notif"] : false;
    $email = isset($_GET["email"]) ? $_GET["email"] : false;
    $nama = isset($_GET["nama"]) ? $_GET["nama"] : false;
    $alamat = isset($_GET["alamat"]) ? $_GET["alamat"] : false;

    ?>
    <title>Form Pendaftaran</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-4 mt-5 content">
                <h1>Form Pendaftaran</h1>
                <?php
                // menampilkna notifikasi
                if ($notif == "berhasil") {
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                            Selamat, Data berhasil ditambahkan!
                         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                    echo "<script>
                    alert('Pendaftaran berhasil, silahkan cek email anda.');
                    
                    </script>";
                } elseif ($notif == "email") {
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            Maaf, email yang kamu inputkan sudah terdaftar.
                         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                }

                ?>
                <div class="card shadow">
                    <div class="card-body">
                        <form action="<?php echo BASE_URL . "proses_pendaftaran.php"; ?>" method="POST">
                            <div class="element-input">
                                <label for="">Nama</label>
                                <span><input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>" required /></span>
                            </div>
                            <div class="element-input">
                                <label for="email">email</label>
                                <span><input type="email" id="email" name="email" class="form-control" value="<?php echo $email; ?>" required /></span>
                            </div>
                            <div class="element-input">
                                <label for="">Alamat</label>
                                <span><textarea name="alamat" cols="30" rows="10" class="form-control" required><?php echo $alamat; ?></textarea></span>
                            </div>
                            <div class="element-input">
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



















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