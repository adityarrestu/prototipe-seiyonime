<?php 
  $postId = $_GET['id'];
  $post = query("SELECT * FROM post WHERE postId = '$id'");
  $gambarLama = './img/'.$post[0]['image'];

  $result = mysqli_query($conn, "DELETE FROM post WHERE postId = $postId");
  
  if($result) {

    if(!unlink($gambarLama)) {
      echo '
        <script>
          alert("Tidak bisa menghapus postingan karena error");
        </script>
      ';
    } 
    
    echo '
      <script>
        alert("Postingan berhasil dihapus!");
        window.location = "index.php?menu=beranda";
      </script>
    ';
  }
  exit;
?>