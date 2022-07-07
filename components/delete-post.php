<!-- Modal -->
<div class="modal fade" id="delete-post" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Hapus Postingan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
      <div class="modal-body">
        <div class="container-fluid">
          Hapus postingan Anda?
        </div>
      </div>
      <div class="modal-footer">
        <form action="" method="POST">
          <input type="hidden" id="postId" name="postId" value="">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger" name="deletePost">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
