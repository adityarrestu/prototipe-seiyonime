<?php 
  require './function/connection.php';

  // cek cookie 
  if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if($key === hash('sha256', $row('username'))) {
      $_SESSION['login'] = true;
    }
  }

  if(isset($_POST['login'])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // cek usenrame
    if(mysqli_num_rows($result) === 1) {

      // cek password
      $row = mysqli_fetch_assoc($result);
      if(password_verify($password, $row["password"])) {
        // set session
        if($_SESSION["login"] = true);
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["id"] = $row["id"];

        // cek remember me
        if(isset($_POST['remember'])) {
          // buat cookie
          setcookie('id', $row['id'], time()+60);
          setcookie('key', hash('sha256', $row['username'], time()+60));
        }

        header('Location: ./index.php');
        echo '
          <script>
            alert("berhasil login!");
          </script>
        ';
        exit;
      }
    }

    echo '
      <script>
        alert("Username atau password salah!");
      </script>
    ';
  }
?>

<!-- Modal Form Login -->
<div class="modal fade" id="login-form" tabindex="-1" role="dialog" aria-labelledby="login-form" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- Modal Title -->
      <div class="modal-header">
        <h5 class="modal-title">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- Modal Body -->
      <div class="modal-body">
        <div class="container-fluid">
          <!-- Form Login -->
          <form action="" method="POST">
            <!-- Username -->
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <!-- Password -->
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <!-- CheckBox Remember Me -->
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="remember" name="remember">
              <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary" name="login">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>