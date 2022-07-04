<?php 
  require 'upload-img.php';

  function post($data) {
    global $conn;

    // ambil data
    $id = htmlspecialchars($data["id"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $gambar = upload();

    if(!$gambar) {
      return false;
    }

    $query = "INSERT INTO post VALUES ('', '$id', '$gambar', '$deskripsi)";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
  }

?>