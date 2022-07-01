<?php 
  require './function/buat-akun.php';

  if(isset($_POST["register"])) {
    if(registrasi($_POST) > 0) {
      echo "
        <script>
          alert('user baru berhasil ditambahkan!');
        </script>
      ";
    } else {
      echo mysqli_error($conn);
    }
  }
?>

<!-- Modal Form Register-->
<div class="modal fade" id="register-form" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Buat Akun</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <!-- Name -->
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <!-- Username -->
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <!-- Password -->
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <!-- Password -->
          <div class="mb-3">
            <label for="password2" class="form-label">Konfirmasi Password</label>
            <input type="password" class="form-control" id="password2" name="password2" required>
          </div>
          <!-- Submit Button -->
          <button type="submit" class="btn btn-primary" name="register">Buat Akun</button>
        </form>
      </div>
    </div>
  </div>
</div>