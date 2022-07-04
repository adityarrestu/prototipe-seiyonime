<div class="container">
  <div class="card my-4">
    <div class="card-body">
      <form action="" method="POST">
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