<?php
  $postId = $_GET['v'];
  $post = query("SELECT * FROM post WHERE postId = '$postId'");

  $useriId = $post[0]['userId'];
  $postSender = query("SELECT * FROM users WHERE id = '$useriId'");  
?>

<head>
  <title><?= $postSender[0]['name'] ?> Post - Seiyonime</title>
</head>

<div class="container-fluid p-0 p-md-2">
  <div class="position-relative">
    <div class="container-lg p-0 ps-md-3">
      <a href="?menu=beranda">
        <button type="button" class="btn btn-sm btn-outline-secondary rounded-circle m-2 position-absolute start-0" style="z-index: 1000;"><i class='bx bx-arrow-back'></i></button>
      </a>

      <div class="card m-0 my-md-4 mx-md-2">
        <div class="card-body">
  
          <div class="row">
            <div class="col-12 col-md-9">
              <div class="d-flex flex-column flex-md-row justify-content-center" style="background-color: rgba(0,0,0,0.8);">
                <img src="./img/<?= $post[0]['image'] ?>" class="img-fluid my-auto mx-auto" style="max-height: 75vh;" id="postImg" alt="">
              </div>
            </div>
            <div class="col-12 col-md-3">
              <div class="d-flex flex-column">
                <div class="row">
                  <div class="col-10">
                    <div class="d-flex align-items-center mb-3 mt-3 mt-md-0">
                      <img src="./img/<?= $postSender[0]['image'] ?>" class="rounded-circle me-3" alt="" style="width: 2.5rem" />
                      <h6 class="card-title my-auto text-nowrap text-truncate"><?= $postSender[0]['name'] ?></h6>
                    </div>
                  </div>
                  <?php if($_SESSION['id'] == $postSender[0]['id']) : ?>
                    <div class="col-2 p-0">
                      <a href="" data-bs-toggle="modal" data-bs-target="#delete-post">
                        <button class="btn btn-outline-danger px-2 py-1 my-3 my-md-0"><i class="bx bxs-trash"></i></button>
                      </a>
                    </div>
                  <?php endif; ?>
                </div>
                <p class="">
                  <?= $post[0]['description'] ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="delete-post" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Postingan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hapus postingan ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="index.php?menu=delete-post&id=<?= $postId ?>">
          <button type="button" class="btn btn-danger">Hapus</button>
        </a>
      </div>
    </div>
  </div>
</div>
