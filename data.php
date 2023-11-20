<?php
include_once("function/helper.php");
include_once("function/koneksi.php");
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Tabel From Database</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM registrations");
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo "     <tr>
                                        <td>$no</td>
                                        <td>$row[nama]</td>
                                        <td>$row[email]</td>
                                        <td>$row[alamat]</td>
                                    </tr>
                                      ";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>