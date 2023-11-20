  <div class="container">
      <div class="row">
          <div class="col-4">
              <h1>Form Pendaftaran</h1>
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