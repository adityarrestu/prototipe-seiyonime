<!-- Beranda -->
<div class="container">
  <div class="rounded container border my-3 p-4">
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3 mt-1" data-masonry='{"percentPosition": true }'>
      <!-- Card Contents -->
      <?php 
        foreach ($contents as $content) :
        $postSender = query("SELECT * FROM users WHERE id = '$content[userId]'");
      ?>
        <div class="col">
          <div class="card p-2">
            <img class="img-fluid" src="./img/<?= $content['image'] ?>" alt="" />
            <div class="card-body p-2">
              <div class="d-flex align-items-center mb-3">
                <img src="./img/profile.jpg" class="rounded-circle me-3" alt="" style="width: 2.5rem" />
                <h5 class="card-title my-auto"><?= $postSender[0]['name'] ?></h5>
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