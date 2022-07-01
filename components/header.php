<?php 
  // inisialisasi session
  session_start();

  include 'newpost.php';
  include 'login.php';
  include 'register.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
  <title>Seiyonime</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-sm navbar-dark shadow sticky-sm-top" style="background-color: #1192d3">
    <div class="container">
      <a class="navbar-brand text-white" href="#">SEIYONIME</a>
      <!-- Menu Button -->
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
      <!-- Navigation -->
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <!-- Link to Beranda -->
          <li class="nav-item active">
            <a class="nav-link text-white" href="#">Beranda <span class="visually-hidden">(current)</span></a>
          </li>
          <!-- Link to Marketplace -->
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Marketplace</a>
          </li>
        </ul>
        <!-- Right Side Navbar -->
        <?php
        if (!isset($_SESSION['login'])) {
          echo '
            <div class="d-flex align-items-center my-2 my-lg-0">
              <div class="mx-2">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#register-form">Buat Akun</button>
              </div>
              <div class="mx-2">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#login-form">Login</button>
              </div>
            </div>
          ';
          } else {
            echo '
              <div class="d-flex align-items-center my-2 my-lg-0">
                <div type="button" class="pe-auto d-flex align-kkitems-center text-decoration-none mx-2" data-bs-toggle="modal" data-bs-target="#new-post">
                  <i class="bx bx-plus text-white fs-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Buat Postingan Baru"></i>
                </div>
                <!-- Dropdown Btn -->
                <div class="dropdown">
                  <div class="dropdown-toggle-split" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <a href="pe-auto">
                      <img src="./img/profile.jpg" class="rounded-circle" alt="" style="width: 3rem" />
                    </a>
                  </div>
                  <!-- Dropdown Items -->
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                  </ul>
                </div>
              </div>
            ';
          };
        ?>
      </div>
    </div>
  </nav>