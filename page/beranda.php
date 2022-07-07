<head>
  <title>Siyonime</title>
</head>

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
            <a href="" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#view-post" data-bs-content="<?= $content['image'] ?>" data-bs-postid="<?= $content['postId'] ?>">
              <img class="img-fluid" src="./img/<?= $content['image'] ?>" alt="" />
            </a>
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

<script type='text/javascript'>
  let modalPost = document.getElementById('view-post')
  let modalDelete = document.getElementById('delete-post')

  modalPost.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    let button = event.relatedTarget
    // Extract info from data-bs-* attributes
    let postImg = button.getAttribute('data-bs-content')
    let modalBodyInput = modalPost.querySelector('.modal-body img')
    modalBodyInput.src = "./img/" + postImg
    
    let postId = button.getAttribute('data-bs-postid')
    let modalId = modalDelete.querySelector('#postId')
    modalId.value = postId
    
  })
</script>