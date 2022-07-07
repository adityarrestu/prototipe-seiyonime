<?php 
  include 'delete-post.php';
?>

<!-- Modal -->
<div class="modal fade" id="view-post" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen" role="document">
    <div class="modal-content" style="background-color: rgba(0, 0, 0, 0.8);">
      <div class="modal-body p-0 position-relative d-flex flex-column justify-content-center overflow-hidden">
        <img src="" class="img-fluid my-auto mx-auto" style="max-height: 90vh;" id="postImg" alt="">
        <div class="mt-5"></div>
        <div class="card-img-overlay">
          <button type="button" class="btn-close bg-light m-2 position-absolute top-0 start-0" data-bs-dismiss="modal" aria-label="Close"></button>
          <?php if($_SESSION) : ?>
            <div class="position-absolute m-2 p-1 bottom-0 vw-100 d-flex aling-items-center justify-content-center">
              <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete-post"><i class='bx bxs-trash'></i></button>
            </div>  
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
