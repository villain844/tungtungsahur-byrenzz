<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Upload Video Sahur</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Upload Video Tungtung Sahur</h1>
    <a href="index.php" class="back-btn">&larr; Kembali</a>
  </header>

  <main class="upload-form">
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <label>Pilih Video (MP4, maks 50MB):</label>
      <input type="file" name="video" accept="video/mp4" required>
      <button type="submit">Upload</button>
    </form>
  </main>
</body>
</html>
