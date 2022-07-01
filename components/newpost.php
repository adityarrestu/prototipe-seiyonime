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
          <img src="img/drstone.jpg" class="img-fluid" alt="" />
        </div>
        <!-- Form New Post -->
        <form>
          <div class="mb-3">
            <input class="form-control" type="file" id="formFile" />
          </div>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Deskripsi" id="description" style="height: 100px"></textarea>
            <label for="description">Description</label>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <button type="button" class="btn btn-primary">Post</button>
      </div>
    </div>
  </div>
</div>