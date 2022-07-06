<head>
  <title><?= $user[0]['name'] ?> - Seiyonime</title>
</head>

<?php 
  $userContent = query("SELECT * FROM post WHERE userId = $_SESSION[id]");
  $postSender = query("SELECT * FROM users WHERE id = '$_SESSION[id]'");
?>

<!-- Profile -->
<div class="container">
  <div class="rounded container border my-3 p-4">
    <div class="row row-cols-2">
      <div class="col-4 col-sm-3 col-lg-2">
        <div class="d-flex align-items-center justify-content-center">
          <img src="./img/<?= $user[0]['image'] ?>" class="img-fluid rounded-circle mx-auto" style="max-height: 7rem;" alt="" />
        </div>
      </div>
      <div class="col">
        <p class="h3"><?= $user[0]['name'] ?></p>
        <p class="fs-5 fs-md-2">@<?= $user[0]['username'] ?></p>
        <button class="btn btn-primary btn-sm">
          <a href="?menu=edit" class="text-white text-decoration-none">Edit Profil</a>
        </button>
      </div>
    </div>
    <hr>
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3 mt-1" data-masonry='{"percentPosition": true }'>
      <!-- Card Contents -->
      <?php foreach ($userContent as $content) : ?>
        <div class="col">
          <div class="card p-2">
            <img class="img-fluid" src="./img/<?= $content['image'] ?>" alt="" />
            <div class="card-body p-2">
              <div class="d-flex align-items-center mb-3">
                <img src="./img/<?= $postSender[0]['image'] ?>" class="rounded-circle me-3" alt="" style="width: 2.5rem" />
                <h6 class="card-title my-auto"><?= $postSender[0]['name'] ?></h6>
              </div>
              <p class="card-text">
                <?= $content['description'] ?>
              </p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>