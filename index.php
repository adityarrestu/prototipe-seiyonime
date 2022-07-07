<?php 
  include './function/fungsi-halaman.php';
  require_once './components/header.php'; 
  error_reporting(E_ERROR | E_PARSE);
  
  // menampilkan content yang diinginkan
  $file = content($_GET['menu']);
  include "page/$file";

  require_once './components/footer.php';
?>