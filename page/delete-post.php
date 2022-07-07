<?php 
  $postId = $_GET['id'];
  mysqli_query($conn, "DELETE FROM post WHERE postId = $postId");
  
  echo "
    <script>
      window.location.href = 'index.php?menu=beranda';
    </script>
  ";
  exit;
?>