<?php 
function content($menu) {
  $cek = trim($menu);
  if($cek == '') {
    $file = 'beranda.php';
  }
  if($cek == 'beranda') {
    $file = 'beranda.php';
  }
  if($cek == 'logout') {
    $file = 'logout.php';
  }
  if($cek == 'profil') {
    $file = 'profile.php';
  }
  if($cek == 'marketplace') {
    $file = 'posting.php';
  }
  return $file;
}
?>