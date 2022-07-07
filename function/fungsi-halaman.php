<?php 
function content($menu) {
  $cek = trim($menu);
  if($cek == '') {
    $file = 'beranda.php';
  }
  if($cek == 'beranda') {
    $file = 'beranda.php';
  }
  if($cek == 'profil') {
    $file = 'profile.php';
  }
  if($cek == 'edit') {
    $file = 'edit.php';
  }
  if($cek == 'marketplace') {
    $file = 'posting.php';
  }
  if($cek == 'post') {
    $file = 'view-post.php';
  }
  if($cek == 'delete-post') {
    $file = 'delete-post.php';
  }
  return $file;
}
?>