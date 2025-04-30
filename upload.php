<?php
$target_dir = "videos/";
$target_file = $target_dir . basename($_FILES["video"]["name"]);
$uploadOk = 1;
$videoFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Cek ukuran
if ($_FILES["video"]["size"] > 50000000) {
  echo "Ukuran video terlalu besar (maks 50MB).";
  $uploadOk = 0;
}

// Hanya MP4
if ($videoFileType != "mp4") {
  echo "Hanya file MP4 yang diizinkan.";
  $uploadOk = 0;
}

if ($uploadOk) {
  if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
    header("Location: index.php");
  } else {
    echo "Terjadi kesalahan saat mengunggah.";
  }
}
?>
