<?php 
require './function/post.php';

if(isset($_POST['submit'])) {

  newPost($_POST);
  var_dump($_FILES['gambar']);
}
?>

<!-- Modal New Post -->
<div class="modal fade" id="new-post" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-new-post" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-new-post">Buat Postingan Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <img src="" class="img-fluid" alt="" />
        </div>
        <!-- Form New Post -->
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <input class="form-control" type="file" id="gambar" name="gambar" />
          </div>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Deskripsi" id="description" name="deskripsi" style="height: 100px"></textarea>
            <label for="description">Description</label>
          </div>
          <input type="hidden" name="id" value=<?= $_SESSION['id'] ?>>
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary mt-4" name="submit">Post</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>