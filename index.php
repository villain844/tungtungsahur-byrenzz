<?php
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Video Tungtung Sahur</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Video Tungtung Sahur</h1>
    <a href="upload_form.php" class="upload-btn">+ Upload Video</a>
  </header>

  <main class="video-container">
    <?php
    $files = array_diff(scandir("videos"), array('.', '..'));
    foreach ($files as $file) {
      echo '<div class="video-card">';
      echo '<video controls src="videos/' . htmlspecialchars($file) . '"></video>';
      echo '<p>' . htmlspecialchars($file) . '</p>';
      echo '</div>';
    }
    ?>
  </main>
</body>
</html>
