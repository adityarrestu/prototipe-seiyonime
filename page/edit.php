<head>
  <title><?= $user[0]['name'] ?> - Seiyonime</title>
</head>

<?php 
  if(isset($_POST['editProfil'])) {
    $id =  $_SESSION['id'];
    $userImg = upload();
    
    if(!$userImg) {
      return false;
    }
  
    $query = "UPDATE users SET image = '$userImg' WHERE id = '$id'";
    mysqli_query($conn, $query);
    
    echo "
      <script>
        alert('Profil berhasil diubah');
        window.location.href = 'index.php?menu=profil&u=';
      </script>
    ";
  }
?>

<div class="container">
  <div class="card my-3">
    <div class="card-body">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="row row-cols-2">
          <div class="col-4 col-sm-3 col-lg-2">
            <div class="d-flex align-items-center justify-content-center">
              <img src="./img/<?= $user[0]['image'] ?>" id="userImg" class="img-fluid rounded-circle mx-auto" style="max-height: 7rem;" alt="" />
            </div>
          </div>
          <div class="col">
              <button class="btn btn-outline-secondary position-relative overflow-hidden" type="button" id="button-addon1" >Button
                <input type="file" name="gambar" onchange="previewImg(event)" class="form-control position-absolute top-0 end-0 fs-6 text-start opacity-0 outline-none d-block" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              </button>
              <button type="submit" class="btn btn-primary mt-4" name="editProfil">Post</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script type='text/javascript'>
  function previewImg(event) 
  {
  var reader = new FileReader();
  reader.onload = function()
  {
    var output = document.getElementById('userImg');
    output.src = reader.result;
  }
  reader.readAsDataURL(event.target.files[0]);
  }
</script>