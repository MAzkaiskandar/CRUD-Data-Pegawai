<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section class="vh-100 bg-image"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Register</h2>
                <form id="registerForm" action="proses_register.php" method="post">
                  
                  <div class="form-outline mb-4">
                    <input type="text" id="nama" name="nama" class="form-control form-control-lg" required />
                    <label class="form-label" for="nama">Nama</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="text" id="NIK" name="NIK" class="form-control form-control-lg" required />
                    <label class="form-label" for="NIK">NIK</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="text" id="no_telp" name="no_telp" class="form-control form-control-lg" required />
                    <label class="form-label" for="no_telp">Telepon</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                      <option value="" disabled selected>Pilih Jenis Kelamin Anda</option>
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                    <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="text" id="alamat" name="alamat" class="form-control form-control-lg" required />
                    <label class="form-label" for="alamat">Alamat</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" required />
                    <label class="form-label" for="password">Password</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <select name="id_jabatan" class="form-control" required>
                      <option value="" disabled selected>Pilih Jabatan Anda</option>
                      <?php
                      include "koneksi.php";
                      $qry_jabatan = mysqli_query($conn, "SELECT * FROM tabel_jabatan");
                      while ($data_jabatan = mysqli_fetch_array($qry_jabatan)) {
                        echo '<option value="' . $data_jabatan['id_jabatan'] . '">' . htmlspecialchars($data_jabatan['nama_jabatan']) . '</option>';
                      }
                      ?>
                    </select>
                    <label class="form-label" for="id_jabatan">Jabatan</label>
                  </div>
                  
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                  </div>
                  
                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
